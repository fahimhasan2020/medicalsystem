<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="leftDrawerOpen = !leftDrawerOpen"
        />
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      content-class="bg-grey-1"
    >
      <q-list>
        <router-link
        class="nav-links"
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
          :to="link.link"
        >{{link.title}}</router-link>
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
const linksData = [
  {
    title: 'Home',
    caption: 'Main Panel',
    icon: 'school',
    link: '/'
  },
  {
    title: 'User Login',
    caption: 'User Panel',
    icon: 'school',
    link: '/user/login'
  },
  {
    title: 'Doctor Login',
    caption: 'Doctor Panel',
    icon: 'code',
    link: '/doctor/login'
  },
  {
    title: 'Test Panel',
    caption: 'Diagnostics system',
    icon: 'chat',
    link: '/clinic/login'
  },
  {
    title: 'Help',
    caption: 'System help',
    icon: 'chat',
    link: '/help'
  },
  {
    title: 'Info',
    caption: 'System info',
    icon: 'chat',
    link: '/info'
  },
];

export default {
  name: 'MainLayout',
  components: { 
    //
  },
  data () {
    return {
      leftDrawerOpen: false,
      essentialLinks: linksData
    }
  }
}
</script>
