<template>
<div>
      <div class="header">
          <h4 class="title">Payment summary</h4>
          <hr style="border-color:#EEEEEE;margin: 15px 0px 0px;">
        </div>
        <form action="http://127.0.0.1:8000/api/checktransaction/"  method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="row marzeros">
                <div class="col-sm-7">
                  
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="lblcustm" >Select the type of payment?</label><br>
                            <input type="radio" id="option1" name="mode_of_payment" value="Rent" v-on:change="type1"> 
                            <label class="radiolabel marcustradio" for="option1"><span><span></span></span>Rent</label>
                            <input type="radio" id="option2" name="mode_of_payment" value="RentDeposit" v-on:change="type2">
                            <label class="radiolabel marcustradio" for="option2"><span><span></span></span>Rent Deposit</label>
                            <input type="radio" id="option3" name="mode_of_payment" value="Maintenance" v-on:change="type3">
                            <label class="radiolabel marcustradio" for="option3"><span><span></span></span>Maintenance</label>
                        </div>
                    </div>
                    <div class="col-sm-12"  style="max-width: 340px;">
                        <label class="lblcustm" >Select month and year</label><br>
                        <div class="row form-group">
                        <div class="col-sm-6">
                            <select class="form-control" id="sel1" v-model.trim="transaction.month" name="month">
                                <option>{{new Date().getMonth() }}</option>
                                <option>{{new Date().getMonth() + 1}}</option>
                                <option>{{new Date().getMonth() + 2}}</option>

                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control" id="sel1" v-model.trim="transaction.year" name="year">
                                <option>{{ new Date().getFullYear() - 1}}</option>
                                <option>{{ new Date().getFullYear() }}</option>
                                <option>{{ new Date().getFullYear() + 1}}</option>
                            </select>
                        </div>
                        </div>
                        <div class="row marzeros">
                            <div  v-show="types1==1" class="form-group">
                             <label class="lblcustm" >Rent amount</label>
                            <input type="text" class="form-control" v-model.trim="transaction.rent_amount" placeholder="Monthly rent" v-on:change="pan_need" name="rent_amount">
                            </div>
                            <div  v-show="types2==1" class="form-group">
                             <label class="lblcustm" >Rent amount</label>
                            <input type="text" class="form-control" v-model.trim="transaction.rent_amount" placeholder="Monthly rent" v-on:change="pan_need" name="rent_amount">
                            </div>
                            <div v-show="types3==1" class="form-group">
                             <label class="lblcustm" >Rent amount</label>
                            <input type="text" class="form-control" v-model.trim="transaction.rent_amount" placeholder="Monthly rent" v-on:change="pan_need" name="rent_amount">
                            </div>
                        </div>
                        <div v-show="pan_doc_need==1" >
                          <div class="row marzeros">
                                  <div class="form-group ">
                                          <label class="lblcustm" >Tenant PAN number</label>
                                          <p>
                                            <input  name="Tenant PAN number" class="form-control" v-model.trim="transaction.tenant_PAN_Number" type="text">
                                          </p>
                                  </div>
                          </div>
                          <div class="row marzero0">
                                  <div class="form-group custrespformgrop">
                                          <label class="lblcustm" >Upload landlord PAN</label>
                                          <div class="file-drop-area">
                                              <!-- <span class="fake-btn">Choose files</span> -->
                                              <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                                              <input class="file-input" type="file" name="property.pan_doc_name" v-on:change="onFileChange">
                                          </div>
                                          <div v-show="imageUpload===1"> <small><p>File Uploaded </p></small> </div>
                                          <div v-show="filevalid==false"><b>File uploaded has exceeded size limit </b></div>
                                          <div v-show="filevalid_format==false"><b>File uploaded is not of the format jpg/png/pdf/jpeg</b></div>
                                          <small>jpg/png/pdf files with a size less than 500kb</small>
                                  </div>
                              
                          </div>
                        </div>  
                         <div class="row marzeros">
                            <div class="form-group">
                             <label class="lblcustm" >Remarks</label>
                           <textarea class="form-control" v-model.trim="transaction.remarks" rows="2" id="comment" name="remarks"></textarea>
                            </div>
                        </div>
                        <div class="row marzeros"><br>
                            <p class="fon18 drcclr">Landlord Details:</p>
                            <p class=" drcclr">Landlord name : {{property.Landlord_name}}</p>
                            <p class=" drcclr">Last date for rent : {{property.Rent_due_date}}</p>
                        </div>
                    </div>
                    <input type="hidden" name="landlord_id" v-model="transaction.landlord_id">
                    <input type="hidden" name="property_id" v-model="transaction.property_id">
                </div>
                <div class="col-sm-5">
                    <div class="summarybox">
                        <p class="clrdrcblc">Payment Details</p>
                        <hr style="border-color:#eeeeee;margin:10px 0px;">
                        <div class="row marzeros">
                            <ul class="summaryul">
                                <li>
                                    <span class="summaryleft">Payment date</span>
                                    <span class="summaryright">{{new Date().getDate()}}-{{new Date().getMonth() + 1}}-{{new Date().getFullYear()}}</span>
                                </li>
                                 <li>
                                    <span class="summaryleft">Type of payment</span>
                                    <span class="summaryright">{{transaction.mode_of_payment}}</span>
                                </li>
                                 <li>
                                    <span class="summaryleft">Rent month</span>
                                    <span class="summaryright">{{transaction.month}}-{{transaction.year}}</span>
                                </li>
                                <li style="clear:both;"><hr style="border-color:#eeeeee;margin:10px 0px;"></li> 
                                <li>
                                    <span class="summaryleft"><strong>Amount</strong></span>
                                    <span class="summaryright"><strong>{{transaction.rent_amount}}</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div><br>
                    <div class="text-center" style="margin: 0px 15px;">
                        <button type="submit" v-on:click="finddata" class="btn btn-info" style="width:100%;background:#0071bc;border-color:#0071bc;color:#ffffff;">Make Payment</button>
                    </div>
                </div>
              </div>
            </div>
          </form>
        </div>
