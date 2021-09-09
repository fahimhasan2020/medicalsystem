<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <doctor-side-bar></doctor-side-bar>
            </div>
        </div>
        <div class="col-9">
            <q-banner class="bg-primary text-white">
            <h5> Patients</h5>
            </q-banner>
            <div class="q-pt-md">
                 <q-dialog v-model="alert">
      <q-card>
        <q-card-section>
             <q-avatar color="red" text-color="white" icon="directions" />
        </q-card-section>

        <q-card-section class="q-pt-none">
         Last readings:
         BP: <br>
         ECG: <br>
         Pressure: <br>

        </q-card-section>

        <q-card-actions align="right">
          <q-btn flat label="OK" color="primary" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>
                 <q-card class="my-card">
      <q-card-section horizontal>
        <p class="text-overline q-mt-lg q-ml-md">Username: user@mail.com</p>
        <q-card-actions vertical class="justify-around">
          <q-btn @click="alert = true" label="View" color="red" icon="visibility" />
          <q-btn @click="navi('/doctor/test/user@mail.com')" label="Add test" color="accent" icon="add" />
          
        </q-card-actions>
      </q-card-section>
    </q-card>
                     <q-card class="my-card">
      <q-card-section horizontal>
        <p class="text-overline q-mt-lg q-ml-md">Username: user@mail.com</p>
        <q-card-actions vertical class="justify-around">
          <q-btn @click="alert = true" label="View" color="red" icon="visibility" />
          <q-btn @click="navi('/doctor/test/user@mail.com')" label="Add test" color="accent" icon="add" />
          
        </q-card-actions>
      </q-card-section>
    </q-card>
                     <q-card class="my-card">
      <q-card-section horizontal>
        <p class="text-overline q-mt-lg q-ml-md">Username: user@mail.com</p>
       <q-card-actions vertical class="justify-around">
          <q-btn @click="alert = true" label="View" color="red" icon="visibility" />
          <q-btn @click="navi('/doctor/test/user@mail.com')" label="Add test" color="accent" icon="add" />
        </q-card-actions>
      </q-card-section>
    </q-card>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import doctorSideBar from "../../components/DoctorSideBar"
export default{
    name:'Patients',
    data(){
        return{
            alert:false
        }
    },
    
    components:{'doctorSideBar':doctorSideBar},
    methods:{
        navi(url){
             this.$router.push({path:url})
        }
    }
}
</script>