<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="utf-8">
	<title>PayMatrix</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
	body { margin: 0; padding: 0; background: #fff; }
	div, p, a, li, td { -webkit-text-size-adjust: none; }
	.ReadMsgBody { width: 100%; background-color: #ffffff; }
	.ExternalClass { width: 100%; background-color: #ffffff; }
	body { width: 100%; height: 100%; background-color: #fff; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
	html { width: 100%; }
	p { padding: 0 !important; margin-top: 0 !important; margin-right: 0 !important; margin-bottom: 0 !important; margin-left: 0 !important; }
	.visibleMobile { display: none; }
	.hiddenMobile { display: block; }

	@media only screen and (max-width: 600px) {
		body { width: auto !important; }
		table[class=fullTable] { width: 96% !important; clear: both; }
		table[class=fullPadding] { width: 85% !important; clear: both; }
		table[class=col] { width: 45% !important; }
		.erase { display: none; }
	}

	@media only screen and (max-width: 420px) {
		table[class=fullTable] { width: 100% !important; clear: both; }
		table[class=fullPadding] { width: 85% !important; clear: both; }
		table[class=col] { width: 100% !important; clear: both; }
		table[class=col] td { text-align: left !important; }
		.erase { display: none; font-size: 0; max-height: 0; line-height: 0; padding: 0; }
		.visibleMobile { display: block !important; }
		.hiddenMobile { display: none !important; }
	}
</style>
</head>

<body>

	<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#fff">
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td>
				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
					<tr>
						<td>
							<table width="520" border="0" cellpadding="0" cellspacing="0" align="left" class="fullPadding">
								<tbody>
									<tr>
										<td>
											<table width="100%">
												<tr>
													<td height="10"></td>
												</tr>
												<tr align="center">
													<td  style="font-size: 18px; color: #0071bc; font-family: 'Source Sans Pro', sans-serif;">
														<h3 style="margin-bottom: 10px">Rent Receipt</h3></td>
													</tr>
													<tr>
														<td height="5"></td>
													</tr>
													<tr>
														<th style="font-family: 'Source Sans Pro', sans-serif;width: 49%">
															<span style="color: #000;font-size: 15px;">Employee id - {{$info['user_id']}}</span>
														</th>
														<th align="right" style="font-family: 'Source Sans Pro', sans-serif;width: 48%">
															<strong><span style="color: #333333;">Receipt no. <span style="font-size: 15px;color: #0071bc;">#1</span></span></strong>
														</th>
													</tr>
													<tr>
														<th style="line-height: 20px;font-family: 'Source Sans Pro', sans-serif;width: 98%;">
															
															<span style="color: #333333;">An amount of <strong style="color: #000;">
															@php ($sum = 0)
															@foreach($transaction as $item)
															@php ($sum += $item->rent_amount)
															@endforeach
															{{$sum}}
															</strong> has been paid by <strong style="color: #000;">{{$info['tenantname']}}</strong> as Rent to <strong style="color: #000;">{{$info['landlordname']}}</strong> during the period MAR {{explode('-',$info['stdate'])[1]}} - APR {{explode('-',$info['endate'])[1]}} for the Property as below.</span>
														</th>
													</tr>
												</table>
											</td>
										</tr>
										<tr><td></td></tr>
										<tr>
											<td style="font-size: 11px; color: #333333; font-family: 'Open Sans', sans-serif; line-height: 18px;padding: 5px; vertical-align: top; " width="48%">
												<div style=" float:left;padding-left:50px;">
													<span style="float:left;font-size:14px;color: #e88d14;line-height: 20px;">Tenant Details</span><br>
													<span style="float:left;font-size:10px;color: #333333;">{{$info['tenantname']}}</span><br>
													<span style="float:left;font-size:10px;color: #333333;">{{$info['tenantemail']}}</span><br>
													<span style="float:left;font-size:10px;color: #333333;">{{$info['tenantphone']}}</span>
												</div>
											</td>
											<td align="right" style="font-size: 11px; color: #333333; font-family: 'Open Sans', sans-serif; line-height: 18px;padding: 5px; vertical-align: top; " width="50%">
												<div style=" float:left;padding-left:50px;">
													<span style="float:left;font-size:14px;color: #e88d14;line-height: 20px;">Landlord Details</span><br>
													<span style="float:left;font-size:10px;color: #333333;">{{$info['landlordname']}}</span><br>
													<span style="float:left;font-size:10px;color: #333333;">{{$info['landlordemail']}}</span><br>
													<span style="float:left;font-size:10px;color: #333333;">{{$info['landlordpan']}}</span>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br>
		<!-- /Header -->
		<!-- Order Details -->


		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#fff">
			<tbody>
				<tr>
					<td>
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
							<tbody>
								<tr align="left">
									<td style="line-height: 20px;">
										<span style="color: #e88d14;font-size: 14px;font-weight: 200;font-family: 'Open Sans', sans-serif;">Property Details:</span>
									</td>
								</tr>
								<tr>
									<td>
										<table width="520" border="0"  cellpadding="0" cellspacing="0" align="left" class="fullPadding" style=" border-collapse: collapse;">
											<tbody>
												<tr>
													<th style="font-size:10px;font-family: 'Open Sans', sans-serif;font-weight: 300;">
														{{$property['name']}},{{$property['door_number']}},{{$property['society']}},{{$property['area']}},{{$property['city']}},{{$property['state']}},{{$property['pin']}}
													</th>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table><br><br>

		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#fff">
			<tbody>
				<tr>
					<td>
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
							<tbody>
								<tr align="left">
									<td style="line-height: 20px;">
										<span style="color: #e88d14;font-size: 14px;font-weight: 200;font-family: 'Open Sans', sans-serif;">Rent payment details:</span>
									</td>
								</tr>
								<tr>
									<td>
										<table width="520" border="1"  cellpadding="3" cellspacing="0" align="center" class="fullPadding" style=" border-collapse: collapse;">
											<tbody>
												<tr>
													<th style="width:25%;font-family: 'Open Sans', sans-serif;font-weight: 500;font-size: 11px;">Month</th>
													<th style="width:25%;font-family: 'Open Sans', sans-serif;font-weight: 500;font-size: 11px;">Date of Transaction</th>
													<th style="width:25%;font-family: 'Open Sans', sans-serif;font-weight: 500;font-size: 11px;">Transaction ID</th>
													<th style="width:25%;font-family: 'Open Sans', sans-serif;font-weight: 500;font-size: 11px;">Amount in Rs</th>
												</tr>
												
                                                 @foreach($transaction as $item)
                                                <tr>
                                                    <td style="font-size: 9px;color: #555555;">{{$item->rent_month}}</td>
													<td style="font-size: 9px;color: #555555;">{{$item->date}}</td>
													<td style="font-size: 9px;color: #555555;">{{$item->transaction_id}}</td>
													<td style="font-size: 9px;color: #555555;">{{$item->rent_amount}}</td>
                                                </tr>
                                                @endforeach

											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table><br>
		

		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#fff">
			<tbody>
				<tr>
					<td>
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
							<tbody>
								<tr>
									<td>

										<!-- Table Total -->
										<table width="520" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
											<tbody>
												<tr>
													<td height="2"></td>
												</tr>
												<tr style="margin-top: 5px;">
													<td style="font-size: 11px;line-height: 20px; font-family: 'Open Sans', sans-serif; color: #333333;  text-align:left;" width="100%">
														The above rent payments are made by me on Paymatrix and the same shared to employer for requisite Tax exemption under <strong style="color: #000;">Section 10(13A)</strong> of the Income Tax Act, 1961. 
													</td>
												</tr><br>
												<tr style="margin-top: 5px;">
													<td style="font-size: 12px;line-height: 20px; font-family: 'Open Sans', sans-serif; color: #000000;  text-align:left;" width="96%">
														<strong style="font-weight: 600;">Regards</strong>
													</td>
												</tr>
												<tr style="margin-top: 5px;">
													<td style="font-size: 10px;line-height: 20px; font-family: 'Open Sans', sans-serif; color: #333333;  text-align:left;" width="96%">
														Ramu Bonkuri
													</td>
												</tr>
												<tr style="margin-top: 5px;">
													<td style="font-size: 10px;line-height: 20px; font-family: 'Open Sans', sans-serif; color: #333333;  text-align:left;" width="96%">
													67854
													</td>
												</tr>
												<tr style="margin-top: 5px;">
													<td style="font-size: 10px;line-height: 20px; font-family: 'Open Sans', sans-serif; color: #333333;  text-align:left;" width="96%">
													ramubonkuri@paymatrix.co.in
													</td>
												</tr>
												<tr style="margin-top: 5px;">
													<td style="font-size: 10px;line-height: 20px; font-family: 'Open Sans', sans-serif; color: #333333;  text-align:left;" width="96%">
													9985004737
													</td>
												</tr>
											</tbody>
										</table>
										<!-- /Table Total -->

									</td>
								</tr>
							</tbody>
						</table>

					</td>
				</tr>
			</tbody>
		</table>
<br pagebreak="true"/>




		<!-- /Information -->

	</td>
</tr>


</table>
</td>
</tr>

</table>
</tbody>


</table>
</body>
</html>
