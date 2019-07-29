<template>
<div>
    <div class="row marzeros">
        <h5>Rent Receipts</h5>
    </div>
     <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="card cardshadow">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="numbers align_left">
                                            <p class="clrdrcashh fon14">Rent receipts</p>
                                              <router-link :to="{ name: 'receiptadmin' }"><h5 class="clrmoredrc fon22 marbot6">View</h5></router-link>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="icon-big iconsiz icon-warning text-center">
                                            <i class="fas fa-receipt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="card cardshadow">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="numbers align_left">
                                            <p class="clrdrcashh fon14">Rent Agreements</p>
                                              <router-link :to="{ name: 'agreementadmin' }"><h5 class="clrmoredrc fon22 marbot6">View</h5></router-link>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="icon-big iconsiz icon-success text-center">
                                            <i class="fas fa-file-contract"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="card cardshadow">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="numbers align_left">
                                            <p class="clrdrcashh fon14">Consolidated HRA Receipts</p>
                                              <router-link :to="{ name: 'reportadmin' }"><h5 class="clrmoredrc fon22 marbot6">View</h5></router-link>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="icon-big iconsiz icon-danger text-center">
                                            <i class="far fa-newspaper"></i>
                                        </div>
                                    </div>
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
 .cardshadow{
             box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
 }
 .align_left{
     text-align: left !important;
 }
 .clrdrcashh{
     color: #637A91;
 }
 .clrmoredrc{
     color: #2A3F54;
 }
 .fon22{
     font-size: 22px;
 }
 .marbot6{
         margin-bottom: 6px;
 }
 .iconsiz{
     font-size: 30px !important;
 }
 .fon14{
     font-size: 14px;
 }

</style>