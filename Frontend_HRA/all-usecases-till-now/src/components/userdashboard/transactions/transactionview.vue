<template>
<div>
			<!-- success Modal -->
		<div v-show="success==1"  role="dialog">
			<div class="modal-dialog custmodal-wid">
				
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center"><img src="../../../assets/success.png" style="width:135px;margin-bottom: 15px;"></div>
						<div class="text-center">
							<p class="roboto-15 roboto-light clr-gry">Hi {{transaction.tenant_name}}, Congratulations!</p>
							<p class="montserrat-18 montserrat-reg clr-grnn" style="font-family: 'Montserrat', sans-serif;">Cheers! Payment Successful!</p>
							<p class="roboto-15 roboto-light clr-gry">Payment amount&nbsp;:&nbsp;Rs {{transaction.rent_amount}}</p>
							<p class="roboto-15 roboto-light clr-gry">Transaction ID&nbsp;:&nbsp;<strong class="font-weigh">{{transaction.transaction_id}}</strong></p>
							<p class="roboto-13 roboto-light clr-gry">The above rent or rent deposit shall be credited to your landlord's bank account in <strong class="font-weigh">3 working days</strong>.</p>
							<hr style="border-color: #dddddd;width: 95%;margin: 10px auto;">
						</div>
						<div>
							<p class="roboto-15 clr-grnn ratemargin">Rate your experience</p>
							<p class="roboto-13 roboto-light clr-gry margin-que">How do you rate your landlord or property manager?</p>
							<fieldset class="rating">
								<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
								<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
								<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Just ok - 3 stars"></label>
								<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
								<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							</fieldset><br>
							<p class="roboto-13 roboto-light clr-gry margin-que" style="clear: both;">How do you rate your experience at the rented property?</p>
							<fieldset class="rating">
								<input type="radio" id="star10" name="rating1" value="5" /><label class = "full" for="star10" title="Awesome - 5 stars"></label>
								<input type="radio" id="star9" name="rating1" value="4" /><label class = "full" for="star9" title="Pretty good - 4 stars"></label>
								<input type="radio" id="star8" name="rating1" value="3" /><label class = "full" for="star8" title="Just ok - 3 stars"></label>
								<input type="radio" id="star7" name="rating1" value="2" /><label class = "full" for="star7" title="Kinda bad - 2 stars"></label>
								<input type="radio" id="star6" name="rating1" value="1" /><label class = "full" for="star6" title="Sucks big time - 1 star"></label>
							</fieldset><br>
							<p class="roboto-13 roboto-light clr-gry margin-que" style="clear: both;">How has been your experience with Paymatrix?</p>
							<fieldset class="rating">
								<input type="radio" id="star15" name="rating2" value="5" /><label class = "full" for="star15" title="Awesome - 5 stars"></label>
								<input type="radio" id="star14" name="rating2" value="4" /><label class = "full" for="star14" title="Pretty good - 4 stars"></label>
								<input type="radio" id="star13" name="rating2" value="3" /><label class = "full" for="star13" title="Just ok - 3 stars"></label>
								<input type="radio" id="star12" name="rating2" value="2" /><label class = "full" for="star12" title="Kinda bad - 2 stars"></label>
								<input type="radio" id="star11" name="rating2" value="1" /><label class = "full" for="star11" title="Sucks big time - 1 star"></label>
							</fieldset><br>
						</div><br>
						<hr style="border-color: #dddddd;width: 95%;margin: 3px auto;">
					</div>
					<div class="text-center"><button type="button" class="btnclos" v-on:click="close" >Close</button></div>
				</div>

			</div>
		</div>
	    <!-- success Modal ends -->

	        <!-- Failure Modal ends -->
	    	<div v-show="success==0" role="dialog">
	    		<div class="modal-dialog custmodal-wid">

	    			<!-- Modal content-->
	    			<div class="modal-content">
	    				<div class="modal-body">
	    					<div class="text-center"><img src="../../../assets/fail.png" style="width:135px;margin-bottom: 15px;"></div>
	    					<div class="text-center">
	    						<p class="montserrat-18 montserrat-reg clr-red" style="font-family: 'Montserrat', sans-serif;">Ufff! The payment did not go through!</p>
	    						<p class="roboto-15 roboto-light clr-gry">Don't worry, we got your money back!</p>
	    						<hr style="border-color: #dddddd;width: 95%;margin: 10px auto;">
	    						<div class="text-left" style="margin: 0px 15px;">
	    							<p class="roboto-15 roboto-med clr-drkgry">What can happen to my money if debited?</p>
	    							<p class="roboto-13 roboto-light clr-gry">We shall track down the transaction and acknowledge it as successful after reconciling with the Payment gateway.</p>
	    							<p class="roboto-15 roboto-med clr-drkgry text-center">Or</p>
	    							<p class="roboto-13 roboto-light clr-gry">We shall initiate the refund to your source account within <strong class="font-weigh">5 working days</strong>.</p>
	    						</div>
	    						<hr style="border-color: #dddddd;width: 95%;margin: 10px auto;">
	    						<div class="text-left" style="margin: 0px 15px;">
	    							<p class="roboto-13 roboto-light clr-gry">All you need to do is report the issue at  <a href="mailto:support@paymatrix.in?subject=feedback" style="color: #0071bc;text-decoration: none;"><strong style="font-weight: 500;">support@paymatrix.in</strong></a> </p>
	    							<p class="roboto-13 roboto-light clr-gry">We won’t keep you waiting more than 24 hours&nbsp;&nbsp;<i class="fa fa-smile-o" aria-hidden="true"></i></p>
	    						</div>
	    					</div>
	    					<hr style="border-color: #dddddd;width: 95%;margin: 3px auto;">
	    				</div>
	    				<div class="text-center"><button type="button" class=" btnclos" v-on:click="close">Close</button></div>
	    			</div>

	    		</div>
	    	</div>
	        <!-- Failure Modal ends -->

      	<div class="header">
          <h4 class="title">Transactions</h4>
        </div>
		<!-- Transaction table starts-->
		<div class="transtable">
			<div >	
    	  		<div class="table-responsive">          
    	  		      <table class="table tbllclr">
    	  		          <thead>
    	  		          <tr>
    	  		              <th class="fonweigh400">Employee Name</th>
    	  		              <th class="fonweigh400">Transaction ID</th>
    	  		              <th class="fonweigh400">Amount</th>
    	  		              <th class="fonweigh400">Landlord</th>
    	  		              <th class="fonweigh400">Receipt</th>
    	  		          </tr>
    	  		          </thead>
    	  		          <tbody>
    	  		          <tr v-for="transaction in transactions" :key="transaction.transaction_id">
    	  		              <td>
    	  		                  {{transaction.tenant_name}}
    	  		              </td>
    	  		              <td>
    	  		                  {{transaction.transaction_id}}
    	  		              </td>
    	  		              <td>
    	  		                  {{transaction.rent_amount}}
    	  		              </td>
    	  		              <td>
    	  		                  {{transaction.landlord_name}}	
    	  		              </td>
    	  		              <td>
    	  		                  <div class="form-inline">
    	  		                     <button type="button" class="btn btn-info mar5_5 blubtn" v-model="transaction.receipt" v-on:click="openimg($event,transaction.receipt)">view</button>
    	  		                  </div>
    	  		              </td>
    	  		          </tr>
    	  		   		</tbody>
    	  		   	</table>
    	  		</div>
    		</div>
		</div>
		<!-- Transaction Table ends-->
        
	

   
