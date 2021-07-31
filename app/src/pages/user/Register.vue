<template>
<div class="justify-center pd-t-2">
    <div class="w-100 text-center">
        <h4 class="text-center text-primary">Registration Panel</h4>
        <div class="form-group">
            <input type="email" name="username" v-model="email" class="form-control" placeholder="Username" id="username">
        </div>
         <div class="form-group">
            <input type="password" name="password" v-model="password" placeholder="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <input type="password" name="password" v-model="confirmPassword" placeholder="Password Confirm" class="form-control" id="password">
        </div>
        <p class="text-small text-end">Already have account? <router-link to="/user/login">Login</router-link></p>
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
    methods:{
        register(){
            
        }
    },
    mounted(){
        console.log(this.$store.state.auth.host);
    }

}
</script>