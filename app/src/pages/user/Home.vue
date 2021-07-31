<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <user-side-bar></user-side-bar>
            </div>
        </div>
        <div class="col-9"></div>
    </div>
</div>
</template>
<script>
import UserSideBar from "../../components/UserSideBar"
export default{
    name:'Home',
    components:{'userSideBar':UserSideBar},
    methods:{
        //
    }
}
</script>