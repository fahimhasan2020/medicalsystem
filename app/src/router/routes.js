
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') }
    ]
  },
  {
    path: '/user',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: 'login', component: () => import('pages/user/Login.vue') },
      { path: 'register', component: () => import('pages/user/Register.vue') },
      { path: 'home', component: () => import('pages/user/Home.vue') }
    ]
  },
  {
    path: '/doctor',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: 'login', component: () => import('pages/doctor/Login.vue') },
      { path: 'register', component: () => import('pages/doctor/Register.vue') },
      { path: 'home', component: () => import('pages/user/Home.vue') }
    ]
  },
  {
    path: '/clinic',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: 'login', component: () => import('pages/clinic/Login.vue') },
      { path: 'register', component: () => import('pages/clinic/Register.vue') },
      { path: 'home', component: () => import('pages/clinic/Home.vue') }
    ]
  },
  {
    path: '/help',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Help.vue') },
    ]
  },
  {
    path: '/info',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Info.vue') },
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
