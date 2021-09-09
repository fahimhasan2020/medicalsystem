<template>
<div>
    <div class="row">
        <div class="col-3">
            <div class="side-bar-menu">
                <user-side-bar></user-side-bar>
            </div>
        </div>
        <div class="col-9">
            <h5>Stats</h5>
            <p>Temperature graph</p>
            <q-chart 
  identifier="myChart"
  stilo="height:30vh; width: 100%;z-index:100"
  type="line"
  :labels="labels"
  :datasets="datasets"
  :options="options"
/>        
 <p>ECG graph</p>
            <q-chart 
  identifier="myChart1"
  stilo="height:30vh; width: 100%;z-index:100"
  type="line"
  :labels="labels"
  :datasets="datasets"
  :options="options"
/>   
 <p>BP graph</p>
            <q-chart 
  identifier="myChart2"
  stilo="height:30vh; width: 100%;z-index:100"
  type="line"
  :labels="labels"
  :datasets="datasets"
  :options="options"
/>    
 <p>Sugar graph</p>
            <q-chart 
  identifier="myChart3"
  stilo="height:30vh; width: 100%;z-index:100"
  type="line"
  :labels="labels"
  :datasets="datasets"
  :options="options"
/>   
 <p>OS graph</p>
            <q-chart 
  identifier="myChart4"
  stilo="height:30vh; width: 100%;z-index:100"
  type="line"
  :labels="labels"
  :datasets="datasets"
  :options="options"
/>                      

        </div>
    </div>
</div>
</template>
<script>
import UserSideBar from "../../components/UserSideBar"
import CommitChart from "../../components/CommitChart"
import QChart from 'quasar-components-chart'

export default{
    components: {
      'userSideBar':UserSideBar,
      QChart
    },
    data () {
      return {
        options:null,
        labels: [this.getRandomInt(), this.getRandomInt()],
         datasets: [
            {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }, {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }
          ],
        datacollection: [],
        chartData: {
          labels: [this.getRandomInt(), this.getRandomInt()],
          datasets: [
            {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }, {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }
          ]
        },
        chartOption:null
      }
    },
    mounted () {
      this.fillData()
    },
    methods: {
      fillData () {
        this.datacollection = {
          labels: [this.getRandomInt(), this.getRandomInt()],
          datasets: [
            {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }, {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }
          ]
        }
      },
      getRandomInt () {
        return Math.floor(Math.random() * (50 - 5 + 1)) + 5;
      }
    }
}
</script>