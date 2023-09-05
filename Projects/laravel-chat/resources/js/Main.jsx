import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import {Provider} from "react-redux";
import { ToastContainer } from 'react-toastify';
import '../css/app.css';
import '../css/style.css';
import 'react-toastify/dist/ReactToastify.css';
import store from './redux/store/store';

ReactDOM.render(
    <React.StrictMode>
        <ToastContainer />
        <Provider store={store}>
            <App />
        </Provider>
    </React.StrictMode>,
    document.getElementById('root')
);