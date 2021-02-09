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

// Components imports
import Home from "./components/layout/Home";
import AssoList from "./components/AssoList/AssoList";

console.log(associations);

const App = () => {
    return (
        <div className="container-fluid" style={{ padding: "0" }}>
            <Home />
            <AssoList associations={associations} />
        </div>
    );
};

export default App;

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}
