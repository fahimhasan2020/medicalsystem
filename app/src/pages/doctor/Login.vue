<template>
<div class="justify-center pd-t-2">
    <q-icon name="far fa-user-circle text-extra-biggest text-default" style="margin-left:44%" />
    <p class="text-center text-default text-bold">Welcome to Doctor panel</p>
    <div class="w-100 text-center">
        <div class="form-group">
            <input type="email" v-model="email" name="username" class="form-control" placeholder="Username" id="username">
        </div>
         <div class="form-group">
            <input type="password" v-model="password" name="password" placeholder="*****" class="form-control" id="password">
        </div>
        <p class="text-small text-end">Dont have account? <router-link to="/doctor/register">Register</router-link></p>
        <button @click="login" class="btn btn-block btn-primary">Login</button>
    </div>

</div>
</template>
<script>
export default{
    name:'Login',
    data(){
        return{
            email:'',
            password:'',
            
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
    methods:{
        login(){
            fetch(this.host+'doctor/login',{
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        username:this.email,
                        password:this.password,
                        device_name:'oppo'
                    })
                 }).then((response)=>response.json()).then((responseJson)=>{
                console.log(responseJson);
                  if(responseJson.hasOwnProperty('message')){
                      this.$q.notify('Invalide login')
                  }else{
                      this.userType = 'doctor';
                      this.loggedIn = true;
                      localStorage.setItem("loggedIn",'true');
                      this.$router.push({path:'/doctor/home'});
                  }
                
            })   
        }
    }

}
</script>