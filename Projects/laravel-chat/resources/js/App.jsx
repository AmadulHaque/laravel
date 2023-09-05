import React,{Fragment } from 'react';
import {BrowserRouter,Routes,Route} from "react-router-dom";
import DashboardPage from "./Pages/DashboardPage";
import PosPage from "./Pages/PosPage";
import Page404 from "./Pages/Page-404";


const App = () => {
    return (
        <div className="App">
              <Fragment>
                    <BrowserRouter>
                        <Routes>
                            <Route exact path="/" element={<DashboardPage/>}/>
                            <Route exact path="/pos" element={<PosPage/>}/>
                            <Route path="*" element={<Page404/>}/>
                        </Routes>
                    </BrowserRouter>
              </Fragment>
        </div>
    );
};

export default App;