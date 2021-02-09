/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require("./bootstrap");
import "../css/app.css";

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import React, { createContext, useContext } from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";

// Components imports
import Home from "./components/layout/Home";
import AssoList from "./components/AssoList/AssoList";
import Asso from "./components/Asso.js/Asso";
import Navbar from "./components/layout/Navbar";

const App = () => {
    return (
        <Router>
            <div className="container-fluid" style={{ padding: "0" }}>
                <Switch>
                    <Route path="/:id">
                        <Navbar />
                        <Asso posts={posts} />
                    </Route>
                    <Route path="/">
                        <Home />
                        <AssoList associations={associations} />
                    </Route>
                </Switch>
            </div>
        </Router>
    );
};

export default App;

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}
