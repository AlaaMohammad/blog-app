import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import App from './components/App'
import { BrowserRouter, Switch, Route } from "react-router-dom";



// change the getElementId from example to app
// render App component instead of Example
ReactDOM.render(
    <BrowserRouter>
        <App />
    </BrowserRouter>,
    document.getElementById("app")
);

