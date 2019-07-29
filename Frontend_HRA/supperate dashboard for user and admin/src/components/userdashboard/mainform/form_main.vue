<template>
<div>

<div v-show="step === 1" id="form1">
  <div class="mar0_15">
    <span class="fonweigh700" v-on:click="closed" style="float:right;"><a>X</a></span>
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
                        <label class="lblcustm" >Rent amount :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Rent amount" v-model.trim="property.Rent_amount" v-validate="'required|numeric'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Rent amount')}">
                          <span class="errormsg" v-show="errors.has('Rent amount')">{{ errors.first('Rent amount') }}

                          </span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenance amount :</label>
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
                        <label class="lblcustm" >Rent due date :</label>
                        <p>
                          <input data-vv-validate-on="blur" placeholder="DD" name="Rent due date" v-model.trim="property.Rent_due_date"  v-validate="'required|integer|max_value:31|min_value:1'" type="text" class="form-control step_1" :class="{'invalid': errors.has('Rent due date')}">
                          <span class="errormsg" v-show="errors.has('Rent due date')">{{ errors.first('Rent due date') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Maintenance due date :</label>
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
                        <label class="lblcustm" >Staying since :</label>
                        <p>
                          <input data-vv-validate-on="blur" placeholder="DD/MM/YYYY" name="Staying since" v-model.trim="property.Staying_since" v-validate="'required|date_format:DD/MM/YYYY|notfuture'" type="date" class="form-control step_1" :class="{'invalid': errors.has('Staying since')}">
                          <span class="errormsg" v-show="errors.has('Staying since')">{{ errors.first('Staying since') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop"><br>
                       <label class="lblcustm" >Are you paid security deposit?</label>
                        <input type="radio" id="sec1" name="deposit" value="yes" v-on:click="submit1" >
                        <label class="radiolabel" for="sec1"><span><span></span></span>Yes</label>

                        <input type="radio" id="sec2" name="deposit" value="no" v-on:click="submit2">
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
                            <input name="property image" class="file-input" type="file" v-on:change="onFileChange" required>
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>

                        <div v-show="imageUpload1===1"> <small><p>File Uploaded </p></small> </div>
                        <div class="errormsg" v-show="filevalid==false"><b>File uploaded has exceeded size limit </b></div>
                        <div class="errormsg" v-show="filevalid_format==false"><b>File uploaded is not of the format jpg/png/pdf/jpeg</b></div>
                </div>
            </div>
        </div>
        <h4 style="margin: 0px 15px 20px;">Property rent details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Door number :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Door number" v-model.trim="property.Door_number" v-validate="{ required: true, regex: /^[A-za-z0-9\s\-\/]+$/ }" type="text" class="form-control step_1" :class="{'invalid': errors.has('Door number')}">
                          <span class="errormsg" v-show="errors.has('Door number')">{{ errors.first('Door number') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Society :</label>
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
            <div class="maxbtnwid ">
            <div class="col-xs-6"><button type="submit" class="btn btn-info custbtnn">Save and Next</button></div>
            </div>
        </div>
    </div>
    <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
    </form>
</div>
</div>

<div v-show="step===2" id="form2">
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a>X</a></span>
    <h4 class="fonweigh700">Create template</h4>
    <hr style="border-color:#EEEEEE;">
    </div>
<div class="mainfomlayout">
    <ul id="progressbar">
        <li class="active complete clrbluu">Property info</li>
        <li class="active complete clrdarc">Account details</li>
        <li>Rent agreement</li>
    </ul>
    <hr style="border-color:#EEEEEE;">
    <a class="custback" @click="back"><i class="fas fa-chevron-left"></i>&nbsp;Back</a>
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
         <form class=" " @submit.prevent="sendData">
         <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">Landlord account details</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord name :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Landlord name" v-model.trim="property.Landlord_name" v-validate="{ required:true , regex:/^[A-z\s\-\/]+$/ }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Landlord name')}">
                          <span class="errormsg" v-show="errors.has('Landlord name')">{{ errors.first('Landlord name') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account holder name :</label>
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
                        <label class="lblcustm" >Bank name :</label>
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

                          <div v-show="errors.has('Bank name')">{{ errors.first('Account holder name') }}</div>

                </div>
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
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account number :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Account number" v-model.trim="property.Account_number" v-validate="'required|numeric|matchaccno|matchaccdig'" type="text" class="form-control step_2" :class="{'invalid': errors.has('Account number')}">
                          <span class="errormsg" v-show="errors.has('Account number')">{{ errors.first('Account number') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Retypeaccountnumber :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Retypeaccountnumber" v-validate="{ required:true , is: property.Account_number }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Retypeaccountnumber')}">
                          <span class="errormsg" v-show="errors.has('Retypeaccountnumber')">{{ errors.first('Retypeaccountnumber') }}</span>
                        </p>
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord city :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="Landlord city" v-model.trim="property.Landlord_city" v-validate="{ required:true , regex:/^[A-z0-9\s\-\/]+$/ }" type="text" class="form-control step_2" :class="{'invalid': errors.has('Landlord city')}">
                          <span class="errormsg" v-show="errors.has('Landlord city')">{{ errors.first('Landlord city') }}</span>
                        </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord state :</label>
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
                        <label class="lblcustm" >Landlord PAN number :</label>
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
                        <label class="lblcustm" >Upload landlord PAN :</label>
                        <div class="file-drop-area">
                            <!-- <span class="fake-btn">Choose files</span> -->
                            <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                            <input name="Landlord PAN doc" v-validate="'required'" class="file-input" type="file" v-on:change="onFileChange">
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                        <div v-show="imageUpload2===1"> <small>File Uploaded</small> </div>

                        <div class="errormsg" v-show="filevalid==false"><b>File uploaded has exceeded size limit </b></div>
                        <div class="errormsg" v-show="filevalid_format==false"><b>File uploaded is not of the format jpg/png/pdf/jpeg</b></div>
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <label class="lblcustm" style="margin:0px 15px;" >Maintenance Account Details :</label>
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Same as landlord account details?</label>
                        <input type="radio" id="option1" name="Msame" value="Yes" v-on:click="submit3">
                        <label class="radiolabel" for="option1"><span><span></span></span>Yes</label>

                        <input type="radio" id="option2" name="Msame" value="No" v-on:click="submit4">
                        <label class="radiolabel" for="option2"><span><span></span></span>No</label>
                </div>
            </div>
        </div>
        <div v-show="M_same_l==0">
          <div class="row marzero0">
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Account holder name :</label>
                          <p>
                            <input data-vv-validate-on="blur" name="M_Account holder name" v-model.trim="property.M_Account_holder_name" v-validate="{ required:true , regex:/^[A-z\s]+$/ }" type="text" class="form-control step_4" :class="{'invalid': errors.has('M_Account holder name')}">
                            <span class="errormsg" v-show="errors.has('M_Account holder name')">{{ errors.first('M_Account holder name') }}</span>
                          </p>
                      </div>
              </div>
          </div>
          <div class="row marzero0">
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Bank name :</label>
                          <select name="M_Bank name" class="form-control step_4" id="sel1" v-model.trim="property.M_Bank_name" :class="{'invalid': errors.has('Bank name')}">
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

                            <div v-show="errors.has('M_Bank name')">{{ errors.first('Account holder name') }}</div>

                  </div>
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
          <div class="row marzero0">
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Account number :</label>
                          <p>
                            <input data-vv-validate-on="blur" name="M_Account number" v-model.trim="property.M_Account_number" v-validate="'required|numeric|M_matchaccno|M_matchaccdig'" type="text" class="form-control step_4" :class="{'invalid': errors.has('M_Account number')}">
                            <span class="errormsg" v-show="errors.has('M_Account number')">{{ errors.first('M_Account number') }}</span>
                          </p>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group custrespformgrop">
                          <label class="lblcustm" >Retypeaccountnumber :</label>
                          <p>
                            <input data-vv-validate-on="blur" name="M_Retypeaccountnumber" v-validate="{ required:true , is: property.M_Account_number }" type="text" class="form-control step_4" :class="{'invalid': errors.has('M_Retypeaccountnumber')}">
                            <span class="errormsg" v-show="errors.has('M_Retypeaccountnumber')">{{ errors.first('M_Retypeaccountnumber') }}</span>
                          </p>
                      </div>
              </div>
          </div>

        </div>
        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid ">
            <div class="col-xs-6"><button type="submit" class="btn btn-info custbtnn">Save and Next</button></div>
            </div>
        </div>



    </div>
  </form>
    </div>
     <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
</div>

</div>


<div v-show="step===3" id="form3">
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a>X</a></span>
    <h4 class="fonweigh700">Create template</h4>
    <hr style="border-color:#EEEEEE;">
    </div>
<div class="mainfomlayout">
    <ul id="progressbar">
        <li class="active complete clrbluu">Property info</li>
        <li class="active complete clrdarc">Account details</li>
        <li class="active complete clrdarc">Rent agreement</li>
    </ul>
    <hr style="border-color:#EEEEEE;">
    <a class="custback" @click="back"><i class="fas fa-chevron-left"></i>&nbsp;Back</a>
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
        <form class=" " @submit.prevent="sendDatas">
         <div class="hrafom3">
        <h4 style="margin: 0px 5px 20px;">Share your rent agreement with us</h4>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Start date of an agreement :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="startdate agreement" type="date" v-model.trim="property.startdate_agreement" v-validate="'required|date_format:DD/MM/YYYY'" class="form-control step_3" ref="startdate">
                          <span class="errormsg" v-show="errors.has('startdate agreement')">{{ errors.first('startdate agreement') }}</span>
                        </p>
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >End date of an agreement :</label>
                        <p>
                          <input data-vv-validate-on="blur" name="enddate agreement" type="date" v-model.trim="property.enddate_agreement" v-validate="'required|date_format:DD/MM/YYYY|after:startdate'" class="form-control step_3" >
                          <span class="errormsg" v-show="errors.has('enddate agreement')">{{ errors.first('enddate agreement') }}</span>
                        </p>
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Upload rent agreement :</label>
                        <div class="file-drop-area">
                            <!-- <span class="fake-btn">Choose files</span> -->
                            <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                            <input class="file-input" type="file" v-on:change="onFileChange" required>
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>

                        <div v-show="imageUpload3===1"> <small><p>File Uploaded </p></small> </div>
                        <div class="errormsg" v-show="filevalid==false"><b>File uploaded has exceeded size limit </b></div>
                        <div class="errormsg" v-show="filevalid_format==false"><b>File uploaded is not of the format jpg/png/pdf/jpeg</b></div>
                </div>
            </div>
        </div>

        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid">
            <div class="col-xs-6"><button type="submit" class="btn btn-info custbtnn">Finish</button></div>
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
        Retypeaccountnumber: {
          is: 'Does not match Account number'
        }
}
}
};



export default {
  data() {
    return {
      step: 1,
      imageUpload1 :0,
      imageUpload2 :0,
      imageUpload3 :0,
      filevalid : true,
      filevalid_format:true,
      M_same_l:1,
      property:{
        Property_name:'',
        Security_deposit_amount:'',
        Rent_amount:'',
        Maintenance_amount:'',
        Maintenance_due_date:'',
        Rent_due_date:'',
        Staying_since:'',
        deposit:'',
        Door_number:'',
        Society:'',
        Area:'',
        City:'',
        State:'',
        Pin:'',
        Landlord_name:'',
        Account_holder_name:'',
        Bank_name:'',
        IFSC:'',
        Account_number:'',
        Landlord_city:'',
        Landlord_state:'',
        Landlord_PAN_number:'',
        startdate_agreement:'',
        enddate_agreement:'',
        property_image:'',
        property_image_name:'',
        pan_doc:'',
        pan_doc_name:'',
        rent_agreement:'',
        rent_agreement_name:'',
        M_same:'',
        M_Account_number:'',
        M_Account_holder_name:'',
        M_IFSC:'',
        M_Bank_name:''
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
    })
  },

  methods: {
    closed(){
      this.$router.push('/');
    },
    onFileChange(e) {
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
            if(this.step==1){
              this.imageUpload1 = 1;
              this.property.property_image_name=files[0];
            }
            if(this.step==2){
              this.imageUpload2 = 1;
              this.property.pan_doc_name=files[0];
            }
            if(this.step==3){
              this.imageUpload3 = 1;
              this.property.rent_agreement_name=files[0];
            }
        },
        createImage(file) {
          let reader = new FileReader();
          reader.onload = (e) => {
            if(this.imageUpload1==1)
              this.property.property_image = e.target.result;
            if(this.imageUpload2==1)
              this.property.pan_doc = e.target.result;
            if(this.imageUpload3==1)
              this.property.rent_agreement = e.target.result;

          };
          reader.readAsDataURL(file);
        },
    submit1(){
      localstore.details.deposit='Yes';
      this.property.details='Yes';
    },
    submit2(){
      localstore.details.deposit='No';
      this.property.details='No';
    },
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
    back(){
      this.step--;
    },

    validateBeforeSubmit() {
      var x = this.$el.querySelector('#form1');
      var valid = true, y=[], i=0;

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
        localstore.details.Door_number=this.property.Door_number;
        localstore.details.Society=this.property.Society;
        localstore.details.Area=this.property.Area;
        localstore.details.Maintenance_amount=this.property.Maintenance_amount;
        localstore.details.City=this.property.City;
        localstore.details.State=this.property.State;
        localstore.details.Pin=this.property.Pin;
        localstore.details.property_image=this.property.property_image;
        localstore.details.property_image_name=this.property.property_image_name;

      this.step++;
      }
      },

     sendData() {
       var x = this.$el.querySelector('#form2');
       var valid = true, y=[], z=[], i=0;

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
       this.step++;
       }
    },

       sendDatas() {
         var x = this.$el.querySelector('#form3');
         var valid = true, y=[], i=0;

         this.$validator.validate('startdate agreement', this.property.startdate_agreement);
         this.$validator.validate('enddate agreement', this.property.enddate_agreement);

         y = x.querySelectorAll('.step_3');

         for(i=0; i<y.length;i++){
         if(y[i].value == "" || y[i].classList.contains('invalid')){
          valid = false;
         }
         }

         if(!valid || !this.filevalid || !this.filevalid_format){
            alert("Correct the errors");
         return false;
         }else{
          let self = this;
           localstore.details.startdate_agreement=this.property.startdate_agreement,
           localstore.details.enddate_agreement=this.property.enddate_agreement,
           localstore.details.rent_agreement=this.property.rent_agreement,
           localstore.details.rent_agreement_name=this.property.rent_agreement_name,

           axios.post('http://127.0.0.1:8000/api/create',localstore.details)
               .then((response) => {
                  alert(response);
                  //this.callrefresh();
                  if(response.data.status=="SUCCESS")
                    self.$router.push('/');
                  else
                    alert("property not added");
               })
               .catch((error) => alert(error))
         }
    },

    callrefresh()
    {
            localstore.details.Property_name='';
            localstore.details.Security_deposit_amount='';
            localstore.details.Rent_amount='';
            localstore.details.Maintenance_amount='';
            localstore.details.Maintenance_due_date='';
            localstore.details.Rent_due_date='';
            localstore.details.Staying_since='';
            localstore.details.deposit='';
            localstore.details.property_image='';
            localstore.details.Door_number='';
            localstore.details.Society='';
            localstore.details.Area='';
            localstore.details.City='';
            localstore.details.State='';
            localstore.details.Pin='';
            localstore.details.Landlord_name='';
            localstore.details.Account_holder_name='';
            localstore.details.Bank_name='';
            localstore.details.IFSC='';
            localstore.details.Account_number='';
            localstore.details.Landlord_city='';
            localstore.details.Landlord_state='';
            localstore.details.Landlord_PAN_number='';
            localstore.details.pan_doc='';
            localstore.details.startdate_agreement='';
            localstore.details.enddate_agreement='';
            localstore.details.rent_agreement='';
            this.property.Property_name='',
            this.property.Security_deposit_amount='',
            this.property.Rent_amount='',
            this.property.Maintenance_amount='',
            this.property.Maintenance_due_date='',
            this.property.Rent_due_date='',
            this.property.Staying_since='',
            this.property.deposit='',
            this.property.Door_number='',
            this.property.Society='',
            this.property.Area='',
            this.property.City='',
            this.property.State='',
            this.property.Pin='',
            this.property.Landlord_name='',
            this.property.Account_holder_name='',
            this.property.Bank_name='',
            this.property.IFSC='',
            this.property.Account_number='',
            this.property.Landlord_city='',
            this.property.Landlord_state='',
            this.property.Landlord_PAN_number='',
            this.property.startdate_agreement='',
            this.property.enddate_agreement='',
            this.property.property_image='',
            this.property.property_image_name='',
            this.property.pan_doc='',
            this.property.pan_doc_name='',
            this.property.rent_agreement='',
            this.property.rent_agreement_name='',
            this.property.M_same=1,
            this.property.M_IFSC='',
            this.property.M_Bank_name='',
            this.property.M_Account_holder_name='',
            this.property.M_Account_number='',
            this.step=1;
            this.imageUpload1=0;
            this.imageUpload2=0;
            this.imageUpload3=0;
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
input.invalid{
  border: 1px solid red !important;
}

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

 .errormsg {
   color: red
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
