<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <clinic-side-bar></clinic-side-bar>
            </div>
        </div>
        <div class="col-9">
           <q-banner class="bg-primary text-white">
            <h5> Profile</h5>
            </q-banner>
            <div class="q-pt-md">
                <q-card class="my-card">
                <q-card-section>
                    Email: user@mail.com
                </q-card-section>
                <q-card-section>
                    Last login: 12.56 GMT
                </q-card-section>
            </q-card>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import ClinicSideBar from "../../components/ClinicSideBar"
export default{
    name:'Profile',
    components:{'clinicSideBar':ClinicSideBar},
    methods:{
        //
    }
}
</script>