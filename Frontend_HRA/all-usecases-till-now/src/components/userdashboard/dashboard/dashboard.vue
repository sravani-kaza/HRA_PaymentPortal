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
import sidemenu from '@/components/userdashboard/dashboard/sidenav.vue';
import toppanel from '@/components/userdashboard/dashboard/topmenu.vue';
import maincontent from '@/components/userdashboard/dashboard/dashboard-content.vue';
import mainfooter from '@/components/userdashboard/dashboard/footer-dashboard.vue';
import {localstore} from '@/main.js'

export default {
   mounted(){
    console.log(localstore);
    localstore.user.user_id = JSON.stringify(localStorage.getItem('user_id'));
    localstore.user.token = JSON.stringify(localStorage.getItem('token'));
    localstore.user.name = JSON.stringify(localStorage.getItem('name'));
    localstore.user.email = JSON.stringify(localStorage.getItem('email'));
    localstore.user.mobile = JSON.stringify(localStorage.getItem('mobile'));
    localstore.details.user_id = JSON.stringify(localStorage.getItem('user_id'));
    localstore.details.token = JSON.stringify(localStorage.getItem('token'));
    if(!this.$route.params.id)
      this.$router.push('/login');
  },
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
