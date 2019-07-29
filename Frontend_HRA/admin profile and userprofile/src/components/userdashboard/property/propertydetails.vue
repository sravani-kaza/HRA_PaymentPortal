<template>
<div>
      <div class="header">
          <div class="row marzeros">
          <h4 class="title pull-left">Property details</h4>
          <router-link :to="{ name: 'propertysummary' }"><button type="button" class="btn btn-danger pull-right paymentbtn">Proceed to pay</button></router-link>
          <a  class="pull-right clrliteash" style="margin: 10px 15px;" data-toggle="modal" data-target="#relocatedmodal">Relocated?</a>
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
   <div class="badgecustom">G</div>
   <p class="fon14 clrliteash mar20_0 wdbrc">Gulmohar park</p>
 </div>
 <div class="col-sm-3">
   <p class="fon12 clrash">Staying since</p>
   <p class="fon14 clrliteash">02 Jun 2017</p>
 </div>
 <div class="col-sm-3">
   <p class="fon12 clrash">Address</p>
   <p class="fon14 clrliteash">Room 3c, 3rd floor, 513 plot number, Gulmohar park, Serilingampally, Hyderabad,580013</p>
 </div>
  </div>
  <div class="row marzeros">
      <div class="col-sm-3">
            <p class="fon12 clrash">Security deposit &nbsp;<span><i class="far fa-check-circle" style="color:#88D98D;"></i></span></p>
            <p class="fon14 clrliteash">1,00,000.00</p>
        </div>
        <div class="col-sm-3">
            <p class="fon12 clrash">Rent amount (Due date)</p>
            <p class="fon14 clrliteash">10,000.00(2nd of every month)</p>
        </div>
        <div class="col-sm-3">
            <p class="fon12 clrash">Maintenace amount (Due date) </p>
            <p class="fon14 clrliteash">1,000.00 (10th of every month)</p>
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
     <p class="fon14 clrliteash">Vikram</p>
   </div>
   <div class="col-sm-3">
     <p class="fon12 clrash">City</p>
     <p class="fon14 clrliteash">Hyderabad</p>
   </div>
   <div class="col-sm-3">
     <p class="fon12 clrash">State</p>
     <p class="fon14 clrliteash">Telangana</p>
   </div>
   <div class="col-sm-3">
     <p class="fon12 clrash">PAN</p>
     <p class="fon14 clrliteash">SNRPV7865F&nbsp;&nbsp;<span><i class="far fa-file-image" style="color:#3284EF;"></i></span></p>
   </div>
 </div>
 <div class="row marzeros">
   <div class="col-sm-3">
     <p class="fon12 clrash">Account holder name</p>
     <p class="fon14 clrliteash">Vikram.e</p>
   </div>
   <div class="col-sm-3">
     <p class="fon12 clrash">Bank name</p>
     <p class="fon14 clrliteash">State bank of india</p>
   </div>
   <div class="col-sm-3">
     <p class="fon12 clrash">IFSC</p>
     <p class="fon14 clrliteash">A0000000000000056</p>
   </div>
   <div class="col-sm-3">
     <p class="fon12 clrash">Account number</p>
     <p class="fon14 clrliteash">458769874563256569</p>
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
        <p class="fon14 clrliteash">02 Jun 2017</p>
   </div>
   <div class="col-sm-3">
      <p class="fon12 clrash">End date </p>
        <p class="fon14 clrliteash">21 Jun 2019</p>
   </div>
   <div class="col-sm-3">
      <p class="fon12 clrash">Agreement </p>
        <p class="fon14 clrliteash">PDF&nbsp;&nbsp;<span><i class="fas fa-file-contract" style="color:#3284EF;"></i></span></p>
   </div>
 </div>
</div>
</div>
        </div>

    <div id="relocatedmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="text-center" style="font-size:100px;color:#ff0000;">
          <i class="far fa-trash-alt"></i>
        </div>
        <div class="text-center">
          <h5>Do you want to delete this property</h5>
          <button type="button" class="btn btn-info" style="margin:5px;">Yes</button>
          <button type="button" class="btn btn-danger" style="margin:5px;" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>

  </div>
</div>
    </div>
</template>

<script>
export default {
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
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