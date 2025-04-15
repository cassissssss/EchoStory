// resources/js/router.js
import { createRouter, createWebHistory } from 'vue-router'
import StoryList from './pages/StoryList.vue'

const routes = [
    { path: '/', name: 'home', component: StoryList }, // 👈 page d'accueil = liste des histoires
    { path: '/stories', name: 'stories', component: StoryList },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
