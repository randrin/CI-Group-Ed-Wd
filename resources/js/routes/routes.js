import Home from "../components/Home";
import About from "../components/About";
import Contact from "../components/Contact";
import Services from "../components/Services";
import Projects from "../components/Projects";

export const routes = [
    { path: '/', name: 'site.home', component: Home },
    { path: '/about', name: 'site.about', component: About },
    { path: '/contact-us', name: 'site.contact', component: Contact },
    { path: '/nos-services', name: 'site.services', component: Services },
    { path: '/nos-projects', name: 'site.projects', component: Projects },
];

