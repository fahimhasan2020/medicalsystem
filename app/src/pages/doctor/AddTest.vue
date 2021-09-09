<template>
<div>
    
    <q-toolbar class="bg-primary text-white">
            <q-btn @click="$router.push('/doctor/patients')" icon="keyboard_arrow_left" color="blue-9" />
            <q-toolbar-title>
                user@mail.com
            </q-toolbar-title>
    </q-toolbar>
   
    <div class="row">
        <div class="col-12">
            <q-banner class="bg-red text-white">
            <h5> Add test</h5>
            </q-banner>
            <div class="q-pt-md q-pl-md">
                <q-card class="my-card">
                <q-card-section>
                    Email: user@mail.com
                </q-card-section>
                <q-card-section>
                   <q-input v-model="name" placeholder="Name" />
                    <q-input v-model="name" placeholder="Age" />
                    <q-input v-model="name" placeholder="Ecg readings" />
                    <q-btn label="Submit" icon="save" class="q-mt-md full-width " color="primary" />
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
    name:'Home',
    data(){
        return{
            name:''
        }
    },
    components:{

    },
    methods:{
        //
    }
}
</script>