</div>

</template>

<script>
import {localstore} from './../../../main.js'
import axios from 'axios'
export default {
	data(){
	  return {
	  	success:3,
	    transaction:{
	        tenant_name:'',
	        transaction_id:'',
	        rent_amount:''
		    } ,
			transactions:[]
		}
	},
	mounted(){
		  localstore.user.user_id = localStorage.getItem('user_id');
		  localstore.user.token = localStorage.getItem('token');
		  localstore.user.name = localStorage.getItem('name');
		  localstore.user.email = localStorage.getItem('email');
		  localstore.user.mobile = localStorage.getItem('mobile');
		  localstore.details.user_id = localStorage.getItem('user_id');
		  localstore.details.token =localStorage.getItem('token');
		  console.log(localstore)
		
		let self = this;
		let id = this.$route.params.id;
		if(id)
		{
			axios.get("http://127.0.0.1:8000/api/transaction_status/"+id)
				.then(function (response) {
					console.log(JSON.stringify(response.data));
					if(response.data.status == "SUCCESS")
					{
						if(response.data.data[0].status=="SUCCESS")
						{
							self.success = 1;
							self.transaction.tenant_name = response.data.data[0].tenant_name;
							self.transaction.rent_amount = response.data.data[0].rent_amount;
							self.transaction.transaction_id = response.data.data[0].transaction_id;
						}
						else
						{
							self.success = 0;
						}
					}
					else
					{
						alert("Error in obtaining Status");
					}
					
				})
				.catch((error) => alert(error));
		}
		axios.get("http://127.0.0.1:8000/api/getusertransaction/"+localstore.details.user_id)
				.then(function (response) {
					// console.log(JSON.stringify(response.data));
					if(response.data.status == "SUCCESS")
					{
						self.transactions=response.data.data;
					}
					
				})
				.catch((error) => alert(error));
	},
	methods:{
		openimg:function(event,name){
			console.log(event);
			console.log(name);
			window.open("http://localhost:8000/Receipts/"+name);
		},
		close(){
			console.log("hello");
			this.success=-1;
			this.$router.push('/transactionview');
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

</style>