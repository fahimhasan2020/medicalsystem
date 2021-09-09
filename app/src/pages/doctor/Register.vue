<template>
<div class="justify-center pd-t-2">
    <div class="w-100 text-center">
        <h4 class="text-center text-primary">Registration Panel</h4>
        <div class="form-group">
            <input type="email" v-model="email" name="username" class="form-control" placeholder="Username" id="username">
        </div>
         <div class="form-group">
            <input type="password" v-model="password" name="password" placeholder="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <input type="password" v-model="confirmPassword" name="password" placeholder="Password Confirm" class="form-control" id="password">
        </div>
        <p class="text-small text-end">Already have account? <router-link to="/doctor/login">Login</router-link></p>
        <button @click="register" class="btn btn-block btn-primary">Register</button>
    </div>

</div>
</template>
<script>
export default{
    name:'Register',
    data(){
        return{
            email:'',
            password:'',
            confirmPassword:'',
            firstName:'',
            lastName:''
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
    }
  },
    methods:{
       register(){
            fetch(this.host+'doctor/register',{
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        email:this.email,
                        password:this.password,
                        password_confirmation:this.confirmPassword
                    })
                 }).then((response)=>response.json()).then((responseJson)=>{
                this.$q.notify('Registerd as user. login now');
                setTimeout(()=>{
                    this.$router.push({path:'/doctor/login'})
                },4000);
                
            })   
        }
    },
    mounted(){
      //  console.log(this.$store.state.auth.host);
    },


}
</script>