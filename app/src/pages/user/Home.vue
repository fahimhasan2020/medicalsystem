<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <user-side-bar></user-side-bar>
            </div>
        </div>
        <div class="col-9">
               <q-banner class="bg-primary text-white row">
                 <q-img
      alt="Quasar logo"
      style="height:100px;width:100px"
      src="/logo.png"
    />
            <h5> Welcome to user panel</h5>
            </q-banner>
            <div class="q-pt-md">
                 <q-card class="my-card">
      <q-card-section>
      <q-icon name="face" class="text-blue-6" size="25px" /> &nbsp; Last Temperature : undefined
      </q-card-section>
       <q-card-section>
       <q-icon name="medication" class="text-orange-6" size="25px" /> &nbsp;Last Pressure : undefined
      </q-card-section>
      <q-card-section>
       <q-icon name="description" class="text-purple-6" size="25px" /> &nbsp;Last ECG : undefined
      </q-card-section>
       <q-card-section>
       <q-icon name="health_and_safety" class="text-green-6" size="25px" /> &nbsp;Last sugar : undefined
      </q-card-section>
    </q-card>
        </div>
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