import React from 'react';
import Sidebar from './Sidebar';


const MainLayout = (props) => {
    return (
        <div className="hide-print flex flex-row h-screen antialiased text-blue-gray-800">
          {/* sidebar start */}
          <Sidebar/>
          {/* sidebar end */}
          <div className="flex-grow flex">
              <div className="flex flex-col bg-blue-gray-50 h-full w-full py-4">
              {props.children}
              </div>
          </div>

        </div>
    );
};

export default MainLayout;