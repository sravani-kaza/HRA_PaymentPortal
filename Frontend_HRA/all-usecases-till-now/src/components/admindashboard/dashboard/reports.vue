<template>
    <div>
        <div class="row marzeros">
             <div class="col-sm-12">
              <p class="clrdrcashh">Consolidated report</p>
          </div>
        </div>
        <div class="row marzeros">
             <div class="col-sm-12">
              <div class="form-inline">
                  <div class="form-group mar5_5">
                    <p>
                        <input type="text" class="form-control" id="" v-model="search.ID" placeholder="Enter Employee ID" >
                    </p>
                    </div>
                    <div class="form-group mar5_5">
                      <p>
                        <input type="text" class="form-control" id="" v-model="search.year" placeholder="financial year(yyyy-yyyy)" >
                      </p>
                    </div>
                    <div class="form-group mar5_5">
                        <button type="button" v-on:click="onchange" class="btn linkbtn">View</button>
                    </div>
                    <div class="form-group mar5_5">
                        <button type="button" v-on:click="clicked" class="btn btn-info mar5_5 blubtn">Download</button>
                    </div>
              </div>
          </div>
        </div>

<!-- div to show when empty -->
        <div class="row marzeros whenempty">
            <div class="col-sm-12">
                <h4 class="clrliteashh emptyreportcontent">Please enter the employee Id to view/download the consolidated rent payment to the financial user.</h4>
            </div>
        </div>


         <div class="row marzeros reportdata" v-show="send==1">
             <div class="col-sm-12">
                 <div class="card cardshadow marbot_10">
                     <div class=" row" style="padding: 15px 0px;background-color: #fff; margin: 0px 16px;">
			<h1 class="recptheadng">
				Rent Receipt
			</h1>

			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-6"><h4 class="fonweigh300" style="margin: 0px 0px 10px;">Employee id - {{info.user_id}}</h4></div>
					<div class="col-sm-6"><h6 class="rigtolef fonweigh300 clrlitblc fon_15">Receipt no. <span style="color: #0071bc;font-size: 17px;">1</span></h6></div>
				</div>
			<div class="row" style="margin: 0px;">
				<div class="col-sm-12">
					<p><span style="color: #333333;">An amount of <strong class="fonweigh500" style="color: #000;">{{total}}</strong> has been paid by <strong class="fonweigh500" style="color: #000;"></strong> as Rent to <strong class="fonweigh500" style="color: #000;">Paymatrix</strong> during the period	{{search.year}} for the Property as below.</span></p>
				</div>
			 </div>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<span class="detailheading">Tenant Details</span><br>
						<span class="detailcontent">{{info.tenantname}}</span><br>
						<span class="detailcontent">{{info.tenantemail}}</span><br>
						<span class="detailcontent">{{info.tenantphone}}</span><br>
					</div>
					<div class="col-sm-6 rigtolef">
						<span class="detailheading">Landlord Details</span><br>
						<span class="detailcontent">{{info.landlordname}}</span><br>
						<span class="detailcontent">{{info.landlordemail}}</span><br>
						<span class="detailcontent">{{info.landordpan}}</span><br>
					</div>
			</div>
			</div>
			<div class="row" style="margin: 0px;">
				<div class="col-sm-12">
					<span class="detailheading">Property Details:</span><br>
					<p class="detailcontent">
						{{property.door_number}}, {{property.area}}, {{property.society}}, {{property.city}},{{property.state}}-{{property.pin}}				</p>
				</div>
			</div>
			<div class="row" style="margin: 0px;">
				<div class="col-sm-12">
					<span class="detailheading">Rent payment details:</span><br>
					<div class="table-responsive">
						<table class="table table-bordered">
							<tbody>
								<tr >
									<th class="reportth">Month</th>
									<th class="reportth">Date of Transaction</th>
									<th class="reportth">Transaction ID</th>
									<th class="reportth">Amount in Rs</th>
								</tr>
								<tr v-for="transaction in reports" :key="transaction.transaction_id">
										<td class="tab-mont-disp">{{transaction.rent_month}}</td>
										<td class="tab-mont-disp">{{transaction.date}}</td>
										<td class="tab-mont-disp">{{transaction.transaction_id}}</td>
										<td class="tab-mont-disp">{{transaction.rent_amount}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row" style="margin: 0px;">
				<div class="col-sm-12">
					<p style="font-size:14px;color: #333333">The above rent payments are made by me on Paymatrix and the same shared to employer for requisite Tax exemption under <strong class="fonweigh500" style="color: #000;">Section 10(13A)</strong> of the Income Tax Act, 1961. </p><br>
				</div>
			</div>
			<div class="row" style="margin: 0px;">
				<div class="col-sm-12">
					<span class="detailheading">Regards</span><br>
					<span class="detailcontent"></span><br>
					<span class="detailcontent">67854</span><br>
					<span class="detailcontent">ramubonkuri@paymatrix.co.in</span><br>
					<span class="detailcontent">9985004737</span><br>
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
	import axios from 'axios'
	export default {
	  data() {
	    return {
	      search:{
	        ID:'',
			year:'',
			download:0,
		  },
		  info:'',
		  property:'',
		  total:'',
		  send:0,
		  reports:[],
	    };
	  },
	  methods:{
		clicked(){
			this.search.download = 1;
			let self = this;
	        axios.post('http://127.0.0.1:8000/api/pdfgenerate',self.search)
	            .then((response) => {
	            //    alert(response);
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
	        var i,j;
	        var sum = 0;
	        axios.post('http://127.0.0.1:8000/api/pdfgenerate',self.search)
	            .then((response) => {
	            //    alert(response);
	               if(response.data.status=="SUCCESS")
	               {
						self.send = 1;
						self.info=response.data.info;
						self.property=response.data.property;
						self.reports=response.data.transaction;
						// console.log(response.data.info);
						sum = 0;
						for(i=0;i<self.reports.length;i++)
						{
							sum += self.reports[i].rent_amount;
						}
							self.total=sum;
						// console.log(self.total);
	               }
	               else
	                 alert("Failed Fetching");
	            })
	            .catch((error) => alert(error))
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
 .linkbtn{
     border: none;
     color: #3284EF;
 }
 .linkbtn:hover,  .linkbtn:focus,  .linkbtn:active{
     background: transparent;
     color: #3284EF;
 }
.emptyreportcontent{
    font-size: 25px;
    text-align: center;
    font-weight: 300;
    margin: 6% 0px;
}
.rigtolef{
    text-align: right;
}
.recptheadng{
    text-align: center;
    color: #0071bc;
    font-size: 26px;
}
.fonweigh300{
    font-weight: 300;
}
.fonweigh500{
    font-weight: 500;
}
.clrlitblc{
    color: #333333;
}
.fon_15{
    font-size: 15px !important;
}
.detailheading{
    font-size:17px;color: #e88d14;line-height: 30px;
}
.detailcontent{
    font-size:15px;color: #333333;line-height: 24px;
}
.reportth{
    width:25%;font-weight: 500;font-size: 15px;text-align: center;
}
.reportdata{
    max-height: 500px;
    overflow-y: scroll;
    padding: 15px 0px;
}
.marbot_10{
        margin-bottom: 10px;
}
@media only screen and (max-width: 767px){
    .emptyreportcontent{
        font-size: 18px;
    }
    .rigtolef{
    text-align: left;
}
}
</style>
