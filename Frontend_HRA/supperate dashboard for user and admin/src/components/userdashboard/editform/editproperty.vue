<template>
  <div>
<div id="form1">
  <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a><i class="fas fa-times"></i></a></span>
    <h4 class="fonweigh700">Edit property details</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    <br class="hidden-xs">
    <form class=" " @submit.prevent="validateBeforeSubmit">
    <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">Property rent details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                  <label class="lblcustm" >Property name :</label>
                  <p>
                    <input data-vv-validate-on="blur" name="Property name" v-model.trim="property.Property_name"  v-validate="{ required: true, regex: /^[A-za-z0-9\s\-\/]+$/ }" type="text" class="form-control step_1" :class="{'invalid': errors.has('Property name')}">
                    <span class="errormsg" v-show="errors.has('Property name')">{{ errors.first('Property name') }}</span>
                  </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                  <label class="lblcustm" >Security Deposit Amount:</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Securitydeposit"
                          v-model.trim="property.Security_deposit_amount" v-validate="'required|numeric'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Securitydeposit')}">
                          <span class="errormsg" v-show="errors.has('Securitydeposit')">{{ errors.first('Securitydeposit') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Rent amount</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Rent amount" v-model.trim="property.Rent_amount" v-validate="'required|numeric'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Rent amount')}">
                          <span class="errormsg" v-show="errors.has('Rent amount')">{{ errors.first('Rent amount') }}

                          </span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenace amount</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Maintenance amount" v-model.trim="property.Maintenance_amount" v-validate="'required|numeric'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Maintenance amount')}">
                          <span class="errormsg" v-show="errors.has('Maintenance amount')">{{ errors.first('Maintenance amount') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Rent due date</label>
                        <p>
                          <input data-vv-validate-on="blur" placeholder="DD" name="Rent due date" v-model.trim="property.Rent_due_date"  v-validate="'required|integer|max_value:31|min_value:1'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Rent due date')}">
                          <span class="errormsg" v-show="errors.has('Rent due date')">{{ errors.first('Rent due date') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenace due date</label>
                        <p>
                          <input data-vv-validate-on="blur" placeholder="DD" name="Maintenance due date" v-model.trim="property.Maintenance_due_date"  v-validate="'required|integer|max_value:31|min_value:1'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Maintenance due date')}">
                          <span class="errormsg" v-show="errors.has('Maintenance due date')">{{ errors.first('Maintenance due date') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Staying since</label>
                        <p>
                          <input data-vv-validate-on="blur" placeholder="DD/MM/YYYY" name="Staying since" v-model.trim="property.Staying_since" v-validate="'required|date_format:DD/MM/YYYY|notfuture'" type="date" class="form-control step_1" :class="{'invalid': errors.has('Staying since')}">
                          <span class="errormsg" v-show="errors.has('Staying since')">{{ errors.first('Staying since') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop"><br>
                       <label class="lblcustm" >Are you paid security deposit?</label>


                        <input type="radio" id="sec1" name="deposit" v-model="property.deposit" value="Yes" v-on:change="submit1">

                        <label class="radiolabel" for="sec1"><span><span></span></span>Yes</label>

                        <input type="radio" id="sec2" name="deposit" v-model="property.deposit" value="No" v-on:change="submit2">
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
                            <input class="file-input" type="file" v-on:change="onFileChange">
                        </div>
                        <div v-show="imageUpload===1"> <small><p>File Uploaded </p></small> </div>
                        <div class="errormsg" v-show="filevalid==false"><b>File uploaded has exceeded size limit </b></div>
                        <div class="errormsg" v-show="filevalid_format==false"><b>File uploaded is not of the format jpg/png/pdf/jpeg</b></div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>
        <h4 style="margin: 0px 15px 20px;">Address details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Door number</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Door number" v-model.trim="property.Door_number" v-validate="{ required: true, regex: /^[A-za-z0-9\s\-\/]+$/ }" type="text" class="form-control step_1" :class="{'invalid': errors.has('Door number')}">
                          <span class="errormsg" v-show="errors.has('Door number')">{{ errors.first('Door number') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Society</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Society" v-model.trim="property.Society" v-validate="{ required: true, regex: /^[A-za-z0-9\s\-\/]+$/ }" type="text" class="form-control step_1" :class="{'invalid': errors.has('Society')}">
                          <span class="errormsg" v-show="errors.has('Society')">{{ errors.first('Society') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Area :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Area" v-model.trim="property.Area" v-validate="{ required: true, regex: /^[A-za-z0-9\s\-\/]+$/ }" type="text" class="form-control step_1" :class="{'invalid': errors.has('Area')}">
                          <span class="errormsg" v-show="errors.has('Area')">{{ errors.first('Area') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >City :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="City" v-model.trim="property.City" v-validate="{ required: true, regex: /^[A-za-z0-9\s\-\/]+$/ }" type="text" class="form-control step_1" :class="{'invalid': errors.has('City')}">
                          <span class="errormsg" v-show="errors.has('City')">{{ errors.first('City') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >State :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="State" v-model.trim="property.State" v-validate="{ required: true, regex: /^[A-za-z\s\-\/]+$/ }" type="text" class="form-control step_1" :class="{'invalid': errors.has('State')}">
                          <span class="errormsg" v-show="errors.has('State')">{{ errors.first('State') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Pin :</label>
                        <p>
                          <input data-vv-validate-on="blur" placeholder="xxxxxx" name="Pin" v-model.trim="property.Pin" v-validate="'required|digits:6'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Pin')}">
                          <span class="errormsg" v-show="errors.has('Pin')">{{ errors.first('Pin') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid pull-right">
            <div class="col-xs-6"><button type="submit" class="btn btn-info custbtnn">Update</button></div>
            <router-link class="link" :to="{ name: 'propertydetails' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn2">Cancel</button></div></router-link>
            </div>
        </div>
    </div>
    <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
    </form>
</div>
</div>
</div>
</template>

<script>
import {localstore} from '../../../main.js'
import axios from 'axios'
import {Validator} from 'vee-validate'

/* eslint-disable */

  const dict = {
    en: {
      custom: {
}
}
};


export default {
    data(){
      return {
        property:{
          property_id : localstore.details.property_id,
          Property_name : localstore.details.Property_name,
          Security_deposit_amount : localstore.details.Security_deposit_amount,
          Rent_amount : localstore.details.Rent_amount,
          Maintenance_amount : localstore.details.Maintenance_amount,
          Maintenance_due_date : localstore.details.Maintenance_due_date,
          Rent_due_date : localstore.details.Rent_due_date,
          Staying_since : localstore.details.Staying_since,
          deposit : localstore.details.deposit,
          Door_number : localstore.details.Door_number,
          Society : localstore.details.Society,
          Area : localstore.details.Area,
          City : localstore.details.City,
          State : localstore.details.State,
          Pin : localstore.details.Pin,
          property_image : localstore.details.property_image,
          property_image_name : localstore.details.property_image_name
        },
        filevalid:true,
        filevalid_format:true,
        file_change:0,
        imageUpload:1
     };
   },
   created(){
     this.$validator.extend('notfuture',{
       getMessage: field => 'Enter past date',
       validate: value => {
         var today = new Date();
         var dd1 = today.getDate();
         var mm1 = today.getMonth()+1;
         var yyyy1 = today.getFullYear();

         if(dd1<10) {
           dd1 = '0'+dd1
         }

         if(mm1<10) {
           mm1 = '0'+mm1
         }

         today = dd1 + '/' + mm1 + '/' + yyyy1;
         //console.log(dd1,mm1,yyyy1)

         var date = this.property.Staying_since;
         date = new Date(date)
         var dd2 = date.getDate();
         var mm2 = date.getMonth()+1;
         var yyyy2 = date.getFullYear();

         if(dd2<10) {
           dd2 = '0'+dd2
         }

         if(mm2<10) {
           mm2 = '0'+mm2
         }

         date = dd2 + '/' + mm2 + '/' + yyyy2;

         //console.log(dd2,mm2,yyyy2)

         if (yyyy2 < yyyy1)
         {
         //  console.log(0)
           return 1;
         }
         else if (yyyy2 == yyyy1 && mm2 < mm1)
         { //console.log(1)
           return 1;}
         else if (yyyy2 == yyyy1 && mm2 == mm1 && dd2 <= dd1)
         {//console.log(2)
           return 1;}
         else
           return 0;
       }
     }),
     this.$validator.extend('future',{
       getMessage: field => 'Enter past date',
       validate: value => {
         var today = new Date();
         var dd = today.getDate();
         var mm = today.getMonth()+1;
         var yyyy = today.getFullYear();

         if(dd<10) {
           dd = '0'+dd
         }

         if(mm<10) {
           mm = '0'+mm
         }

         today = dd + '/' + mm + '/' + yyyy;

         var date = this.property.Staying_since;

         return date > today;
       }
     })
   },
    methods: {

          onFileChange(e) {
                this.file_change=1;
                this.imageUpload=1;
                let files = e.target.files || e.dataTransfer.files;
                  if (!files.length)
                        return;
                  if(files[0].size > 500 * 1024)
                    this.filevalid=false;
                  else
                    this.filevalid=true;
                  if(files[0].type!="application/pdf" && files[0].type!="image/png" && files[0].type!="image/jpeg")
                    this.filevalid_format=false;
                  else
                    this.filevalid_format=true;
                  this.createImage(files[0]);
                  this.property.property_image_name=files[0];
              },
          createImage(file) {
            let reader = new FileReader();
            reader.onload = (e) => {
                this.property.property_image = e.target.result;
            };
            reader.readAsDataURL(file);
          },
          submit1(){
            localstore.details.deposit='Yes';
            this.property.deposit='Yes';
          },
          submit2(){
            localstore.details.deposit='No';
            this.property.deposit='No';
          },


          validateBeforeSubmit() {
            //console.log(JSON.stringify(this.property));
            var x = this.$el.querySelector('#form1');

            var valid = true, y=[], i=0;
            let self = this;

            this.$validator.validate('Property name', this.property.Property_name);
            this.$validator.validate('Securitydeposit', this.property.Security_deposit_amount);
            this.$validator.validate('Rent amount', this.property.Rent_amount);
            this.$validator.validate('Maintenance amount', this.property.Maintenance_amount);
            this.$validator.validate('Rent due date', this.property.Rent_due_date);
            this.$validator.validate('Maintenance due date', this.property.Maintenance_due_date);
            this.$validator.validate('Staying since', this.property.Staying_since);
            this.$validator.validate('Door number', this.property.Door_number);
            this.$validator.validate('Society', this.property.Society);
            this.$validator.validate('Area', this.property.Area);
            this.$validator.validate('City', this.property.City);
            this.$validator.validate('State', this.property.State);
            this.$validator.validate('Pin', this.property.Pin);

            y = x.querySelectorAll('.step_1');

            for(i=0; i<y.length;i++){
            if(y[i].value == "" || y[i].classList.contains('invalid')){
             valid = false;
            }
            }

            if(!valid || !this.filevalid || !this.filevalid_format){
               alert("Correct the errors");
               return false;
            }
            else{
              localstore.details.Property_name=this.property.Property_name;
              localstore.details.Security_deposit_amount=this.property.Security_deposit_amount;
              localstore.details.Rent_amount=this.property.Rent_amount;
              localstore.details.Maintenance_due_date=this.property.Maintenance_due_date;
              localstore.details.Rent_due_date=this.property.Rent_due_date;
              localstore.details.Staying_since=this.property.Staying_since;
              localstore.details.deposit=this.property.deposit;
              localstore.details.Door_number=this.property.Door_number;
              localstore.details.Society=this.property.Society;
              localstore.details.Area=this.property.Area;
              localstore.details.Maintenance_amount=this.property.Maintenance_amount;
              localstore.details.City=this.property.City;
              localstore.details.State=this.property.State;
              localstore.details.Pin=this.property.Pin;
              localstore.details.property_image=this.property.property_image;
              localstore.details.property_image_name=this.property.property_image_name;
              console.log(JSON.stringify(this.property));
              axios.put('http://127.0.0.1:8000/api/updateproperty/'+localstore.details.property_id,this.property)
                  .then((response) => {
                    console.log(this.property)
                    alert(response);
                    if(response.data.status=="SUCCESS")
                      self.$router.push('/propertydetails');
                  })
                  .catch((error) => {
                      alert(error);
                  })
            }
            }
        }
   }


</script>

<!-- Add "scoped" attribute toclass="errormsg"  limit CSS to this component only -->
<style>
input.invalid{
  border: 1px solid red !important;
}

.errormsg {
  color: red
}
</style>
