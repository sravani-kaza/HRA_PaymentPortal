<template>
<div>
<div id="form2">
    <div class="mar0_15">
      <span class="fonweigh700" style="float:right;"><a><i class="fas fa-times"></i></a></span>
      <h4 class="fonweigh700">Edit Account Details</h4>
      <hr style="border-color:#EEEEEE;">
    </div>
<div class="mainfomlayout">
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
      <form @submit.prevent="sendData">
        <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">Landlord account details:</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord name</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Landlord name" v-model.trim="property.Landlord_name" v-validate="{ required:true , regex:/^[A-z\s\-\/]+$/ }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Landlord name')}">
                          <span class="errormsg" v-show="errors.has('Landlord name')">{{ errors.first('Landlord name') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account holder name</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Account holder name" v-model.trim="property.Account_holder_name" v-validate="{ required:true , regex:/^[A-z\s]+$/ }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Account holder name')}">
                          <span class="errormsg" v-show="errors.has('Account holder name')">{{ errors.first('Account holder name') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Bank name</label>
                        <select name="Bank name" class="form-control step_2" id="sel1" v-model.trim="property.Bank_name" :class="{'invalid': errors.has('Bank name')}" required>
                          <option>Allahabad Bank</option>
                          <option>Andhra Bank</option>
                          <option>Axis Bank</option>
                          <option>Bank of Baroda</option>
                          <option>Bank of India</option>
                          <option>Bank of Maharashtra</option>
                          <option>Bank of Punjab</option>
                          <option>Bank of Rajasthan</option>
                          <option>BNP Paribas</option>
                          <option>Canara Bank"</option>
                          <option>Central Bank of India</option>
                          <option>Centurion Ban</option>
                          <option>Corporation Bank</option>
                          <option>Citi Bank</option>
                          <option>City Union Bank</option>
                          <option>Catholic Syrian Bank</option>
                          <option>DCB Bank</option>
                          <option>Development Credit Bank</option>
                          <option>Deutsche Bank AG</option>
                          <option>Dhanlakshmi Bank</option>
                          <option>Dena Bank</option>
                          <option>Federal Bank</option>
                          <option>HDFC Bank</option>
                          <option>HSBC Bank</option>
                          <option>ICICI Bank</option>
                          <option>IDBI Bank</option>
                          <option>Indian Bank</option>
                          <option>Indian Overseas Bank</option>
                          <option>IndusInd Bank</option>
                          <option>ING Vysya Bank</option>
                          <option>Jammu &amp; Kashmir Bank</option>
                          <option>Karnataka Bank</option>
                          <option>Kotak Mahindra Bank</option>
                          <option>Karur Vysya Bank</option>
                          <option>Lakshmi Vilas Bank</option>
                          <option>NKGSB Co-operative Bank Ltd</option>
                          <option>Oriental Bank of Commerce</option>
                          <option>PunjabSind Bank</option>
                          <option>Punjab National Bank</option>
                          <option>Standard Chartered Bank</option>
                          <option>State Bank of India</option>
                          <option>State Bank of Indore</option>
                          <option>State Bank of Mysore</option>
                          <option>State Bank of Patiala</option>
                          <option>State Bank of Travancore</option>
                          <option>State Bank of Bikaner and Jaipur</option>
                          <option>State Bank of Hyderabad</option>
                          <option>State Bank of Saurashtra</option>
                          <option>South Indian Bank</option>
                          <option>Syndicate Bank</option>
                          <option>UCO Bank</option>
                          <option>UTI Bank</option>
                          <option>Union Bank of India</option>
                          <option>United Bank of India</option>
                          <option>United Western Bank</option>
                          <option>Vijaya Bank</option>
                          <option>Yes Bank</option>
                        </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >IFSC </label>
                        <p>
                          <input data-vv-validate-on="blur" name="IFSC" v-model.trim="property.IFSC" v-validate="'required|matchIFSC'" type="text" class="form-control step_2" :class="{'invalid':errors.has('IFSC')}">
                          <span class="errormsg" v-show="errors.has('IFSC')">{{ errors.first('IFSC') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account number</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Account number" v-model.trim="property.Account_number" v-validate="'required|numeric|matchaccno|matchaccdig'" type="text" class="form-control step_2" :class="{'invalid': errors.has('Account number')}">
                          <span class="errormsg" v-show="errors.has('Account number')">{{ errors.first('Account number') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Retype account number</label>
                        <p>
                          <input data-vv-validate-on="blur" v-model.trim="property.retype_Account_number" name="Retypeaccountnumber" v-validate="{ required:true , is: property.Account_number }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Retypeaccountnumber')}">
                          <span class="errormsg" v-show="errors.has('Retypeaccountnumber')">{{ errors.first('Retypeaccountnumber') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord city</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Landlord city" v-model.trim="property.Landlord_city" v-validate="{ required:true , regex:/^[A-z0-9\s\-\/]+$/ }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Landlord city')}">
                          <span class="errormsg" v-show="errors.has('Landlord city')">{{ errors.first('Landlord city') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord state</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Landlord state" v-model.trim="property.Landlord_state"
                          v-validate="{ required:true , regex:/^[A-z0-9\s\-\/]+$/ }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Landlord state')}">
                          <span class="errormsg" v-show="errors.has('Landlord state')">{{ errors.first('Landlord state') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord PAN number</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Landlord PAN number" v-model.trim="property.Landlord_PAN_number" v-validate="{ regex:/[A-Z]{5}[0-9]{4}[A-Z]{1}/ }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Landlord PAN number')}">
                          <span class="errormsg" v-show="errors.has('Landlord PAN number')">{{ errors.first('Landlord PAN number') }}</span>
                        </p>
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
                            <input class="file-input" type="file" name="property.pan_doc_name" v-on:change="onFileChange" >

                        </div>
                        <div v-show="imageUpload===1"> <small><p>File Uploaded </p></small> </div>
                        <div class="errormsg" v-show="filevalid==false"><b>File uploaded has exceeded size limit </b></div>
                        <div class="errormsg" v-show="filevalid_format==false"><b>File uploaded is not of the format jpg/png/pdf/jpeg</b></div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <label class="lblcustm" style="margin:0px 15px;" >Maintenance Account Details:</label>
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Same as landlord account details?</label>
                        <input type="radio" id="option1" name="fooBar" v-model="property.M_same" value="1" v-on:change="submit3">
                        <label class="radiolabel" for="option1"><span><span></span></span>Yes</label>

                        <input type="radio" id="option2" name="fooBar" v-model="property.M_same" value="0" v-on:change="submit4">
                        <label class="radiolabel" for="option2"><span><span></span></span>No</label>
                </div>
            </div>
        </div>
        <div v-show="M_same_l==0">
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Account holder name</label>
                          <p>
                            <input data-vv-validate-on="blur" name="M_Account holder name" v-model.trim="property.M_Account_holder_name" v-validate="{ required:true , regex:/^[A-z\s]+$/ }" type="text" class="form-control step_4" :class="{'invalid': errors.has('M_Account holder name')}">
                            <span class="errormsg" v-show="errors.has('M_Account holder name')">{{ errors.first('M_Account holder name') }}</span>
                          </p>
                      </div>
              </div>
          <div class="row marzero0">
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Bank name</label>
                          <select name="M_Bank name" class="form-control step_4" id="sel1" v-model.trim="property.M_Bank_name" :class="{'invalid': errors.has('M_Bank name')}">
                            <option>Allahabad Bank</option>
                            <option>Andhra Bank</option>
                            <option>Axis Bank</option>
                            <option>Bank of Baroda</option>
                            <option>Bank of India</option>
                            <option>Bank of Maharashtra</option>
                            <option>Bank of Punjab</option>
                            <option>Bank of Rajasthan</option>
                            <option>BNP Paribas</option>
                            <option>Canara Bank"</option>
                            <option>Central Bank of India</option>
                            <option>Centurion Ban</option>
                            <option>Corporation Bank</option>
                            <option>Citi Bank</option>
                            <option>City Union Bank</option>
                            <option>Catholic Syrian Bank</option>
                            <option>DCB Bank</option>
                            <option>Development Credit Bank</option>
                            <option>Deutsche Bank AG</option>
                            <option>Dhanlakshmi Bank</option>
                            <option>Dena Bank</option>
                            <option>Federal Bank</option>
                            <option>HDFC Bank</option>
                            <option>HSBC Bank</option>
                            <option>ICICI Bank</option>
                            <option>IDBI Bank</option>
                            <option>Indian Bank</option>
                            <option>Indian Overseas Bank</option>
                            <option>IndusInd Bank</option>
                            <option>ING Vysya Bank</option>
                            <option>Jammu &amp; Kashmir Bank</option>
                            <option>Karnataka Bank</option>
                            <option>Kotak Mahindra Bank</option>
                            <option>Karur Vysya Bank</option>
                            <option>Lakshmi Vilas Bank</option>
                            <option>NKGSB Co-operative Bank Ltd</option>
                            <option>Oriental Bank of Commerce</option>
                            <option>PunjabSind Bank</option>
                            <option>Punjab National Bank</option>
                            <option>Standard Chartered Bank</option>
                            <option>State Bank of India</option>
                            <option>State Bank of Indore</option>
                            <option>State Bank of Mysore</option>
                            <option>State Bank of Patiala</option>
                            <option>State Bank of Travancore</option>
                            <option>State Bank of Bikaner and Jaipur</option>
                            <option>State Bank of Hyderabad</option>
                            <option>State Bank of Saurashtra</option>
                            <option>South Indian Bank</option>
                            <option>Syndicate Bank</option>
                            <option>UCO Bank</option>
                            <option>UTI Bank</option>
                            <option>Union Bank of India</option>
                            <option>United Bank of India</option>
                            <option>United Western Bank</option>
                            <option>Vijaya Bank</option>
                            <option>Yes Bank</option>
                          </select>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >IFSC </label>
                          <p>
                            <input data-vv-validate-on="blur" name="M_IFSC" v-model.trim="property.M_IFSC" v-validate="'required|M_matchIFSC'" type="text" class="form-control step_4" :class="{'invalid':errors.has('M_IFSC')}">
                            <span class="errormsg" v-show="errors.has('M_IFSC')">{{ errors.first('M_IFSC') }}</span>
                          </p>
                      </div>
              </div>
          </div>
          <div class="row marzero0">
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Account number</label>
                          <p>
                            <input data-vv-validate-on="blur" name="M_Account number" v-model.trim="property.M_Account_number" v-validate="'required|numeric|M_matchaccno|M_matchaccdig'" type="text" class="form-control step_4" :class="{'invalid': errors.has('M_Account number')}">
                            <span class="errormsg" v-show="errors.has('M_Account number')">{{ errors.first('M_Account number') }}</span>
                          </p>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Retype account number</label>
                          <p>
                            <input data-vv-validate-on="blur" v-model.trim="property.M_retype_Account_number" name="M_Retypeaccountnumber" v-validate="{ required:true , is: property.M_Account_number }" type="text" class="form-control step_4" :class="{'invalid': errors.has('M_Retypeaccountnumber')}">
                            <span class="errormsg" v-show="errors.has('M_Retypeaccountnumber')">{{ errors.first('M_Retypeaccountnumber') }}</span>
                          </p>
                      </div>
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
    </form>
    </div>
     <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
</div>
</div>
</div>
</template>

<script>
import axios from 'axios'
import {localstore} from '../../../main.js'
import {Validator} from 'vee-validate'

/* eslint-disable */

  const dict = {
    en: {
      custom: {
        Retypeaccountnumber: {
          is: 'Does not match Account number'
        }
}
}
};


export default {
    data(){
      return {
        M_same_l:localstore.details.M_same,
        imageUpload:1,
        filevalid:true,
        filevalid_format:true,
        file_change:0,
        property:{
          Landlord_name : localstore.details.Landlord_name,
          Account_holder_name : localstore.details.Account_holder_name,
          Bank_name : localstore.details.Bank_name,
          IFSC : localstore.details.IFSC,
          Account_number : localstore.details.Account_number,
          retype_Account_number : localstore.details.Account_number,
          Landlord_city : localstore.details.Landlord_city,
          Landlord_state : localstore.details.Landlord_state,
          Landlord_PAN_number : localstore.details.Landlord_PAN_number,
          pan_doc : localstore.details.pan_doc,
          pan_doc_name : localstore.details.pan_doc_name,
          M_same:localstore.details.M_same,
          M_Account_holder_name:localstore.details.M_Account_holder_name,
          M_Bank_name:localstore.details.M_Bank_name,
          M_IFSC:localstore.details.M_IFSC,
          M_Account_number:localstore.details.M_Account_number,
          M_retype_Account_number:localstore.details.M_Account_number
        },


     };
    },
    created(){
      this.$validator.extend('matchIFSC',{
        getMessage: field => 'Incorrect IFSC',
        validate: value => {
          let ifsc_code = Object.values(localstore.IFSCcodes)[Object.keys(localstore.IFSCcodes).indexOf(this.property.Bank_name)];
          let f1 = ifsc_code == this.property.IFSC.substring(0,4).toUpperCase();
          let f2 = this.property.IFSC.length == 11;
          return (f1 == 1) && (f2 == 1)
        }
      }),
      this.$validator.extend('x',{
        getMessage: field => 'Incorrect file format',
        validate: value => {
          let files = e.target.files || e.dataTransfer.files;
         if(files[0].type!="application/pdf" && files[0].type!="image/png" && files[0].type!="image/jpeg")
           return 0;
         else
           return 1;
        }
      }),
      this.$validator.extend('y',{
        getMessage: field => 'Size limit exceeded',
        validate: value => {
          let files = e.target.files || e.dataTransfer.files;
            if(files[0].size > 500 * 1024)
              return 0;
            else
              return 1;
        }
      }),
      this.$validator.extend('matchaccno',{
        getMessage: field => 'Incorrect account number',
        validate: value => {
          let f = 0;
          let banks = Object.keys(localstore.acclength);
          for(var i of banks)
          {
            if(i == this.property.Bank_name)
            {
              f = 1;
              break;
            }
          }

          if(f == 1)
          {
            let accno = Object.values(localstore.acclength)[Object.keys(localstore.acclength).indexOf(this.property.Bank_name)];
            let l = this.property.Account_number.length;
            for(var j of accno)
            {
              if(l == j)
              {
                return 1
              }
            }
            return 0;
          }
          else {
            return 1;
          }
        }
      }),
      this.$validator.extend('M_matchIFSC',{
        getMessage: field => 'Incorrect IFSC',
        validate: value => {
          let ifsc_code = Object.values(localstore.IFSCcodes)[Object.keys(localstore.IFSCcodes).indexOf(this.property.M_Bank_name)];
          let f1 = ifsc_code == this.property.M_IFSC.substring(0,4).toUpperCase();
          let f2 = this.property.M_IFSC.length == 11;
          return (f1 == 1) && (f2 == 1)
        }
      }),
      this.$validator.extend('M_matchaccno',{
        getMessage: field => 'Incorrect account number',
        validate: value => {
          let f = 0;
          let banks = Object.keys(localstore.acclength);
          for(var i of banks)
          {
            if(i == this.property.M_Bank_name)
            {
              f = 1;
              break;
            }
          }

          if(f == 1)
          {
            let accno = Object.values(localstore.acclength)[Object.keys(localstore.acclength).indexOf(this.property.M_Bank_name)];
            let l = this.property.M_Account_number.length;
            for(var j of accno)
            {
              if(l == j)
              {
                return 1
              }
            }
            return 0;
          }
          else {
            return 1;
          }
        }
      }),
      this.$validator.extend('matchaccdig',{
        getMessage: field => 'Incorrect account number',
        validate: value => {
          let f = 0;
          let banks = Object.keys(localstore.startdig);
          for(var i of banks)
          {
            if(i == this.property.Bank_name)
            {
              f = 1;
              break;
            }
          }

          if(f == 1)
          {
            let accno = Object.values(localstore.startdig)[Object.keys(localstore.startdig).indexOf(this.property.Bank_name)];

            for(var j of accno)
            {
              let l1 = j.toString();
              let len = l1.length;
              let l2 = this.property.Account_number.substring(0,len);

              if(l1 == l2)
              {
                return 1
              }
            }
            return 0;
          }
          else {
            return 1;
          }
        }
      }),
      this.$validator.extend('M_matchaccdig',{
        getMessage: field => 'Incorrect account number',
        validate: value => {
          let f = 0;
          let banks = Object.keys(localstore.startdig);
          for(var i of banks)
          {
            if(i == this.property.M_Bank_name)
            {
              f = 1;
              break;
            }
          }

          if(f == 1)
          {
            let accno = Object.values(localstore.startdig)[Object.keys(localstore.startdig).indexOf(this.property.M_Bank_name)];

            for(var j of accno)
            {
              let l1 = j.toString();
              let len = l1.length;
              let l2 = this.property.M_Account_number.substring(0,len);

              if(l1 == l2)
              {
                return 1
              }
            }
            return 0;
          }
          else {
            return 1;
          }
        }
      })

    },
    methods: {
      submit3(){
        localstore.details.M_same=1;
        this.property.M_same=1;
        this.M_same_l=1;
      },
      submit4(){
        localstore.details.M_same=0;
        this.property.M_same=0;
        this.M_same_l=0;
      },
      onFileChange(e) {
        this.imageUpload=1;
        this.file_change=1;
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
              this.property.pan_doc_name=files[0];
          },
          createImage(file) {
            let reader = new FileReader();
            reader.onload = (e) => {
                this.property.pan_doc = e.target.result;
            };
            reader.readAsDataURL(file);
          },
          sendData() {
            var x = this.$el.querySelector('#form2');
            //console.log(x)

            var valid = true, y=[],z=[], i=0;
            var self = this;

            this.$validator.validate('Landlord name', this.property.Landlord_name);
            this.$validator.validate('Account holder name', this.property.Account_holder_name);
            this.$validator.validate('IFSC', this.property.IFSC);
            this.$validator.validate('Account number', this.property.Account_number);
            this.$validator.validate('Landlord city', this.property.Landlord_city);
            this.$validator.validate('Landlord state', this.property.Landlord_state);
            this.$validator.validate('Landlord PAN number', this.property.Landlord_PAN_number);
            if(this.M_same_l == 0){
              this.$validator.validate('M_Account holder name', this.property.M_Account_holder_name);
              this.$validator.validate('M_IFSC', this.property.M_IFSC);
              this.$validator.validate('M_Account number', this.property.M_Account_number);
            }

            y = x.querySelectorAll('.step_2');
            z = x.querySelectorAll('.step_4');

            for(i=0; i<y.length;i++){
            if((y[i].value == "" && y[i].name != "Landlord PAN number") || y[i].classList.contains('invalid')){
             valid = false;
            }
            }

            if(this.M_same_l == 0){
            for(i=0; i<z.length;i++){
            if(z[i].value == "" || z[i].classList.contains('invalid')){
             valid = false;
            }
            }
          }

            if(!valid || !this.filevalid || !this.filevalid_format){
               alert("Correct the errors");
            return false;
            }else{
              localstore.details.Landlord_name=this.property.Landlord_name;
              localstore.details.Account_holder_name=this.property.Account_holder_name;
              localstore.details.Bank_name=this.property.Bank_name;
              localstore.details.IFSC=this.property.IFSC;
              localstore.details.Account_number=this.property.Account_number;
              localstore.details.Landlord_city=this.property.Landlord_city;
              localstore.details.Landlord_state=this.property.Landlord_state;
              localstore.details.Landlord_PAN_number=this.property.Landlord_PAN_number;
              localstore.details.pan_doc=this.property.pan_doc;
              localstore.details.pan_doc_name=this.property.pan_doc_name;
              localstore.details.M_same=this.property.M_same;
              localstore.details.M_Account_holder_name=this.property.M_Account_holder_name;
              localstore.details.M_Bank_name=this.property.M_Bank_name;
              localstore.details.M_IFSC=this.property.M_IFSC;
              localstore.details.M_Account_number=this.property.M_Account_number;

              if(this.M_same_l)
              {
                //console.log('hello')
                localstore.details.M_Account_holder_name=this.property.Account_holder_name;
                localstore.details.M_Bank_name=this.property.Bank_name;
                localstore.details.M_IFSC=this.property.IFSC;
                localstore.details.M_Account_number=this.property.Account_number;
              }
              if(!this.file_change)
              {
                this.property.pan_doc='';
                localstore.details.pan_doc=''
              }
              console.log(JSON.stringify(this.property.pan_doc));
              axios.put('http://127.0.0.1:8000/api/updatelandlord/'+localstore.details.landlord_id,this.property)
                  .then((response) => {
                    console.log(JSON.stringify(this.property))
                    alert(response);
                    console.log(response);
                    if(response.data.status=="SUCCESS")
                      self.$router.push('/propertydetails');
                  })
                  .catch((error) => alert(error))

            }
          }
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
