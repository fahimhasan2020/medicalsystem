<template>
  <layout title="Oxyzen Saturation">
      <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Oxyzen Saturation</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Admin</a>
                                </li>
                                <li CLASS="active">
                                    Ecg
                                </li>

                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
           <input type="number" name="bloodpressure" class="form-control" placeholder="saturation" v-model="saturation" id="">
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" @click="saveData" data-dismiss="modal" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Sugar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="s in data" :key="s.id">
      <th scope="row">{{s.id}}</th>
      <td>{{s.saturation}}</td>
      <td>
                       <button class="btn btn-primary" @click.prevent="deletes(s.id)"><i class="fa fa-trash"></i></button>
                      </td>
      
    </tr>
    
  </tbody>
</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </layout>
</template>

<script>
 import Layout from "./inc/Layout";
 import Dashboard from "../Mixins/Dashboard";
    export default {
      data(){
        return{
          saturation:null
        }
      },
        components: {Layout},
        mixins: [Dashboard],
        props:['data'],
        methods: {
    deletes(id) {
      const data = {
          id:id
      };
      this.$inertia.post("/user/oxyzensaturation/training/delete",data,{
                        replace: false,
                        preserveState: true,
                        preserveScroll: true,
                        only: [],
                    }).then(()=>{
                      this.$toast.open({
                            message: 'Deleted',
                            type: "success",
                            position:"top-right",
                            duration: 5000,
                            dismissible: true
                        })
                    });
    },
    saveData(){
      const data ={
        saturation:this.saturation
      };
      this.$inertia.post("/user/oxyzensaturation/training",data,{
                        replace: false,
                        preserveState: true,
                        preserveScroll: true,
                        only: [],
                    }).then(()=>{
                      this.$toast.open({
                            message: 'Saved',
                            type: "success",
                            position:"top-right",
                            duration: 5000,
                            dismissible: true
                        })
                    });
    }
  }
    }
</script>

<style>

</style>