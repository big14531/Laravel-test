import Home from './views/Home'
import About from './views/About'
import VueRouter from 'vue-router'

let routes = [
    {
        path : '/',
        component : Home
    },
    {
        path : '/about',
        component : About
    }
]

export default new VueRouter({
    routes
});