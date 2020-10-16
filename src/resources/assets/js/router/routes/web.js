function page (path) {
    return () => import(`~/pages/${path}`).then(m => m.default || m)
}

export default [
    { 
        path: '/', 
        name: 'home', 
        component: page('home.vue') 
    },

    { 
        path: '*', 
        component: page('errors/404.vue') 
    }
]