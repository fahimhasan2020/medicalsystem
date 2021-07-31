<template>
<div class="justify-center pd-t-2">
    <q-icon name="far fa-user-circle text-extra-biggest text-default" style="margin-left:44%" />
    <p class="text-center text-default text-bold">Welcome to user panel</p>
    <div class="w-100 text-center">
        <div class="form-group">
            <input type="email" name="username" class="form-control" placeholder="Username" id="username">
        </div>
         <div class="form-group">
            <input type="password" name="password" placeholder="*****" class="form-control" id="password">
        </div>
        <p class="text-small text-end">Dont have account? <router-link to="/user/register">Register</router-link></p>
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
    methods:{
        login(){
            this.$router.push({path:'/user/home'})
           // this.$route.push({path:'/user/home'})
        }
    }

}
</script>