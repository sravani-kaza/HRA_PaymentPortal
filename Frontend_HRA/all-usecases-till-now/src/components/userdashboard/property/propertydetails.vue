<template>
<div>
  <div class="header">
      <div class="row marzeros">
        <h4 class="title pull-left">Property details</h4>
        <router-link :to="{ name: 'propertysummary' }"><button type="button" class="btn btn-danger pull-right paymentbtn">Proceed to pay</button></router-link>
        <a  class="pull-right clrliteash" style="margin: 10px 15px;">Relocated?</a>
      </div>
      <hr style="border-color:#EEEEEE;margin: 0px 0px;">
  </div>
  <div class="content">
    <div class="row marzeros">
      <div class="row marzeros">
        <h4 class="propheadings">Property details &nbsp;&nbsp;<span><router-link :to="{ name: 'editproperty' }"><i class="far fa-edit clrash"></i></router-link></span></h4>
      </div>
    <div class="row marzeros">
      <div class="col-sm-3">
        <p class="fon12 clrash">Property address</p>
        <div class="badgecustom">{{(property.Property_name).substring(0,2)}}</div>
          <p class="fon14 clrliteash mar20_0 wdbrc">{{property.Property_name}}</p>
        </div>
        <div class="col-sm-3">
          <p class="fon12 clrash">Staying since</p>
          <p class="fon14 clrliteash">{{property.Staying_since}}</p>
        </div>
        <div class="col-sm-3">
          <p class="fon12 clrash">Address</p>
          <p class="fon14 clrliteash">{{property.Area}},{{property.City}},{{property.State}},{{property.Pin}}</p>
        </div>
      </div>
      <div class="row marzeros">
        <div class="col-sm-3">
          <p class="fon12 clrash">Security deposit &nbsp;<span><i class="far fa-check-circle" style="color:#88D98D;"></i></span></p>
          <p class="fon14 clrliteash">{{property.Security_deposit_amount}}</p>
        </div>
        <div class="col-sm-3">
          <p class="fon12 clrash">Rent amount (Due date)</p>
          <p class="fon14 clrliteash">{{property.Rent_amount}}({{property.Rent_due_date}})</p>
        </div>
        <div class="col-sm-3">
          <p class="fon12 clrash">Maintenace amount (Due date) </p>
          <p class="fon14 clrliteash">{{property.Maintenance_amount}} ({{property.Maintenance_due_date}})</p>
        </div>
      </div>
    </div>
    <div class="row marzeros">
      <div class="row marzeros">
        <h4 class="propheadings">Account details &nbsp;&nbsp;<span><router-link :to="{ name: 'editaccount' }"><i class="far fa-edit clrash"></i></router-link></span></h4>
      </div>
      <div class="row marzeros">
        <div class="row marzeros">
          <div class="col-sm-3">
            <p class="fon12 clrash">Name</p>
            <p class="fon14 clrliteash">{{property.Landlord_name}}</p>
          </div>
          <div class="col-sm-3">
            <p class="fon12 clrash">City</p>
            <p class="fon14 clrliteash">{{property.Landlord_city}}</p>
          </div>
          <div class="col-sm-3">
            <p class="fon12 clrash">State</p>
            <p class="fon14 clrliteash">{{property.Landlord_state}}</p>
          </div>
          <div class="col-sm-3">
            <p class="fon12 clrash">PAN</p>
            <p class="fon14 clrliteash"><button type="button" class="btn btn-info mar5_5 blubtn" v-on:click="openimgPan">{{property.Landlord_PAN_number}}</button>&nbsp;&nbsp;<span><i class="far fa-file-image" style="color:#3284EF;"></i></span></p>
          </div>
        </div>
        <div class="row marzeros">
          <div class="col-sm-3">
            <p class="fon12 clrash">Account holder name</p>
            <p class="fon14 clrliteash">{{property.Account_holder_name}}</p>
          </div>
          <div class="col-sm-3">
            <p class="fon12 clrash">Bank name</p>
            <p class="fon14 clrliteash">{{property.Bank_name}}</p>
          </div>
          <div class="col-sm-3">
            <p class="fon12 clrash">IFSC</p>
            <p class="fon14 clrliteash">{{property.IFSC}}</p>
          </div>
          <div class="col-sm-3">
            <p class="fon12 clrash">Account number</p>
            <p class="fon14 clrliteash">{{property.Account_number}}</p>
          </div>
          <div class="row marzeros">
            <p> Maintenance Account Details </p>
            <div class="col-sm-3">
              <p class="fon12 clrash">Account holder name</p>
              <p class="fon14 clrliteash">{{property.M_Account_holder_name}}</p>
            </div>
            <div class="col-sm-3">
              <p class="fon12 clrash">Bank name</p>
              <p class="fon14 clrliteash">{{property.M_Bank_name}}</p>
            </div>
            <div class="col-sm-3">
              <p class="fon12 clrash">IFSC</p>
              <p class="fon14 clrliteash">{{property.M_IFSC}}</p>
            </div>
            <div class="col-sm-3">
              <p class="fon12 clrash">Account number</p>
              <p class="fon14 clrliteash">{{property.M_Account_number}}</p>
            </div>
        </div>
      </div>
    </div>
    <div class="row marzeros">
      <div class="row marzeros">
        <h4 class="propheadings">Rent agreement &nbsp;&nbsp;<span><router-link :to="{ name: 'editagreement' }"><i class="far fa-edit clrash"></i></router-link></span></h4>
      </div>
      <div class="row marzeros">
        <div class="row marzeros">
          <div class="col-sm-3">
            <p class="fon12 clrash">Start date </p>
            <p class="fon14 clrliteash">{{property.startdate_agreement}}</p>
          </div>
          <div class="col-sm-3">
            <p class="fon12 clrash">End date </p>
            <p class="fon14 clrliteash">{{property.enddate_agreement}}</p>
          </div>
          <div class="col-sm-3">
              <p class="fon14 clrliteash"><button type="button" class="btn btn-info mar5_5 blubtn" v-on:click="openimgAgr">{{property.rent_agreement_name}}</button>&nbsp;&nbsp;<span><i class="far fa-file-image" style="color:#3284EF;"></i></span></p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script>
