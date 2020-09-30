import React from "react";
import {router} from "./router";
import {BrowserRouter, Route} from "react-router-dom";

export default function RouterComponent() {
    return (
        <BrowserRouter>
            {router.map(route => (
                <Route exact key={route.key} path={route.path} component={route.component}/>
            ))}
        </BrowserRouter>
    )
}
