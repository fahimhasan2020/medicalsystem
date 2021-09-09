
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
      { path: 'profile', component: () => import('pages/user/Profile.vue') },
      { path: 'tests', component: () => import('pages/user/Tests.vue') },
      { path: 'home', component: () => import('pages/user/Home.vue') },
      { path: 'stats', component: () => import('pages/user/Stats.vue') },
      { path: 'reports', component: () => import('pages/user/Reports.vue') },
      { path: 'tips', component: () => import('pages/user/Tips.vue') }
    ]
  },
  {
    path: '/doctor',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: 'login', component: () => import('pages/doctor/Login.vue') },
      { path: 'register', component: () => import('pages/doctor/Register.vue') },
      { path: 'profile', component: () => import('pages/doctor/Profile.vue') },
      { path: 'patients', component: () => import('pages/doctor/Patients.vue') },
      { path: 'home', component: () => import('pages/doctor/Home.vue') },
      { path: 'test/:mail', component: () => import('pages/doctor/AddTest.vue') }
    ]
  },
  {
    path: '/clinic',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: 'login', component: () => import('pages/clinic/Login.vue') },
      { path: 'register', component: () => import('pages/clinic/Register.vue') },
      { path: 'home', component: () => import('pages/clinic/Home.vue') },
      { path: 'profile', component: () => import('pages/clinic/Profile.vue') },
      { path: 'tests', component: () => import('pages/clinic/Tests.vue') }
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
