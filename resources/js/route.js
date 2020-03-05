import Home from "./components/Home";
import About from "./components/About";
import Blog from "./components/Blog";

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home
        },

        {
            path: '/about',
            component: About
        },

        {
            path: '/blogs',
            component: Blog
        }
    ]
}
