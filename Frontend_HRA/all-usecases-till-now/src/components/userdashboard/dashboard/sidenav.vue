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
                <li class="active">
                    <router-link :to="{ name: 'propertydetails' }">
                        <i class="far fa-building"></i>
                        <p>Property</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'transactionview' }">
                        <i class="far fa-money-bill-alt"></i>
                        <p>Transactions</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'profile' }">
                        <i class="far fa-user-circle"></i>
                        <p>User Profile</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'page2' }">
                        <i class="far fa-file-alt"></i>
                        <p>Report</p>
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
