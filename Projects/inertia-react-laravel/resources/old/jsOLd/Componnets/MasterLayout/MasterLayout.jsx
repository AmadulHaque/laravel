 import React ,{Fragment,useEffect} from 'react'
 import { Link } from '@inertiajs/inertia-react'
 import { Toaster } from 'react-hot-toast';
 import 'pace-js/themes/blue/pace-theme-minimal.css'; // Import the desired theme CSS
 import 'pace-js';

 export default function MasterLayout(props) {


    useEffect(() => {
        Pace.stop();
       
    }, []);


   return (
    <Fragment>
        <Toaster/>
        <div id="app">
            <nav id="navbar-main" className="navbar is-fixed-top">
                <div className="navbar-brand">
                    <a className="navbar-item mobile-aside-button">
                        <span className="icon">
                        <i className="mdi mdi-forwardburger mdi-24px" />
                        </span>
                    </a>
                    <div className="navbar-item">
                        <div className="control">
                        <input placeholder="Search everywhere..." className="input" />
                        </div>
                    </div>
                </div>
                <div className="navbar-brand is-right">
                    <a className="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
                        <span className="icon">
                            <i className="mdi mdi-dots-vertical mdi-24px" />
                        </span>
                    </a>
                </div>
            </nav>
            <aside className="aside is-placed-left is-expanded">
                <div className="aside-tools">
                    <div> Admin <b className="font-black">One</b>
                </div>
                </div>
                <div className="menu is-menu-main">
                <p className="menu-label">General</p>
                <ul className="menu-list">
                    <li className={(navData) => navData.isActive ? "active" : "" }>
                        <Link href="/">
                            <span className="icon"> <i className="mdi mdi-desktop-mac" /> </span>
                            <span className="menu-item-label">Dashboard</span>
                        </Link>
                    </li>
                </ul>
                <p className="menu-label">Manage Product</p>
                    <ul className="menu-list">
                        <li className={(navData) => navData.isActive ? "active" : "" }>
                            <Link href="/products">
                                <span className="icon">
                                <i className="mdi mdi-table" />
                                </span>
                                <span className="menu-item-label">Products</span>
                            </Link>
                        </li>
                        <li className={(navData) => navData.isActive ? "active" : "" }>
                            <Link href="/product/create">
                                <span className="icon">
                                <i className="mdi mdi-square-edit-outline" />
                                </span>
                                <span className="menu-item-label">Create Product</span>
                            </Link>
                        </li>
                        <li className={(navData) => navData.isActive ? "active" : "" }>
                            <Link href="/tasks">
                                <span className="icon">
                                <i className="mdi mdi-square-edit-outline" />
                                </span>
                                <span className="menu-item-label">Task Manage</span>
                            </Link>
                        </li>
                    </ul>
                </div>
            </aside>

            {/* container start */}
            {props.children}
            {/* container end */}
        </div>

    </Fragment>
   )
 }
 