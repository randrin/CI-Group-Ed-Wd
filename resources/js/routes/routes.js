import Home from "../components/Site/Home";
import About from "../components/Site/About";
import Contact from "../components/Site/Contact";
import Services from "../components/Site/Services";
import Projects from "../components/Site/Projects";
import Dashboard from "../components/Dashboard/Dashboard";
import Login from "../components/Site/auth/Login";
import Error404 from "../components/Site/inc/Error404";
import Registration from "../components/Site/auth/Registration";
import ChangePassword from "../components/Site/partials/ChangePassword";

export const routes = [
    { path: '/dashboard', name: 'dashboard.index', component: Dashboard },
    { path: '/login', name: 'site.login', component: Login },
    { path: '/register', name: 'site.register', component: Registration },
    { path: '/change/password', name: 'site.changePassword', component: ChangePassword },
    { path: '/', name: 'site.home', component: Home },
    { path: '/about', name: 'site.about', component: About },
    { path: '/contact-us', name: 'site.contact', component: Contact },
    { path: '/nos-services', name: 'site.services', component: Services },
    { path: '/nos-projects', name: 'site.projects', component: Projects },
    { path: '**', component: Error404 }
];

