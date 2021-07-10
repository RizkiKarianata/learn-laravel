<table border="1">  
	<tr style="background-color:#FFA500; color:#fff; font-size:12px;">
		<th align="center" style="width: 10%;"><b>Number</b></th>
		<th align="center" style="width: 15%;"><b>NIS</b></th>
		<th align="center" style="width: 20%;"><b>Class</b></th>
		<th align="center" style="width: 20%;"><b>Name</b></th>
		<th align="center" style="width: 20%;"><b>Phone Number</b></th>
		<th align="center" style="width: 15%;"><b>Gender</b></th>
	</tr>
	<?php $no = 1; ?>
	@foreach($students as $data)
	<tr>
		<td align="center">{{$no++}}</td>
		<td align="center">{{$data->nis}}</td>
		<td align="center">{{$data->classesName}}</td>
		<td align="center">{{$data->name}}</td>
		<td align="center">{{$data->phone_number}}</td>
		<td align="center">{{$data->gender}}</td>
	</tr>
	@endforeach()
</table>