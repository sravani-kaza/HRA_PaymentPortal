<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <title>PayMatrix</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
  body { margin: 0; padding: 0; background: #e1e1e1; }
  div, p, a, li, td { -webkit-text-size-adjust: none; }
  .ReadMsgBody { width: 100%; background-color: #ffffff; }
  .ExternalClass { width: 100%; background-color: #ffffff; }
  body { width: 100%; height: 100%; background-color: #e1e1e1; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
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
  <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
          <tr class="hiddenMobile">
            <td height="25"></td>
          </tr>
          <tr class="visibleMobile">
            <td height="10"></td>
          </tr>

          <tr>
            <td>
              <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                <tbody>
                  <tr>
                    <td>
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                        <tbody>
                          <tr>
                            <td align="left" width="45%"> <img src="https://paymatrix.in/application/static/images/invoice_logo.png" width="200px" height="auto" alt="logo" border="0" /></td>
                            <!-- <td align="left" width="45%"><h3 style="color:#000;display: inline;    font-family: 'Open Sans', sans-serif;">Paymatrix</h3><small style="vertical-align: super;font-size: 8px;font-family: 'Open Sans', sans-serif;">TM</small> </td> -->

                            <td style="font-size: 21px; color: #EE7029; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right; padding-top: 17px;" width="45%">
                              Receipt
                            </td>
                          </tr>
                          <tr class="hiddenMobile">
                            <td height="10"></td>
                          </tr>
                          <tr>
                            <td style=" font-size: 12px; color:#5b5b5b;  font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align:left;" width="45%">Transaction ID: {{ $variable->transaction_id }}</td>

                            <td style=" font-size: 12px; color:#5b5b5b;  font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;" width="45%">
                              {{ $variable->date }}
                            </td>
                          </tr>
                        <!-- <tr class="hiddenMobile">
                          <td height="10"></td>
                        </tr> -->
                      </tbody>
                    </table>
                    <tr class="visibleMobile">
                      <td height="20"></td>
                    </tr>

                    <table width="100%">


                     <tr>
                      <td style="font-size: 10px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 20px;padding: 5px; vertical-align: top; ">
                       <div style="width:250px; float:left;padding-left:50px;">
                        <span style="font-size:12px; color:#EE7029;"><strong>Tenant Details</strong></span><br>
                        <span style="float:left;font-size:11px;">{{$variable->tenant_name}}</span><br>
                        <span style="float:left;font-size:11px;overflow-wrap: break-word;max-width: 250px;">{{$variable->tenant_address}}</span><br>
                        <span style="float:left;font-size:11px;">sanjay.sahu@gmail.com</span><br>
                        <span style="float:left;font-size:11px;">{{$variable->tenant_phone}}</span><br>
                      </div>
                    </td>
                    <td style="font-size: 10px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 20px;padding: 5px; vertical-align: top; text-align:right;">
                      <div style="width:200px;float:right;padding-right:50px;">
                        <span style="font-size:12px; color:#EE7029;"><strong>Landlord Details</strong></span><br>
                        <span style="font-size:11px;">{{$variable->landlord_name}}</span><br>
                        <span style="font-size:11px;">aravind@gmail.com</span><br>
                        <span style="font-size:11px;">{{$variable->landlord_phone}}</span><br>
                      </div>
                    </td>
                  </tr>  
                </table>
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
<!-- /Header -->
<!-- Order Details -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
          <tbody>
            <tr>
              <tr class="hiddenMobile">
                <td height="10"></td>
              </tr>
              <tr>
                
                <td style=" color:#EE7029;  font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align:center;">Rent &nbsp;&nbsp;Rs.  {{$variable->rent_amount}}</td>
              </tr>
            <!-- <tr class="hiddenMobile">
              <td height="8"></td>
            </tr> -->
            <tr class="visibleMobile">
              <td height="20"></td>
            </tr>
            
            <tr>
              <td>
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;" width="88%" align="left">
                        Amount Type
                      </th>
                      
                      <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px; float:right;" align="right">
                        <!-- Subtotal -->
                      </th>
                    </tr>
                    <tr>
                      <td height="1" style="background: #bebebe;" colspan="4"></td>
                    </tr>
                    <!--<tr>
                      <td height="10" colspan="4"></td>
                    </tr>-->
                    <tr>
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #333;  line-height: 18px;  vertical-align: top; padding:5px 0;" class="article">
                        + &nbsp;{{$variable->mode_of_payment}}
                      </td>
                      
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:5px 0;" align="right">Rs. {{$variable->rent_amount}}</td>
                    </tr>
                    <!-- <tr>
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #333;  line-height: 18px;  vertical-align: top; padding:5px 0;" class="article">
                        + &nbsp;Other Amount
                      </td>
                      
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:5px 0;" align="right">Rs.</td>
                    </tr> -->
                    <tr>
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #333;  line-height: 18px;  vertical-align: top; padding:5px 0;" class="article">
                        - &nbsp; Reward Balance
                      </td>
                      
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:5px 0;" align="right">Rs. 0</td>
                    </tr>
                    <tr>
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #333;  line-height: 18px;  vertical-align: top; padding:5px 0;" class="article">
                        - &nbsp; Discount
                      </td>
                      
                      <td style="font-size: 10px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:5px 0;" align="right">Rs. 0</td>
                    </tr>
                    <tr>
                      <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                    </tr>
                    <tr>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #333;  line-height: 18px;  vertical-align: top; padding:5px 0;" class="article">&nbsp; &nbsp;  Subtotal</td>

                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:5px 0;" align="right">Rs. {{$variable->rent_amount}}</td>
                    </tr>
                
                    <tr>
                      <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<!-- /Order Details -->
<!-- Total -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
          <tbody>
            <tr>
              <td>

                <!-- Table Total -->
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                        Convenience Fee
                      </td>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;" width="80">
                        Rs. 10
                      </td>
                    </tr>
                    <tr>
                      <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                       GST ( 18.0% )
                     </td>
                     <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                      Rs. 1.8
                    </td>
                  </tr>
                    <!-- <tr>
                      <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                         Service Tax ( 14.0% )
                      </td>
                      <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                        Rs. 
                      </td>
                    </tr>
                    <tr>
                      <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                         Swachh Bharat cess ( 0.5% )
                      </td>
                      <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                        Rs. 
                      </td>
                    </tr>
                    <tr>
                      <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                        Krishi Kalyan cess ( 0.5% )
                      </td>
                      <td style="font-size: 8px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                        Rs. 
                      </td>
                    </tr> -->
                    <tr>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                        <strong>Grand Total (Incl.Tax)</strong>
                      </td>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                        <strong>Rs. 10011.80</strong>
                      </td>
                    </tr>
                    

                    
                  </tbody>
                </table>
                <!-- /Table Total -->

              </td>
            </tr>
            <tr class="hiddenMobile">
              <td height="20"></td>
            </tr>

            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
              <tbody>
               <tr>
                <td height="10"></td>
              </tr>
              
              <tr>
                <td height="10"></td>
              </tr>
              <tr>
                <td  style="text-align:center;font-size: 16px;font-family:sans-serif;color: #818181;">
                  <h5 style="font-weight: 400;">Reach us at <a style="color: #EE7029;" href="mailto><!--  / +91-7305145146 --></h5>
                </td>
              </tr>
              <tr>
                <td height="10"></td>
              </tr>
              <tr>
                <td  style="text-align:center;font-size: 11px;color: #616161;">
                  <p style="padding-bottom: 5px !important;font-family: 'Open Sans', sans-serif;font-size: 10px;line-height: 30px;">Paymatrix<sup>TM</sup> is India's Leading Property Rental Management Platform and is a registered trademark of </p>
                </td>
              </tr>
              <tr>
                <td height="10"></td>
              </tr>
              <tr>
                <td style="text-align:center;font-size: 12px;color: #616161;">
                 <p style="padding-bottom: 5px !important;line-height: 15px;font-family: 'Open Sans', sans-serif;font-size: 11px;"> <b >SPECKLE INTERNET SOLUTIONS PRIVATE LIMITED</b></p>
               </td>
             </tr>
             <tr>
              <td height="5"></td>
            </tr>
             <tr>
              <td  style="text-align:center;font-size: 13px;color: #616161;">
                <p style="padding-bottom: 10px !important;font-family: 'Open Sans', sans-serif;font-size: 12px;color: #616161;">GSTIN:36AAVCS5938D2ZS</p>
              </td>
            </tr>
            
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td height="1" colspan="4" style="border-bottom:3px solid #e4e4e4"></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td  style="text-align:right;font-size: 16px;font-family: 'Open Sans', sans-serif;">
                <h5 style="font-weight: 300;font-size: 16px;"><a style="font-size:14px;color: #EE7029;text-decoration: none;" href="https://paymatrix.in/">www.paymatrix.in</a></h5>
              </td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
          <!-- <tr>
            <td  style="text-align:center;font-size: 16px;font-family: 'Open Sans', sans-serif;">
              <h5 style="font-weight: 300;font-size: 16px;"><a style="font-size:14px;color: #EE7029;text-decoration: none;" href="https://paymatrix.in/">www.paymatrix.in</a></h5>
            </td>
          </tr> -->
          <tr class="hiddenMobile">
            <td height="25"></td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
</tbody>
</table>
<!-- /Total -->
<!-- Information Production-->





<!-- /Information -->

</td>
</tr>



</table>
</td>
</tr>
<tr>
  <td height="20"></td>
</tr>
</table>
</body>
</html>
