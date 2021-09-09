<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <user-side-bar></user-side-bar>
            </div>
        </div>
        <div class="col-9">
           <h5> Tests panel</h5>
           <q-card class="my-card">
               <q-card-section>
                   <h5>Temperature last data: 97 deg F</h5>
               </q-card-section>
           </q-card>
           <q-card class="my-card">
               <q-card-section>
                   <h5>BP last data: sys 83  diastolic 126</h5>
               </q-card-section>
           </q-card>
           <q-card class="my-card">
               <q-card-section>
                   <h5>ECG last data: 137 </h5>
               </q-card-section>
           </q-card>
           <q-card class="my-card">
               <q-card-section>
                   <h5>Sugar last data: 230</h5>
               </q-card-section>
           </q-card>
           <q-card class="my-card">
               <q-card-section>
                   <h5>OS last data: 97%</h5>
               </q-card-section>
           </q-card>
        </div>
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