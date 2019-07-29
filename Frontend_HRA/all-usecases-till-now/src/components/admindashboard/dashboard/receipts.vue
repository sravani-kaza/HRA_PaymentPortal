<template>
<div>
      <div class="row marzeros">
          <div class="col-md-5 col-sm-5">
              <p class="clrdrcashh">Rent Receipts</p>
          </div>
          <div class="col-md-7 col-sm-7 ritetocenter">
              <div class="form-inline">
                  <div class="form-group mar5_5">
                        <input data-vv-validate-on="blur" name="startdate" type="date" v-validate="'required|date_format:DD/MM/YYYY'" ref="startdate" class="form-control" id="" v-model.trim="search.start_date"  placeholder="Select date" :class="{'invalid': errors.has('startdate')}">
                    </div>
                    <div class="form-group mar5_5">
                          <input data-vv-validate-on="blur" name="enddate" v-validate="'required|date_format:DD/MM/YYYY|after:startdate'" class="form-control" type="date" id="" v-model.trim="search.end_date"  placeholder="Select date" :class="{'invalid': errors.has('enddate')}">
                      </div>
                    <div class="form-group mar5_5">
                        <button type="button" v-on:click="clicked" class="btn btn-icons"><i class="fas fa-file-download"  ></i></button>
                    </div>
                    <div class="form-group mar5_5">
                        <button type="button" v-on:click="onchange" class="btn linkbtn">View</button>
                    </div>
              </div>
          </div>
          <div class="col-md-11 col-sm-11 ritetocenter">
            <div class="form-inline">
              <span class="errormsg" v-show="errors.has('startdate')">{{ errors.first('startdate') }}</span>
                <span class="errormsg" v-show="errors.has('enddate')">{{ errors.first('enddate') }}</span>
            </div>
          </div>
      </div><br>
      <div class="row marzeros">
          <div class="col-sm-12 form-inline ritetocenter">
                  <div class="form-group mar5_5">
                        <input type="text" class="form-control" id="" placeholder="Search" v-model="search.tag">
                    </div>
          </div>
          <div >
                <div class="table-responsive">
                      <table class="table tbllclr">
                          <thead>
                          <tr>
                              <th class="fonweigh400">Employee ID</th>
                              <th class="fonweigh400">Transaction ID</th>
                              <th class="fonweigh400">Amount</th>
                              <th class="fonweigh400">HRA Receipt ID</th>
                              <th class="fonweigh400">Receipt</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr v-for="transaction in receipts" :key="transaction.transaction_id">
                              <td>
                                  {{transaction.user_id}}
                              </td>
                              <td>
                                  {{transaction.transaction_id}}
                              </td>
                              <td>
                                  {{transaction.rent_amount}}
                              </td>
                              <td>
                                  {{transaction.transaction_id}}
                              </td>
                              <td>
                                  <div class="form-inline">
                                     <button type="button" class="btn btn-info mar5_5 blubtn" data-toggle="modal" data-target="#datareceipt">view</button>
                                  </div>
                              </td>
                              <div class="modal fade" id="datareceipt" role="dialog">
                                <div class="modal-dialog modal-lg">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" style="opacity:1;"><i class="fas fa-times"></i></button>
                                      <h4 class="modal-title">Rent receipt view</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row marzeros">
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Employee ID</p>
                                              <p class="fon14 clrliteash">{{transaction.user_id}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Transaction Id</p>
                                              <p class="fon14 clrliteash">{{transaction.transaction_id}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Tenant Name</p>
                                              <p class="fon14 clrliteash">{{transaction.tenant_name}}</p>
                                          </div>
                                      </div>
                                      <div class="row marzeros">
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Tenant Email</p>
                                              <p class="fon14 clrliteash">{{transaction.transaction_id}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Contact Number</p>
                                              <p class="fon14 clrliteash">{{transaction.tenant_phone}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Landlord Name</p>
                                              <p class="fon14 clrliteash">{{transaction.landlord_name}}</p>
                                          </div>
                                      </div>
                                      <div class="row marzeros">
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Landlord Email</p>
                                              <p class="fon14 clrliteash">{{transaction.transaction_id}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Landlord PAN</p>
                                              <p class="fon14 clrliteash">{{transaction.transaction_id}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Property Address</p>
                                              <p class="fon14 clrliteash">123, TESTSoc, TESTArea, HYD, Telangana - 500030</p>
                                          </div>
                                      </div>
                                      <div class="row marzeros">
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Payment Type</p>
                                              <p class="fon14 clrliteash">{{transaction.mode_of_payment}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Rent Amount</p>
                                              <p class="fon14 clrliteash">{{transaction.rent_amount}}</p>
                                          </div>
                                          <div class="col-sm-4">
                                              <p class="fon12 clrash">Rent for month</p>
                                              <p class="fon14 clrliteash">{{transaction.rent_month}}</p>
                                          </div>
                                      </div>
                                      <div class="row marzeros">
                                          <div class="form-inline">
                                             <button type="button" class="btn btn-info mar5_5 blubtn" v-model="transaction.receipt" v-on:click="openimg($event,transaction.receipt)">view</button>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                </div>
                          </tr>
                      </tbody>
                    </table>
                </div>

                    <!-- Modal for details -->

            </div>
            <div class="text-right">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
            </div>
  </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
  data() {
    return {
      search:{
        start_date:'',
        end_date:'',
        tag:'',
        download:0,
      },
      receipts:[]
    };
  },
  methods:{
      clicked(){
          let self = this;
          self.search.download = 1;
          axios.post('http://127.0.0.1:8000/api/getreceipts',self.search)
            .then((response) => {
               if(response.data.status=="SUCCESS")
               {
                  window.open("http://localhost:8000" + response.data.link);
               }
               else
                 alert("Failed Fetching");
            })
            .catch((error) => alert(error))
      },
    onchange(){
        let self = this;
        console.log(JSON.stringify(self.search));
        axios.post('http://127.0.0.1:8000/api/getreceipts',self.search)
            .then((response) => {
               console.log(response.data.data);
               if(response.data.status=="SUCCESS")
               {
                  self.receipts=response.data.data;
               }
               else
                 alert("Failed Fetching");
            })
            .catch((error) => alert(error))
      },
      openimg:function(event,name){
        console.log(event);
        console.log(name);
        window.open("http://localhost:8000/Receipts/"+name);
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
.mar5_5 {
    margin: 5px 5px;
}
.clrliteashh {
    color: #B0BEC5;
}
.blubtn {
    border-color: #A3D0FD;
    background: #E6F1FC;
    color: #3284EF;
}
.blubtn:hover{
        background-color: #68B3C8;
    color: rgba(255, 255, 255, 0.7);
    border-color: #68B3C8;
}
.ritetocenter {
    text-align: right;
}
.btn-icons {
    border-color: #DCDFE6;
}
.iconpading {
    padding: 4px 8px;
}
.tbllclr{
        color: #66615b;
}
.fonweigh400{
    font-weight: 400 !important;
}
.tbllclr>tbody>tr>td{
    padding: 8px;
}
@media only screen and (max-width: 767px){
.ritetocenter {
    text-align: center;
}
}
</style>
