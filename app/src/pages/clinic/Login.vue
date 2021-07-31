<template>
<div class="justify-center pd-t-2">
    <q-icon name="far fa-user-circle text-extra-biggest text-default" style="margin-left:44%" />
    <p class="text-center text-default text-bold">Welcome to clinic panel</p>
    <div class="w-100 text-center">
        <div class="form-group">
            <input type="email" name="username" class="form-control" placeholder="Username" id="username">
        </div>
         <div class="form-group">
            <input type="password" name="password" placeholder="*****" class="form-control" id="password">
        </div>
        <p class="text-small text-end">Dont have account? <router-link to="/clinic/register">Register</router-link></p>
        <button class="btn btn-block btn-primary">Login</button>
    </div>

</div>
</template>
<script>
export default{
    name:'Login',

}
</script>