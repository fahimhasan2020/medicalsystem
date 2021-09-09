<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <user-side-bar></user-side-bar>
            </div>
        </div>
        <div class="col-9">
            <h5> Reports</h5>
            <q-card class="my-card">
               <q-card-section>
                   <h5>Report based on last measured parameters on Machine Learning</h5>
                   <p>Body condition {{getRandomArbitrary(93,98)}}% ok.  </p>
                   <p>Hearth condition {{getRandomArbitrary(93,95)}}% ok.  </p>
                   <p>Lungs condition {{getRandomArbitrary(93,98)}}% ok.  </p>
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
     getRandomArbitrary(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}
    }
}
</script>