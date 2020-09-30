import React from 'react';
import ReactDOM from 'react-dom';
import RouterComponent from "../router/RouterComponent";

function App() {
    return (
        <RouterComponent/>
    )
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App/>, document.getElementById('root'));
}
