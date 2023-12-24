document.addEventListener('DOMContentLoaded', function () {
    initAdmin();
});

function initAdmin() {
    let admin = {};
    admin.ajax = {
        init: function() {
            // Initialize AJAX navigation
            this.bindEvents();
            let url =window.location.href;
            admin.ajax.navigate(url);
            admin.menu.setActive(url);
        },

        bindEvents: function() {
            // Bind click events for AJAX navigation
            document.addEventListener('click', function(event) {
            
                if (event.target.matches('a[href], a[href] *')) {
                    console.clear();
                    let a = event.target.closest('a');
                    let url = a.getAttribute('href');

                    if (url.charAt(0) !== '#' && url.substring(0, 11) !== 'javascript:' && url !== '' && !a.classList.contains('no-ajax') && a.getAttribute('target') !== '_blank') {
                        admin.ajax.navigate(url);
                        admin.menu.setActive(url);
                        history.pushState(null, null, url);
                        event.preventDefault();
                    }
                }
            });
            NProgress.configure({ parent: '#pjax-container' });
        },


        navigate: function(url) {
            // Perform AJAX navigation to the given URL
            // Implement code to load content using AJAX to the specified URL
            // You can use fetch, XMLHttpRequest, or any library like Axios to perform AJAX requests
            NProgress.start();
            // Example using fetch API

            fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {

                let tempElement = document.createElement('div');
                tempElement.innerHTML = data;
                // Extract content within the element with the 'app' ID
                let appContent = tempElement.querySelector('#app').innerHTML;
                // Update the content container with the retrieved HTML data
                document.getElementById('app').innerHTML = appContent;
                // Execute scripts within the loaded content

                const scripts = document.querySelectorAll('script:not([class])');

                scripts.forEach(script => {
                    if (script.parentNode) {
                        script.parentNode.removeChild(script);
                    }
                });

                
                // let script = tempElement.querySelector('#script').innerHTML;
                // const newScript = document.createElement('script');
                // newScript.textContent = script;
                // document.body.appendChild(newScript);

                tempElement.querySelectorAll('script').forEach(script => {
                    const scriptContent = script.textContent;
                    const newScript = document.createElement('script');
                    if(scriptContent.length > 0){
                        newScript.textContent = scriptContent;
                        document.body.appendChild(newScript);
                    }
                });

                NProgress.done();
                admin.pages.init();

            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });
        }
    };

    admin.pages = {
        init: function() {
            // Initialize page-specific logic here
            // Example: call functions or initialize components for the current page
            this.setTitle();
            // Other page-specific initializations...
        },

        setTitle: function() {
            // Set the title of the page
            // Example: Set the title based on the content or page heading
            if (document.querySelector('main h1')) {
                let h1_title = document.querySelector('main h1').innerText;
                if (h1_title) {
                    document.title = 'Admin | ' + h1_title;
                }
            }
        },

        // Define other page-specific functions or initializations as needed
        // For instance, functions to handle specific elements or components on the page
        // Example: function to initialize certain plugins or UI components
    };

    admin.menu = {
        setActive: function (url) {
            let menuItems = document.querySelectorAll('#sidebar-menu a');
            menuItems.forEach((a) => {
                let li = a.closest('li');
                let ul = a.closest('ul');
                li.classList.remove('active');
                let submenu = li.querySelector('ul.nav-list');
                if (submenu) {
                    submenu.style.display = 'none';
                }
                a.blur();

                if (a.getAttribute('href') === url) {
                    li.classList.add('active');
                    ul.style.display = 'block';
                    let parentSubmenu = li.closest('.submenu');
                    if (parentSubmenu) {
                        parentSubmenu.classList.add('active');
                        let parentSubmenuLink = parentSubmenu.querySelector('a');
                        if (parentSubmenuLink) {
                            parentSubmenuLink.classList.add('active');
                        }
                    }
                }
            });
        }
    };

    // Call necessary initialization functions
    admin.ajax.init();
    admin.pages.init();
}
