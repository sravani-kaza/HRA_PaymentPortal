<template>
<div>
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a><i class="fas fa-times"></i></a></span>
    <h4 class="fonweigh700">Edit Agreement Details</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
         <div class="hrafom3">
        <h4 style="margin: 0px 15px 20px;">Share your rent agreement with us</h4>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Start date of an agreement</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >End date of an agreement</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Upload rent agreement</label>
                        <div class="file-drop-area">
                            <!-- <span class="fake-btn">Choose files</span> -->
                            <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                            <input class="file-input" type="file" multiple>
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>
        
        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid">
            <router-link :to="{ name: 'propertydetails' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn">Update</button></div></router-link>
            <router-link class="link" :to="{ name: 'propertydetails' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn2">Cancel</button></div></router-link>
            </div>
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

</style>