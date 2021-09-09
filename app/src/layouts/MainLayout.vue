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
        <q-toolbar-title>

        </q-toolbar-title>
        <div>
          <q-btn v-if="loggedIn && userType === 'user'" to="/user/home" color="purple-9" text-color="white" label="Dashboard" />
          <q-btn v-else-if="loggedIn && userType === 'doctor'" to="/doctor/home" color="purple-9" text-color="white" label="Dashboard" />
          <q-btn v-else-if="loggedIn && userType === 'tester'" to="/clinic/home" color="purple-9" text-color="white" label="Dashboard" />         
        </div>
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
        to="/"
        >Home</router-link>
        <router-link
        v-if="!loggedIn"
        class="nav-links"
        to="/user/login"
        >User Panel</router-link>
         <router-link
         v-if="!loggedIn"
        class="nav-links"
        to="/doctor/login"
        >Doctor Panel</router-link>
         <router-link
         v-if="!loggedIn"
        class="nav-links"
        to="/clinic/login"
        >Test Panel</router-link>
         <router-link
        class="nav-links"
        to="/help"
        >Help</router-link>
         <router-link
        class="nav-links"
        to="/info"
        >Info</router-link>
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
  // mounted(){
  //   if(this.loggedIn){
  //     if(this.userType == 'user'){
  //       this.dashboardPath = '/user/home';
  //     }else if(this.userType === 'tester'){
  //       this.dashboardPath = '/clinic/home';
  //     }else if(this.userType === 'doctor'){
  //       this.dashboardPath = '/doctor/home';
  //     }
  //     console.log(this.dashboardPath);
  //   }
  // },
   computed: {
    userName: {
      get() {
        return this.$store.state.auth.userName;
      },
      set(val) {
        this.$store.commit("auth/updateName", val);
      }
    },
    cash: {
      get() {
        return this.$store.state.auth.cash;
      },
      set(val) {
        this.$store.commit("auth/updateCash", val);
      }
    },
    withdrow: {
      get() {
        return this.$store.state.auth.withdrow;
      },
      set(val) {
        this.$store.commit("auth/updateWithdrow", val);
      }
    },
    host: {
      get() {
        return this.$store.state.auth.host;
      },
      set(val) {
        this.$store.commit("auth/updateHost", val);
      }
    },
    loggedIn: {
      get() {
        return this.$store.state.auth.loggedIn;
      },
      set(val) {
        this.$store.commit("auth/updateLogin", val);
      }
    },
    userType:{
        get(){
            return this.$store.state.auth.userType;
        },
        set(val) {
            this.$store.commit("auth/updateUserType", val);
        }
    }
  },
  data () {
    return {
      leftDrawerOpen: false,
      essentialLinks: linksData,
      dashboardPath:''
    }
  }
}
</script>