</template>

<script>
import {localstore} from '../../../main.js'
import axios from 'axios'
export default {

    data(){
      return {
        filled:0,
        left_amount:0,
        types1:0,
        types2:0,
        types3:0,
        pan_doc_need:0,
        imageUpload:0,
        filevalid:true,
        filevalid_format:true,
        property:{
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
          Landlord_name : localstore.details.Landlord_name,
          Account_holder_name : localstore.details.Account_holder_name,
          Bank_name : localstore.details.Bank_name,
          IFSC : localstore.details.IFSC,
          Account_number : localstore.details.Account_number,
          Landlord_city : localstore.details.Landlord_city,
          Landlord_state : localstore.details.Landlord_state,
          Landlord_PAN_number : localstore.details.Landlord_PAN_number,
          startdate_agreement : localstore.details.startdate_agreement,
          enddate_agreement : localstore.details.enddate_agreement,
          property_image : localstore.details.property_image,
          property_image_name : localstore.details.property_image_name,
          pan_doc : localstore.details.pan_doc,
          pan_doc_name : localstore.details.pan_doc_name,
          rent_agreement : localstore.details.rent_agreement,
          rent_agreement_name : localstore.details.rent_agreement_name
        },
        transaction:{
            property_id:localstore.details.property_id,
            user_id:localstore.details.user_id,
            landlord_id:localstore.details.landlord_id,
            //tenant_name,
            //tenant_address, 
            //tenant_phone, 
            landlord_name:localstore.details.Landlord_name,
            landlord_address:localstore.details.Landlord_city+','+localstore.details.Landlord_state,
            //landlord_phone:localstore.,
            acc_holder_name:localstore.details.Account_holder_name,
            acc_number:localstore.details.Account_number,
            bank_name:localstore.details.Bank_name,
            bank_ifsc:localstore.details.IFSC,
            mode_of_payment:'',
            date:'',
            month:'',
            year:'',
            rent_month:'', 
            rent_amount:'',
            remarks:'',
            tenant_PAN_Number:'',
            tenant_pan_doc:'',
            tenant_pan_doc_name:''
        },        
        amount_to_pay_Maintenance:localstore.details.Maintenance_amount,
        amount_to_pay_Security:localstore.details.Security_deposit_amount,
        amount_to_pay_Rent:localstore.details.Rent_amount
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
    var i=0;
    this.transaction.month = new Date().getMonth() + 1;
    this.transaction.year = new Date().getFullYear();
    let self = this;
    axios.get('http://127.0.0.1:8000/api/gettransaction/'+localstore.details.property_id)
          .then(function (response) {
            if(response.data.status=="SUCCESS")
            {
              self.amount_to_pay_Security=response.data.data.rent_deposit;
              self.amount_to_pay_Maintenance=response.data.data.maintenance;
              self.amount_to_pay_Rent=response.data.data.rent;
            }
          })
          .catch((error) => alert(error));

  },
  methods :
  {
    pan_need(){
      if(this.transaction.rent_amount > 50000)
        this.pan_doc_need=1;
      else
        this.pan_doc_need=0;
    },
    type1(){
      this.transaction.mode_of_payment='Rent';
      this.types1=1;
      this.types2=0;
      this.types3=0;
      this.transaction.rent_amount=this.amount_to_pay_Rent;
      if(this.transaction.rent_amount > 50000)
        this.pan_doc_need=1;
    },
    type2(){
      this.transaction.mode_of_payment='Rent Deposit';
      this.types2=1;
      this.types1=0;
      this.types3=0;
      this.transaction.rent_amount=this.amount_to_pay_Maintenance;
      if(this.transaction.rent_amount > 50000)
        this.pan_doc_need=1;
    },
    type3(){
      this.transaction.mode_of_payment='Maintenance';
      this.types3=1;
      this.types2=0;
      this.types1=0;
      this.transaction.rent_amount=this.amount_to_pay_Security;
      if(this.transaction.rent_amount > 50000)
        this.pan_doc_need=1;
    },
    onFileChange(e) {
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
            this.property.pan_doc_name=files[0];
        },
        createImage(file) {
          let reader = new FileReader();
          reader.onload = (e) => {
              this.property.pan_doc = e.target.result;
          };
          reader.readAsDataURL(file);
        },
        finddata(){
          console.log(JSON.stringify(this.transaction)); 
        },
    SubmitTransaction(){
          let self = this;
          this.transaction.rent_month=this.transaction.month+'-'+this.transaction.year;
          console.log(JSON.stringify(this.transaction));
          window.open("http://127.0.0.1:8000/api/checktransaction/","PaymentGateWay");
          /*axios.post('http://127.0.0.1:8000/api/posttransaction',this.transaction)
              .then((response) => {
                console.log(response);
                if(response.data.status=="SUCCESS")
                { 
                  localstore.transaction.mode_of_payment=self.transaction.mode_of_payment,
                  localstore.transaction.date=self.transaction.date,
                  localstore.transaction.rent_month=self.transaction.rent_month;
                  localstore.transaction.rent_amount=self.transaction.rent_amount;
                  localstore.transaction.remarks=self.transaction.remarks;
                  self.$router.push('/transactionview');
                }
              })
              .catch((error) => {
                  alert(error);
              })*/
          }

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
 .marcustradio{
    margin-left: 0px;
    margin-right: 20px;
 }
input[type=radio]:checked + label{
    color: #0071bc;
    font-weight: 600;
}
.summarybox{
    border: 1px solid #D5D5D5;
    padding: 10px;
}
.summaryul{
    padding-left: 0px;
    list-style: none;
}
.summaryul li{
    line-height: 36px;
}
.summaryleft{
    float: left;
    width: 50%;
    text-align: left;
    word-break: break-word;
}
.summaryright{
    float: right;
    width: 48%;
    text-align: right;
}
.fon18{
    font-size: 18px;
}
.drcclr{
    color: #546E7A;
}
</style>