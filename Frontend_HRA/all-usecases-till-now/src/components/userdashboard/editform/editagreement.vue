<template>
  <div>
<div id="form3">
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a><i class="fas fa-times"></i></a></span>
    <h4 class="fonweigh700">Edit Agreement Details</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
        <form @submit.prevent="sendDatas">
        <div class="hrafom3">
        <h4 style="margin: 0px 15px 20px;">Share your rent agreement with us</h4>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Start date of an agreement</label>
                        <p>
                          <input data-vv-validate-on="blur" name="startdate agreement" type="date" v-model.trim="agreement.startdate_agreement" v-validate="'required|date_format:DD/MM/YYYY'" class="form-control step_3" ref="startdate" :class="{'invalid': errors.has('startdate agreement')}">
                          <span class="errormsg" v-show="errors.has('startdate agreement')">{{ errors.first('startdate agreement') }}</span>
                        </p>
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >End date of an agreement</label>
                        <p>
                          <input data-vv-validate-on="blur" name="enddate agreement" type="date" v-model.trim="agreement.enddate_agreement" v-validate="'required|date_format:DD/MM/YYYY|after:startdate'" class="form-control step_3" :class="{'invalid': errors.has('enddate agreement')}">
                          <span class="errormsg" v-show="errors.has('enddate agreement')">{{ errors.first('enddate agreement') }}</span>
                        </p>
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
                            <input class="file-input" type="file" v-on:change="onFileChange" multiple required>
                        </div>
                        <div v-show="imageUpload===1"> <small><p>File Uploaded </p></small> </div>
                        <div class="errormsg" v-show="filevalid==false"><b>File uploaded has exceeded size limit </b></div>
                        <div class="errormsg" v-show="filevalid_format==false"><b>File uploaded is not of the format jpg/png/pdf/jpeg</b></div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>

        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid">
            <div class="col-xs-6"><button type="submit" class="btn btn-info custbtnn">Update</button></div>
            <router-link class="link" :to="{ name: 'propertydetails' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn2">Cancel</button></div></router-link>
            </div>
        </div>
    </div>
</form>
    </div>
     <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
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
        imageUpload:0,
        filevalid:true ,
        filevalid_format: true,
        file_change:0,
        agreement:{
          user_id:localstore.details.user_id,
          startdate_agreement : localstore.details.startdate_agreement,
          enddate_agreement : localstore.details.enddate_agreement,
          rent_agreement : localstore.details.rent_agreement,
          rent_agreement_name : localstore.details.rent_agreement_name
        }
     };
    },
    mounted(){
    localstore.user.user_id = JSON.stringify(localStorage.getItem('user_id'));
    localstore.user.token = JSON.stringify(localStorage.getItem('token'));
    localstore.user.name = JSON.stringify(localStorage.getItem('name'));
    localstore.user.email = JSON.stringify(localStorage.getItem('email'));
    localstore.user.mobile = JSON.stringify(localStorage.getItem('mobile'));
    localstore.details.user_id = JSON.stringify(localStorage.getItem('user_id'));
    localstore.details.token = JSON.stringify(localStorage.getItem('token'));
    },
    methods:{
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
            this.agreement.rent_agreement_name=files[0];
        },
        createImage(file) {
          let reader = new FileReader();
          reader.onload = (e) => {
              this.agreement.rent_agreement = e.target.result;
          };
          reader.readAsDataURL(file);
        },
        sendDatas() {
          var x = this.$el.querySelector('#form3');
          var valid = true, y=[], i=0;
          let self = this;

          this.$validator.validate('startdate agreement', this.agreement.startdate_agreement);
          this.$validator.validate('enddate agreement', this.agreement.enddate_agreement);

          y = x.querySelectorAll('.step_3');

          for(i=0; i<y.length;i++){
            console.log("in")
          if(y[i].value == "" || y[i].classList.contains('invalid')){

           valid = false;
          }
          }
          console.log(valid)
          if(!valid){
             alert("Correct the errors");
          return false;
          }else{
            localstore.details.startdate_agreement=this.agreement.startdate_agreement,
            localstore.details.enddate_agreement=this.agreement.enddate_agreement,
            localstore.details.rent_agreement=this.agreement.rent_agreement,
            localstore.details.rent_agreement_name=this.agreement.rent_agreement_name,
            console.log(localstore);
            if(!this.file_change)
            {
              this.property.pan_doc='';
              localstore.details.pan_doc=''
            }
            axios.put('http://127.0.0.1:8000/api/updatedocuments/'+localstore.details.landlord_id+'/'+localstore.details.property_id,this.agreement)
                .then((response) => {
                  alert(response);
                  if(response.data.status=="SUCCESS")
                   self.$router.push('/propertydetails');
                })
                .catch((error) => alert(error))
          }
     },
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
input.invalid{
  border: 1px solid red !important;
}
.errormsg {
  color: red
}
</style>
