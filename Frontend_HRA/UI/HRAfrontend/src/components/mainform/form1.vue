<template>
<div>
  <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a>X</a></span>
    <h4 class="fonweigh700">Create template</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    <ul id="progressbar">
        <li class="active clrdarc">Property info</li>
        <li>Account details</li>
        <li>Rent agreement</li>
    </ul>
    <hr style="border-color:#EEEEEE;">
    <br class="hidden-xs">
    <form class=" " @submit.prevent="validateBeforeSubmit">
    <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">Property rent details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Property name :</label>
                        <p>
                          <input name="Propertyname" v-model="property.Property_name"  v-validate="'required|alpha_num'" type="text" class="form-control">
                          <span v-show="errors.has('Propertyname')">{{ errors.first('Propertyname') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Security deposit amount : </label>
                        <p>
                          <input name="Securitydeposit" v-model="property.Security_deposit_amount" v-validate="'required|numeric'" type="text" class="form-control">
                          <span v-show="errors.has('Securitydeposit')">{{ errors.first('Securitydeposit') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Rent amount :</label>
                        <p>
                          <input name="Rentamount" v-model="property.Rent_amount" v-validate="'required|numeric'" type="text" class="form-control">
                          <span v-show="errors.has('Rentamount')">{{ errors.first('Rentamount') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenance amount :</label>
                        <p>
                          <input name="Maintenanceamount" v-model="property.Maintenance_amount" v-validate="'required|numeric'" type="text" class="form-control">
                          <span v-show="errors.has('Maintenanceamount')">{{ errors.first('Maintenanceamount') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Rent due date :</label>
                        <p>
                          <input name="Rent due date" v-model="property.Rent_due_date"  v-validate="'required|max_value:31'" type="text" class="form-control">
                          <span v-show="errors.has('Rent due date')">{{ errors.first('Rent due date') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenance due date :</label>
                        <p>
                          <input name="Maintenance due date" v-model="property.Maintenance_due_date"  v-validate="'required|max_value:31'" type="text" class="form-control">
                          <span v-show="errors.has('Maintenance due date')">{{ errors.first('Maintenance due date') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Staying since :</label>
                        <p>
                          <input name="Staying since" v-model="property.Staying_since" v-validate="'required|date_format:DD/MM/YYYY'" type="text" class="form-control">
                          <span v-show="errors.has('Staying since')">{{ errors.first('Staying since') }}</span>
                        </p>
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
                        <label class="lblcustm" >Upload property image :</label>
                        <div class="file-drop-area">
                            <!-- <span class="fake-btn">Choose files</span> -->
                            <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                            <input class="file-input" type="file" multiple>
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>
        <h4 style="margin: 0px 15px 20px;">Property rent details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Door number :</label>
                        <p>
                          <input name="Door number" v-model="property.Door_number" v-validate="'required|alpha_dash'" type="text" class="form-control">
                          <span v-show="errors.has('Door number')">{{ errors.first('Door number') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Society :</label>
                        <p>
                          <input name="Society" v-model="property.Society" v-validate="'required|alpha_num'" type="text" class="form-control">
                          <span v-show="errors.has('Society')">{{ errors.first('Society') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Area :</label>
                        <p>
                          <input name="Area" v-model="property.Area" v-validate="'required|alpha_num'" type="text" class="form-control">
                          <span v-show="errors.has('Area')">{{ errors.first('Area') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >City :</label>
                        <p>
                          <input name="City" v-model="property.City" v-validate="'required'" type="text" class="form-control">
                          <span v-show="errors.has('City')">{{ errors.first('City') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >State :</label>
                        <p>
                          <input name="State" v-model="property.State" v-validate="'required'" type="text" class="form-control">
                          <span v-show="errors.has('State')">{{ errors.first('State') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Pin :</label>
                        <p>
                          <input name="Pin" v-model="property.Pin" v-validate="'required'" type="text" class="form-control">
                          <span v-show="errors.has('Pin')">{{ errors.first('Pin') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid ">
            <router-link :to="{ name: 'form2' }"><div class="col-xs-6"><button type="submit" class="btn btn-info custbtnn" @click="validateBeforeSubmit">Save and Next</button></div></router-link>
            </div>
        </div>
    </div>
    <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
    </form>
</div>
</div>
</template>

<script>
export default {
  data() {
    return {
      property:{
      Property_name:' ',
      Security_deposit_amount:' ',
      Rent_amount:' ',
      Maintenance_amount:' ',
      Maintenance_due_date:' ',
      Rent_due_date:' ',
      Staying_since:' ',
      deposit:' ',
      Door_number:' ',
      Society:' ',
      Area:' ',
      City:' ',
      State:' ',
      Pin:' '
      }
    };
  },
  methods: {
    validateBeforeSubmit() {
      this.$validator.validateAll().then((result) => {
        if (result) {
          this.$store.Property_detail=this.property;
          return;
        }
        alert('Correct them errors!');
      });
    },
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.fonweigh700{
    font-weight: 700;
}
.mar0_15{
    margin: 0px 15px;
}
   /*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
    padding-left: 0px;
    font-family: 'Roboto', sans-serif;
}

#progressbar li {
    list-style-type: none;
    color: #504c4c;
    text-transform: uppercase;
    font-size: 9px;
    width: 33.3%;
    float: left;
    position: relative;
    letter-spacing: 0px;
    text-align: center;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 23px;
    display: block;
    font-size: 12px;
    font-weight: 400;
    color: #B0BEC5;
    background: #ffffff;
    border: 2px solid #B0BEC5;
    border-radius: 25px;
    margin: 0 auto 10px auto;
    z-index: 1;
    position: relative;
}
.clrbluu{
    color: #3284EF !important;
}
.clrdarc{
    color: #263238 !important;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: #B0BEC5;
    position: absolute;
    left: -50%;
    top: 11px;
   /* z-index: -1; put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before {
    background: #ffffff;
    color: #263238;
    border: 2px solid #263238;
}
 #progressbar li.active:after{
    background: #ffffff;
    color: #263238;
    border: 1px solid #B0BEC5;
 }

#progressbar li.complete:before {
    background: #ffffff;
    color: #3284EF;
    border: 2px solid #3284EF;
    font-weight: 400;
}
 #progressbar li.complete:after{
     background: #ffffff;
    color: #3284EF;
    border: 1px solid #3284EF;
    font-weight: 400;
 }

.mainfomlayout{
    max-width: 1000px;
    margin: 0px auto;
}
.hrafom1{
  max-width: 800px;
    margin: 0px auto;
}
.maxbtnwid{
    max-width: 400px;
    margin: 0px auto;
}
.custbtnn{
    width: 100%;
    padding: 7px 0px;
    color: #fff !important;
    background-color: #0486FE!important;
    border-color: #0486FE !important;
}
.custbtnn2{
    width: 100%;
    padding: 7px 0px;
    color: #606266 !important;
    background-color: #FFFFFF !important;
    border-color: #DCDFE6 !important;
}
.custbtnn:hover{
    color: #fff;
    background-color: #31b0d5;
    border-color: #269abc;
}
.closelink{
    text-align: center;
    margin: 8px 0px;
}
.custrespformgrop{
    margin-bottom:25px;
}
.marzero0{
    margin: 0px;
}
.file-drop-area {
      border: 2px dashed #D2D2D2;
    border-radius: 3px;
  position: relative;
  text-align:center;
  /* width: 100%; */
  /* margin: 10px auto; */
  /* padding: 26px 20px 30px; */
      padding: 47px 0px;
  transition: 0.2s;
}
  .file-drop-area:is-active {
    background-color: #fff;
  }

.fake-btn {
  background-color: #37c1c9;
  border: 1px solid #37c1c9;
  border-radius: 3px;
  padding: 8px 15px;
  margin-right: 8px;
  font-size: 12px;
  text-transform: uppercase;
}

.file-msg {
  font-size: small;
  font-weight: 300;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: inline-block;
  max-width: calc(100% - 130px);
  vertical-align: middle;
}

.file-input {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  cursor: pointer;
  opacity: 0;
}
.file-input:focus {
    outline: none;
  }
@media only screen and (max-width: 767px){
  .custrespformgrop{
    margin-bottom:15px;
}
}
</style>
