<table border="1">  
	<tr style="background-color:#FFA500; color:#fff; font-size:12px;">
		<th align="center" style="width: 10%;"><b>Number</b></th>
		<th align="center" style="width: 10%;"><b>NIP</b></th>
		<th align="center" style="width: 15%;"><b>Name</b></th>
		<th align="center" style="width: 15%;"><b>Phone Number</b></th>
		<th align="center" style="width: 10%;"><b>Gender</b></th>
		<th align="center" style="width: 10%;"><b>Place Of Birth</b></th>
		<th align="center" style="width: 15%;"><b>Date Of Birth</b></th>
		<th align="center" style="width: 15%;"><b>Address</b></th>
	</tr>
	<?php $no = 1; ?>
	@foreach($teachers as $data)
	<tr>
		<td align="center">{{$no++}}</td>
		<td align="center">{{$data->nip}}</td>
		<td align="center">{{$data->name}}</td>
		<td align="center">{{$data->phone_number}}</td>
		<td align="center">{{$data->gender}}</td>
		<td align="center">{{$data->place_birth}}</td>
		<td align="center">{{$data->date_birth}}</td>
		<td align="center">{{$data->address}}</td>
	</tr>
	@endforeach()
</table>