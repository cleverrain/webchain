import './config/config';
import Mainlayout from './components/layouts/Mainlayout';
import Navbar from './components/Navbar';
import routes from "./config/routes";

let config = { };

for (let route in sortObject(routes)) {
    const path = './controllers/' + routes[route];

    if (new RegExp('^'+escapeRegEx(route)+'$').test(window.location.pathname)) {
        const controller = require(`${path}`);
        config = controller.default;
        break;
    }
}

config.el = '#app';
config.components = Object.assign(
    config.components || { }, { Mainlayout, Navbar }
);


const app = new Vue(config);

function escapeRegEx(s) {
    return s.replace(/[-\/\\]/g, '\\$&');
}

function sortObject(dict) {
    return Object.keys(dict).sort().reduce((r, k) => Object.assign(r, { [k]: dict[k] }), {});
}