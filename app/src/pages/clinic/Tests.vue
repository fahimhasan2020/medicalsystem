<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <clinic-side-bar></clinic-side-bar>
            </div>
        </div>
        <div class="col-9">
    <div class="row">
        <div class="col-12">
            <q-banner class="bg-red text-white">
            <h5> Add Temperature / Pressure / OS / Sugar</h5>
            </q-banner>
            <div class="q-pt-md q-pl-md">
                <q-card class="my-card">
                <q-card-section>
                   <q-input v-model="name" placeholder="mail" />
                    <q-input v-model="age" placeholder="Age" />
                    <q-input v-model="temp" placeholder="Temeprature readings" />
                    <q-btn label="Submit" @click="submit" icon="save" class="q-mt-md full-width " color="primary" />
                </q-card-section>
            </q-card>
            </div>
             <div class="q-pt-md q-pl-md">
                <q-card class="my-card">
                <q-card-section>
                   <q-input v-model="name" placeholder="mail" />
                    <q-input v-model="age" placeholder="Age" />
                    <q-input v-model="sys" placeholder="Systolic readings" />
                    <q-input v-model="dias" placeholder="Diastolic readings" />
                    <q-btn label="Submit" @click="submit" icon="save" class="q-mt-md full-width " color="primary" />
                </q-card-section>
            </q-card>
            </div>
             <div class="q-pt-md q-pl-md">
                <q-card class="my-card">
                <q-card-section>
                   <q-input v-model="name" placeholder="mail" />
                    <q-input v-model="age" placeholder="Age" />
                    <q-input v-model="os" placeholder="Oxyzen saturation readings" />
                    <q-btn label="Submit" @click="submit" icon="save" class="q-mt-md full-width " color="primary" />
                </q-card-section>
            </q-card>
            </div>

             <div class="q-pt-md q-pl-md">
                <q-card class="my-card">
                <q-card-section>
                   <q-input v-model="name" placeholder="mail" />
                    <q-input v-model="age" placeholder="Age" />
                    <q-input v-model="sugar" placeholder="Sugar readings" />
                   
                    <q-btn label="Submit" @click="submit" icon="save" class="q-mt-md full-width " color="primary" />
                </q-card-section>
            </q-card>
            </div>
            
            
        </div>
    </div>
        </div>
    </div>
</div>
</template>
<script>
import ClinicSideBar from "../../components/ClinicSideBar"
export default{
    name:'Home',
    data(){
        return {
            name:'',
            age:'',
            temp:'',
            sys:'',
            dias:'',
            os:'',
            sugar:''
        }
    },
    components:{'clinicSideBar':ClinicSideBar},
    methods:{
        submit(){
            this.$q.notify('Data added')
        }
    }
}
</script>