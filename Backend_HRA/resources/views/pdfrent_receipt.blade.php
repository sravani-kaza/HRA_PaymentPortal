<!DOCTYPE html>
<html>
<head>
  <title>Paymatrix</title>
</head>
<body>
  <div style="text-align: left;padding: 5px 10px;border: 1px solid #999;margin-bottom: 30px;">
    <h5 align="center" style="font-size: 19px;color: #222222;font-family: 'Source Sans Pro', sans-serif;margin: 3px;"><strong>RENT RECEIPT</strong></h5>
    <table width="100%">
      <tr>
        <th align="left" style="font-size: 12px;font-family: 'Source Sans Pro', sans-serif;font-weight: 300;width: 50%;">Receipt No:&nbsp;<span style="color: #0071bc;">{{$variable->transaction_id}}</span></th>
        <th align="right" style="text-align: right;font-size: 12px;font-family: 'Source Sans Pro', sans-serif;font-weight: 300;width: 50%;">Date:&nbsp;<span style="color: #0071bc;">{{$variable->date}}</span></th>
      </tr>
    </table>
    <table width="100%" style="margin: 10px 0px;line-height: 20px;">
      <tr>
        
        <td style="font-size: 14px;font-family: 'Source Sans Pro', sans-serif;font-weight: 200;width: 50%;color: #777777;">Received sum of INR <strong style="color: #000;">Rs. {{$variable->rent_amount}}</strong> from <strong style="color: #000;">{{$variable->tenant_name}}</strong> towards the rent of property located at <strong style="color: #000;">{{$variable->door_number}} {{$variable->society}} {{$variable->area}},{{$variable->city}} {{$variable->state}} {{$variable->pin}}</strong> for the month <strong style="color: #000;">&nbsp;{{$variable->rent_month}}</strong>
        </td>
      </tr>
    </table>
    <table width="100%" style="margin: 10px 0px 20px;line-height: 20px;">
      <tr>
        <td style="font-size: 10px;font-family: 'Source Sans Pro', sans-serif;width: 50%;color: #777777;">(Affix Revenue Stamp of Rs.1/-)</td>
      </tr>
    </table>
     <table width="100%" style="margin: 10px 0px 0px;line-height: 20px;">
      <tr>
        <td style="font-size: 13px;font-family: 'Source Sans Pro', sans-serif;width: 50%;color: #777777;"><strong style="color: #000;">{{$variable->tenant_name}}</strong> (Signature)</td>
      </tr>
    </table>
     <table align="right" width="100%" style="margin: 0px 0px 10px;line-height: 20px;">
      <tr align="right">
        <td align="right" style="font-size: 12px;font-family: 'Source Sans Pro', sans-serif;width: 50%;color: #777777;"><span style="font-size: 11px;">*&nbsp;T&nbsp;&&nbsp;C &nbsp; Apply</span>&nbsp;&nbsp;www.paymatrix.in</td>
      </tr>
    </table>
  </div>
</body>
</html>
