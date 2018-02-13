import Home from './views/Home'
import Login from './views/Login'
import Register from './views/Register'
import VueRouter from 'vue-router'

let routes = [
    { path : '/', component : Home },
    { path : '/login', component : Login },
    { path : '/regiter', component : Register }
]

export default new VueRouter({
    routes
});