<template>
    <div class="q-pa-md" style="max-width: 350px">
    <q-list bordered separator>
      <q-item @click="navi('/clinic/home')" clickable v-ripple>
        <q-item-section>Dashboard</q-item-section>
      </q-item>
      <q-item @click="navi('/clinic/profile')" clickable v-ripple>
        <q-item-section>
          <q-item-label>Profile</q-item-label>
        </q-item-section>
      </q-item>
      <q-item @click="navi('/clinic/tests')" clickable v-ripple>
        <q-item-section>
          <q-item-label overline>Tests</q-item-label>
        </q-item-section>
      </q-item>
      <q-item @click="goUrl('/clinic/login')" clickable v-ripple>
        <q-item-section>
          <q-item-label overline>Logout</q-item-label>
        </q-item-section>
      </q-item>
    </q-list>
  </div>
</template>
<script>
export default{
    name:'UserSideBar',
    methods:{
        goUrl(url){
          this.loggedIn = false;
          this.userType = '';
          this.$router.push({path:url})
        },
        navi(url){
           this.$router.push({path:url})
        }
    },
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

}
</script>