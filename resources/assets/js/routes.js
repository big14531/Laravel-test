import Home from './views/Home'
import Gallery from './views/Gallery'
import VueRouter from 'vue-router'

let routes = [
    { path : '/', component : Home },
    { path : '/gallery', component : Gallery }
]
export default new VueRouter({
    routes
});