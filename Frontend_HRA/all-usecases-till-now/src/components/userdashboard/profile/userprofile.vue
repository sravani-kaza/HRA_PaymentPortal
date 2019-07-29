<template>
    <div>
      <div class="header">
          <h4 class="title">profile</h4>
        </div>
        <div class="row marzeros">
            <div class="col-sm-7">
                <table class="table profile_table">
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{email}}</td>
                    </tr>
                    <tr>
                        <td>Country code</td>
                        <td>India +91</td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td>{{mobile}}</td>
                    </tr>
                    <tr>
                        <td>Rewards&nbsp;<i class="fas fa-trophy"></i></td>
                        <td>100 <span class="cuspoin"><i class="far fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="Lorem ipsum"></i></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-5">
                <div class="avatar-upload mmobcenter">
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(https://s3-ap-southeast-1.amazonaws.com/paymatrixuploads/profile_pic/profile.png);">
                        </div>
                    </div>
                    <div class="avatar-edit text-center">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload">Upload Profile</label>
                    </div>
                </div>
            </div>
            <div class="row marzeros">
                 <div class="col-sm-7">
                     <div class="row ">
                        <div class="col-sm-7">
                            <label for="" class="lblcust">Alternate Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="x" placeholder="">
                                <span class="input-group-btn">
                                    <button class="btn btn-info drcblubtn" type="submit">Submit</button>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div>
                                <p class="contpop"><span class="whitetooltip"  data-toggle="tooltip" data-placement="top" data-original-title="You can login on www.paymatrix.in and avail discount & cashbacks">Why should I share?</span></p>
                            </div>
                        </div>
                        
                     </div>
                     <div class="col-sm-5">
                       <span><button class="btn btn-info drcblubtn" type="submit" v-on:click="logout">Logout</button></span>
                     </div>
                 </div>
            </div><br>
            <div class="row marzeros">
                <div class="col-sm-12">
                    <p class="profileempheading">Employers</p>
                    <div class="empbox">
                        <div class="table-responsive bodnone" style="margin-bottom:0px;">
                        <table class="table profile_table" style="margin: 0px;color: #909399;font-size:14px;">
                            <tbody>
                            <tr>
                                <td class="pad5_15">
                                    <img src="http://www.sonostarventures.com/wp-content/uploads/2017/11/pwc-logo.jpg" class="complogo" alt="">
                                </td>
                                <td class="pad5_15">Employer name : <span class="clrdrcbl">PWC</span></td>
                                <td class="pad5_15">Employee ID : <span class="clrdrcbl">PWC123456</span></td>
                                <td class="pad5_15">Property shared : <span class="clrdrcbl">J.P. Nagar 513</span></td>
                            </tr>
                            </tbody>
                        </table>
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
export default {
  data(){
      return{
          name:localstore.user.name,
          email:localstore.user.email,
          mobile:localstore.user.mobile,
      }
  },
  mounted(){
    localStorage.setItem('name',"hello");
    localstore.user.user_id = JSON.stringify(localStorage.getItem('user_id'));
    localstore.user.token = JSON.stringify(localStorage.getItem('token'));
    localstore.user.name = JSON.stringify(localStorage.getItem('name'));
    localstore.user.email = JSON.stringify(localStorage.getItem('email'));
    localstore.user.mobile = JSON.stringify(localStorage.getItem('mobile'));
    localstore.details.user_id = JSON.stringify(localStorage.getItem('user_id'));
    localstore.details.token = JSON.stringify(localStorage.getItem('token'));
  },
  methods:{
    logout(){
      let self = this;
        localStorage.clear();
        localstore.user.user_id="";
        localstore.user.user_id = "";
        localstore.user.token = "";
        localstore.user.name = "";
        localstore.user.email = "";
        localstore.user.mobile ="";
        localstore.details.user_id = "";
        localstore.details.token = "";
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
        self.name="";
        self.email="";
        self.mobile="";
        self.$router.push('/login');
      
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.clrdrcbl{
    color: #303133;
}
.bodnone{
    border:none !important;
}
.pad5_15{
        padding: 5px 15px !important;

}
.profile_table{
    margin-top: 10px;
    color: #303133;
    font-size: 16px;
}
.profile_table > thead > tr > th, .profile_table > tbody > tr > th, .profile_table > tfoot > tr > th, .profile_table > thead > tr > td, .profile_table > tbody > tr > td, .profile_table > tfoot > tr > td{
    padding: 9px 5px;
}
.profile_table thead tr > th, .profile_table thead tr > td, .profile_table tbody tr > th, .profile_table tbody tr > td, .profile_table tfoot tr > th, .profile_table tfoot tr > td{
    border-top: none;
}
.card .profile_table tbody td:first-child, .card .profile_table thead th:first-child{
padding-left: 5px;
}
.contpop{
    color:#909399;font-size:14px;font-style: italic;margin: 32px 0px 10px;cursor: pointer;
}
.cuspoin{
    cursor: pointer;
}
.whitetooltip + .tooltip > .tooltip-inner {background-color: #fff;color: #909399;border: 1px solid #f1f1f1;padding: 10px 15px;text-align: left;box-shadow: 5px 10px 70px 10px rgba(133,171,181,.10);}
.whitetooltip + .tooltip .tooltip-arrow{
        left: 15% !important;
    border-top-color: #8c8c8c;
}
.whitetooltip + .tooltip{
    left: 0px !important;
}
.lblcust{
    font-size: 12px;
}
.drcblubtn{
        background: #0071bc;
    color: #fff;
    border-color: #0071bc;
}
.profileempheading{
    color: #909399;
    font-weight: 500;
    margin-bottom: 10px;
}
.empbox{
    background: #fff;
    box-shadow: 5px 10px 70px 10px rgba(133,171,181,.10);
    padding: 3px 15px;
    border-radius: 5px; 
}
.complogo{
        width: 40px;
}
/*profile pic css */
.avatar-upload {
  position: relative;
  max-width: 150px;
  /* margin: 50px auto; */
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  /* width: 34px;
  height: 34px; */
    padding: 10px 5px;
  margin-bottom: 10px;
  /* border-radius: 100%; */
  margin-top: 6px;
  background: #FFFFFF;
  border: 1px solid transparent;
  /* box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12); */
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}

.avatar-upload .avatar-preview {
  width: 150px;
  height: 150px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
@media only screen and (max-width: 767px){
    .mmobcenter{
        margin: 0px auto;
    }
}
</style>