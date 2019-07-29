<template>
<div>
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a><i class="fas fa-times"></i></a></span>
    <h4 class="fonweigh700">Edit Account Details</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
         <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">Landlord account details:</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord name</label>
                        <input type="text" class="form-control" v-model="property.Landlord_name" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account holder name</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Bank name</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >IFSC </label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account number</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Retype account number</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord city</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Ladlord state</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord PAN number</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Upload landlord PAN</label>
                        <div class="file-drop-area">
                            <!-- <span class="fake-btn">Choose files</span> -->
                            <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                            <input class="file-input" type="file" multiple>
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <label class="lblcustm" style="margin:0px 15px;" >Maintenance Account Details:</label>
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Same as landlord account details?</label>
                        <input type="radio" id="option1" name="fooBar" value="foo"> 
                        <label class="radiolabel" for="option1"><span><span></span></span>Yes</label>

                        <input type="radio" id="option2" name="fooBar" value="bar">
                        <label class="radiolabel" for="option2"><span><span></span></span>No</label>
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