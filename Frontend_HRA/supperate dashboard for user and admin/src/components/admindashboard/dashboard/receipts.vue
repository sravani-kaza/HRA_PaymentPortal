<template>
<div>
      <div class="row marzeros">
          <div class="col-md-5 col-sm-5">
              <p class="clrdrcashh">Rent Receipts</p>
          </div>
          <div class="col-md-7 col-sm-7 ritetocenter">
              <div class="form-inline">
                  <div class="form-group mar5_5">
                        <input type="text" class="form-control" id="" placeholder="Select date">
                    </div>
                    <div class="form-group mar5_5">
                        <button type="button" class="btn btn-icons"><i class="fas fa-file-download"></i></button>
                    </div>
              </div>
          </div>
      </div><br>
      <div class="row marzeros">
          <div class="col-sm-12 form-inline ritetocenter">
                  <div class="form-group mar5_5">
                        <input type="text" class="form-control" id="" placeholder="Search">
                    </div>
              </div>
          <div class="table-responsive">          
                <table class="table tbllclr">
                    <thead>
                    <tr>
                        <th class="fonweigh400">Employee ID</th>
                        <th class="fonweigh400">Transaction type</th>
                        <th class="fonweigh400">Amount</th>
                        <th class="fonweigh400">HRA Receipt ID</th>
                        <th class="fonweigh400">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            67854
                        </td>
                        <td>
                            1521441620540374900
                        </td>
                        <td>
                            Ramu Bonkuri
                        </td>
                        <td>
                            ramubonkuri@paymatrix.co.in	
                        </td>
                        <td>
                            <div class="form-inline">
                               <button type="button" class="btn btn-info mar5_5 blubtn" data-toggle="modal" data-target="#datareceipt">view</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            67854
                        </td>
                        <td>
                            1521441620540374900
                        </td>
                        <td>
                            Ramu Bonkuri
                        </td>
                        <td>
                            ramubonkuri@paymatrix.co.in	
                        </td>
                        <td>
                            <div class="form-inline">
                               <button type="button" class="btn btn-info mar5_5 blubtn" data-toggle="modal" data-target="#datareceipt">view</button>
                            </div>
                        </td>
                    </tr><tr>
                        <td>
                            67854
                        </td>
                        <td>
                            1521441620540374900
                        </td>
                        <td>
                            Ramu Bonkuri
                        </td>
                        <td>
                            ramubonkuri@paymatrix.co.in	
                        </td>
                        <td>
                            <div class="form-inline">
                               <button type="button" class="btn btn-info mar5_5 blubtn" data-toggle="modal" data-target="#datareceipt">view</button>
                            </div>
                        </td>
                    </tr><tr>
                        <td>
                            67854
                        </td>
                        <td>
                            1521441620540374900
                        </td>
                        <td>
                            Ramu Bonkuri
                        </td>
                        <td>
                            ramubonkuri@paymatrix.co.in	
                        </td>
                        <td>
                            <div class="form-inline">
                               <button type="button" class="btn btn-info mar5_5 blubtn" data-toggle="modal" data-target="#datareceipt">view</button>
                            </div>
                        </td>
                    </tr><tr>
                        <td>
                            67854
                        </td>
                        <td>
                            1521441620540374900
                        </td>
                        <td>
                            Ramu Bonkuri
                        </td>
                        <td>
                            ramubonkuri@paymatrix.co.in	
                        </td>
                        <td>
                            <div class="form-inline">
                               <button type="button" class="btn btn-info mar5_5 blubtn" data-toggle="modal" data-target="#datareceipt">view</button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
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

      <!-- Modal for details -->
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
                  <p class="fon14 clrliteash">100503246</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Transaction Id</p>
                  <p class="fon14 clrliteash">1538505321485950281</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Tenant Name</p>
                  <p class="fon14 clrliteash">Ramu Bonkuri</p>
              </div>
          </div>
          <div class="row marzeros">
              <div class="col-sm-4">
                  <p class="fon12 clrash">Tenant Email</p>
                  <p class="fon14 clrliteash">ramubonkuri@paymatrix.co.in</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Contact Number</p>
                  <p class="fon14 clrliteash">9985004737</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Landlord Name</p>
                  <p class="fon14 clrliteash">Paymatrix</p>
              </div>
          </div>
          <div class="row marzeros">
              <div class="col-sm-4">
                  <p class="fon12 clrash">Landlord Email</p>
                  <p class="fon14 clrliteash">ramubonkuri@gmail.com</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Landlord PAN</p>
                  <p class="fon14 clrliteash">ABCDE1234F</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Property Address</p>
                  <p class="fon14 clrliteash">123, TESTSoc, TESTArea, HYD, Telangana - 500030</p>
              </div>
          </div>
          <div class="row marzeros">
              <div class="col-sm-4">
                  <p class="fon12 clrash">Payment Type</p>
                  <p class="fon14 clrliteash">RENT</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Rent Amount</p>
                  <p class="fon14 clrliteash">10000.00</p>
              </div>
              <div class="col-sm-4">
                  <p class="fon12 clrash">Rent for month</p>
                  <p class="fon14 clrliteash">2018-03</p>
              </div>
          </div>
          <div class="row marzeros">
              <div class="col-sm-4">
                  <p class="fon12 clrash">HRA Receipt</p>
                  <p class="fon14 clrliteash"><a href="" style="background: rgb(0, 113, 188); color: rgb(255, 255, 255); padding: 4px 7px; margin: 5px 0px; border-radius: 3px;">View</a></p>
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