<template>
  <div>
    <div class="wrapper">
      <sidemenu></sidemenu>
    <div class="main-panel">
      <toppanel></toppanel>
      <maincontent></maincontent>
      <mainfooter></mainfooter>
    </div>
    </div>
  </div>
</template>

<script>
import sidemenu from '@/components/admindashboard/dashboard/sidenav.vue';
import toppanel from '@/components/admindashboard/dashboard/topmenu.vue';
import maincontent from '@/components/admindashboard/dashboard/dashboard-content.vue';
import mainfooter from '@/components/admindashboard/dashboard/footer-dashboard.vue';


export default {
 
  name: 'dashboardview',
  components: {
    sidemenu,
    toppanel,
    maincontent,
    mainfooter,
    
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
