<template>
<div>
  <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a><i class="fas fa-times"></i></a></span>
    <h4 class="fonweigh700">Edit property details</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    <br class="hidden-xs">
    <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">Property rent details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Property name</label>
                        <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Security deposit amount</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Rent amount</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenace amount</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Rent due date</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenace due date</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Staying since</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop"><br>
                       <label class="lblcustm" >Are you paid security deposit?</label>
                        <input type="radio" id="sec1" name="deposit" value="yes"> 
                        <label class="radiolabel" for="sec1"><span><span></span></span>Yes</label>

                        <input type="radio" id="sec2" name="deposit" value="no">
                        <label class="radiolabel" for="sec2"><span><span></span></span>No</label>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Upload property image </label>
                        <div class="file-drop-area">
                            <!-- <span class="fake-btn">Choose files</span> -->
                            <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                            <input class="file-input" type="file" multiple>
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>
        <h4 style="margin: 0px 15px 20px;">Address details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Door number</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Society</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Area</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >City</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >State</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Pin</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid pull-right">
            <router-link :to="{ name: 'propertydetails' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn">Update</button></div></router-link>
            <router-link class="link" :to="{ name: 'propertydetails' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn2">Cancel</button></div></router-link>
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