import {localstore} from '../../../main.js'
import axios from 'axios'
import pdf from 'vue-pdf'
export default {
  data(){
    return {
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
        rent_agreement_name : localstore.details.rent_agreement_name,
        M_Account_holder_name:localstore.details.M_Account_holder_name,
        M_Bank_name:localstore.details.M_Bank_name,
        M_IFSC:localstore.details.M_IFSC,
        M_Account_number:localstore.details.M_Account_number,
        M_same:localstore.details.M_same,
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
        //console.log('hello'+localstore.details.property_id)
        let self=this;
        axios.get("http://127.0.0.1:8000/api/getproperty/"+localstore.details.property_id)
              .then(function (response) {
                console.log(response.data.data);
                if(response.data.data){
                localstore.details.Property_name=response.data.data.name,
                localstore.details.Security_deposit_amount=response.data.data.rent_deposit,
                localstore.details.Rent_amount=response.data.data.rent_amount,
                localstore.details.Maintenance_amount=response.data.data.rent_maintenance,
                localstore.details.Maintenance_due_date=response.data.data.maintenance_due_date,
                localstore.details.Rent_due_date=response.data.data.rent_due_date,
                localstore.details.Staying_since=response.data.data.staying_since,
                localstore.details.deposit=response.data.data.paid_security_deposit,
                localstore.details.property_image_name=response.data.data.property_image,
                localstore.details.Door_number=response.data.data.door_number,
                localstore.details.Society=response.data.data.society,
                localstore.details.Area=response.data.data.area,
                localstore.details.City=response.data.data.city,
                localstore.details.State=response.data.data.state,
                localstore.details.Pin=response.data.data.pin,
                self.property.Property_name=response.data.data.name,
                self.property.Security_deposit_amount=response.data.data.rent_deposit,
                self.property.Rent_amount=response.data.data.rent_amount,
                self.property.Maintenance_amount=response.data.data.rent_maintenance,
                self.property.Maintenance_due_date=response.data.data.maintenance_due_date,
                self.property.Rent_due_date=response.data.data.rent_due_date,
                self.property.Staying_since=response.data.data.staying_since,
                self.property.deposit=response.data.data.paid_security_deposit,
                self.property.property_image_name=response.data.data.property_image,
                self.property.Door_number=response.data.data.door_number,
                self.property.Society=response.data.data.society,
                self.property.Area=response.data.data.area,
                self.property.City=response.data.data.city,
                self.property.State=response.data.data.state,
                self.property.Pin=response.data.data.pin
                //console.log(localstore.details)
              }

          })
          .catch((error) => alert(error));

        axios.get('http://127.0.0.1:8000/api/getlandlord/'+localstore.details.property_id)
              .then(function (response) {
                if(response.data.data){
                console.log(response.data.data);
                localstore.details.Landlord_name=response.data.data.name,
                localstore.details.Account_holder_name=response.data.data.account_holder_name,
                localstore.details.Bank_name=response.data.data.bank_name,
                localstore.details.IFSC=response.data.data.ifsc,
                localstore.details.Account_number=response.data.data.account_number,
                localstore.details.Landlord_city=response.data.data.landlord_city,
                localstore.details.Landlord_state=response.data.data.landlord_state,
                localstore.details.Landlord_PAN_number=response.data.data.pan_number,
                localstore.details.pan_doc_name=response.data.data.pan_doc,
                localstore.details.M_Account_holder_name=response.data.data.maintainer_name,
                localstore.details.M_Bank_name=response.data.data.maintainer_bank_name,
                localstore.details.M_IFSC=response.data.data.maintainer_ifsc,
                localstore.details.M_Account_number=response.data.data.maintainer_account_no,
                self.property.M_Account_number=response.data.data.maintainer_account_no,
                self.property.Landlord_name=response.data.data.name,
                self.property.Account_holder_name=response.data.data.account_holder_name,
                self.property.Bank_name=response.data.data.bank_name,
                self.property.IFSC=response.data.data.ifsc,
                self.property.Account_number=response.data.data.account_number,
                self.property.Landlord_city=response.data.data.landlord_city,
                self.property.Landlord_state=response.data.data.landlord_state,
                self.property.Landlord_PAN_number=response.data.data.pan_number,
                self.property.pan_doc_name=response.data.data.pan_doc,
                //self.property.M_same=response.data.data.M_same,
                self.property.M_Account_holder_name=response.data.data.maintainer_name,
                self.property.M_Bank_name=response.data.data.maintainer_bank_name,
                self.property.M_IFSC=response.data.data.maintainer_ifsc,
                self.property.M_Account_number=response.data.data.maintainer_account_no;
                if(response.data.data.account_number==response.data.data.maintainer_account_no && response.data.data.ifsc==response.data.data.maintainer_ifsc){
                  localstore.details.M_same=1;
                }
                else
                  localstore.details.M_same=0;
                self.property.M_same=localstore.details.M_same;
              }
                })
              .catch((error) => alert(error));
          axios.get('http://127.0.0.1:8000/api/getdocuments/'+localstore.details.landlord_id+'/'+localstore.details.property_id)
                .then(function (response) {
                  if(response.data.data){
                  console.log(response.data.data),
                  localstore.details.startdate_agreement=response.data.data.agreement_start,
                  localstore.details.enddate_agreement=response.data.data.agreement_end,
                  localstore.details.rent_agreement_name=response.data.data.rent_agreement,
                  self.property.startdate_agreement=response.data.data.agreement_start,
                  self.property.enddate_agreement=response.data.data.agreement_end,
                  self.property.rent_agreement_name=response.data.data.rent_agreement
                  }
                  })
                .catch((error) => alert(error));
          
          },
          methods:{
            openimgPan(){
              if(this.property.pan_doc_name!="")
                window.open("http://localhost:8000/Pandocs/"+this.property.pan_doc_name,"img");
            },
            openimgAgr(){
              console.log(this.property.rent_agreement_name);
              if(this.property.rent_agreement_name!="")
                window.open("http://localhost:8000/Propertydocuments/"+this.property.rent_agreement_name,"img");
            }
          }

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Roboto:300,400,500');
 .modal{
   padding-left: 0px !important;
   background-color: rgba(0, 0, 0, 0.4);
 }
 .custmodal-wid{
      max-width: 550px;
      /* margin: 2% auto; */
    }
    .custmodal-wid .modal-content{
      border-radius: 0px;
      border: none;
    }
    .custmodal-wid .modal-body{
      padding-bottom: 6px;
    }
    .roboto-15{
      font-size: 15px;
    }
    .roboto-13{
      font-size: 13px;
    }
    .roboto-light{
      font-weight: 300;
    }
    .roboto-med{
      font-weight: 500;
    }
    .clr-gry{
      color: #4f6d8d;
    }
    .montserrat-18{
      font-size: 18px;
    }
    .montserrat-reg{
      font-weight: 400;
    }
    .clr-grnn{
      color: #1ab394;
    }
    .clr-red{
      color: #e84849;
    }
    .clr-drkgry{
      color: #545454;
    }
    .font-weigh{
      font-weight: 500;
    }
    .ratemargin{
      margin: 0px 13px 10px;
    }
    .margin-que{
      margin: 0px 13px 5px;
    }
    .btncontinu, .btnclos{
      background: #1ab394;
      color: #fff;
      padding: 10px 25px;
      margin-top: 6px;
      margin-bottom: 17px;
      border: none;
      border-radius: 50px;
    }
    .btnclos{
      background: #e84849;
    }
    .btncontinu:focus, .btnclos:focus{
      outline: none;
    }
    .btncontinu:hover, .btncontinu:active, .btncontinu:active:hover{
      background: #1ab394;
      color: #fff;
      border: none;
    }
    .btnclos:hover, .btnclos:active, .btnclos:active:hover{
      background: #e84849;
      color: #fff;
      border: none;
    }
    /*rating*/

    .rating { 
      margin: 0px 8px;
      border: none;
      float: left;
    }
    .rating > input { display: none; } 
    .rating > label:before { 
      margin: 0px 4px;
      font-size: 22px;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }
    .rating > label { 
      color: #ddd; 
      float: right;
      cursor: pointer; 
    }
    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFD700;  } 

.wdbrc{
    word-break: break-word;
}
.marzeros{
    margin: 0px;
}
 .fon14{
    font-size: 14px;
}
 .fon12{
    font-size: 12px;
}
.clrliteash{
    color: #546E7A;
}
.clrash{
    color: #B0BEC5;
}
.clrdrcblc{
    color: #263238;
}
.propheadings{
      font-size: 18px;
    font-weight: 400;
    margin: 10px 0px;
    color: #263238;
}
.badgecustom{
        width: 40px;
    height: 40px;
    border: 1px solid #dddddd;
    border-radius: 5px;
    float: left;
    margin-right: 6px;
    text-align: center;
    font-size: 20px;
    padding: 4px 0px;
}
.mar20_0{
    margin: 20px 0px;
}
.marbot15{
    margin: 0px 0px 15px;
}
.btniconpading{
    padding: 5px 8px;
    color: #B0BEC5;
    border-color: #B0BEC5;
}
.paymentbtn{
    background: #f51f1f;
    color: #fff;
    border: #f51f1f;
    padding: 10px 24px;
    margin-bottom: 10px;
}

</style>


