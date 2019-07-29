<template>
 <div class="sidebar" data-background-color="white" data-active-color="customblue">
		<div class="sidebar-wrapper">
            <div class="logo">
                <!-- <a href="" class="simple-text">
                    Creative Tim
                </a> -->
                <a href="">
                <img src="../../../assets/paymatrix-logo.png" style="" alt="">
                </a>
            </div>
            <ul class="nav" id="sidemainnav">
                <li class="active" >
                    <router-link :to="{ name: 'page1' }">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'page2' }">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </router-link>
                </li>
                <li >
                    <router-link :to="{ name: 'propertydetails' }">
                        <i class="ti-panel"></i>
                        <p>Property</p>
                    </router-link>
                </li>
                
                <li>
                    <router-link :to="{ name: 'transactionview' }">
                        <i class="ti-view-list-alt"></i>
                        <p>Transactions</p>
                    </router-link>
                </li>
                
                <li>
                    <router-link :to="{ name: 'page1' }">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'page1' }">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </router-link>
                </li>
                <li>
                   <router-link :to="{ name: 'page1' }">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                   </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'page1' }">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'page1' }">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </router-link>
                </li>
            </ul>
          </div>
    </div>
</template>


<script>
export default {
  name: 'sidemenu',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>


</style>
