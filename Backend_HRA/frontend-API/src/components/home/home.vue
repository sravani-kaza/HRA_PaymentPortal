<template>
<div>
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a>X</a></span>
    <h4 class="fonweigh700">Welcome to HRA-API</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    
    <hr style="border-color:#EEEEEE;">

    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid">
            <h5> Already a customer? </h5>
            <router-link :to="{ name: 'authenticate' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn">Login?</button></div></router-link>
            <h5> New to the app? </h5>
            <router-link :to="{ name: 'register' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn2">Register?</button></div></router-link>
            </div>
        </div>
    </div>
     <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
</div>

</div>
</template>

<script>
export default {
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.hrafom3{
    max-width: 330px;
    margin: 0px auto;
}
</style>
