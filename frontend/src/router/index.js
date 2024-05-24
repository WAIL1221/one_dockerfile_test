import { createRouter, createWebHistory } from 'vue-router';
import Etudiant from '../components/Etudiant.vue';
import Prof from '../components/Prof.vue';
import WelcomePage from '../components/WelcomePage.vue';

const routes = [
    {
        path: '/',
        name: 'WelcomePage',
        component: WelcomePage,
    },
    {
        path: '/etudiant',
        name: 'Etudiant',
        component: Etudiant,
    },
    {
        path: '/prof',
        name: 'Prof',
        component: Prof,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
