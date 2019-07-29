<template>
<div>
      <div class="header">
          <h4 class="title">Transactions</h4>
        </div>
        <div class="content">
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalsuccess">Modal success</button>
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalfail">Modal Fail</button>
			<br><br>
			<div class="row marzeros">
				<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th class="fon15">Transaction ID</th>
        <th class="fon15">Date</th>
        <th class="fon15">Landlord name</th>
        <th class="fon15">Landlord account number</th>
        <th class="fon15">Amount</th>
        <th class="fon15">Status</th>
		<th class="fon15">HRA Receipt</th>
		<th class="fon15">Invoice</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>14565656</td>
        <td>02-jan-18</td>
        <td>Suraj</td>
        <td>4517882283748877</td>
        <td>30000</td>
        <td>paid</td>
		<td><a>HRA0001</a></td>
		<td><div class="text-center"><a href="" style="background:#0071bc;color:#fff;padding:4px 7px;margin:5px 0px;border-radius:3px;">View</a></div></td>
      </tr>
    </tbody>
  </table>
  </div>
			</div>
		</div>

        
        <!-- success Modal -->
	<div class="modal fade" id="modalsuccess" role="dialog">
		<div class="modal-dialog custmodal-wid">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<div class="text-center"><img src="../../assets/success.png" style="width:135px;margin-bottom: 15px;"></div>
					<div class="text-center">
						<p class="roboto-15 roboto-light clr-gry">Hi Vikram, Congratulations!</p>
						<p class="montserrat-18 montserrat-reg clr-grnn" style="font-family: 'Montserrat', sans-serif;">Cheers! Payment Successful!</p>
						<p class="roboto-15 roboto-light clr-gry">Payment amount&nbsp;:&nbsp;Rs 35000</p>
						<p class="roboto-15 roboto-light clr-gry">Transaction ID&nbsp;:&nbsp;<strong class="font-weigh">152458258752515</strong></p>
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
				<a href="https://paymatrix.in"><div class="text-center"><button type="button" class=" btncontinu" >Submit and continue</button></div></a>
			</div>

		</div>
	</div>
    <!-- success Modal ends -->


    <!-- Failure Modal ends -->
	<div class="modal fade" id="modalfail" role="dialog">
		<div class="modal-dialog custmodal-wid">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<div class="text-center"><img src="../../assets/fail.png" style="width:135px;margin-bottom: 15px;"></div>
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
				<div class="text-center"><button type="button" class=" btnclos"  data-dismiss="modal">Close</button></div>
			</div>

		</div>
	</div>

    <!-- Failure Modal ends -->

    </div>
</template>

<script>
export default {
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.fon15{
	font-size: 15px !important;
	font-weight: 500 !important;
}
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