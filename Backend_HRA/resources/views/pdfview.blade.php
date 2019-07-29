<!DOCTYPE html>
<html>
<head>
	<title>User list - PDF</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<!-- <a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a> -->
	<table class="table table-bordered">
		<thead>
			<th>Transaction ID</th>
			<th>Amount</th>
		</thead>
		<!-- <tbody>
			@foreach ($transaction as $key => $value)
			<tr>
				<td>{{ $value->transaction_id }}</td>
				<td>{{ $value->rent_amount }}</td>
			</tr>
			@endforeach
		</tbody> -->
	</table>
</div>
</body>
</html>