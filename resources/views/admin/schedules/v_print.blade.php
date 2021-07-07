<table border="1">  
	<tr style="background-color:#FFA500; color:#fff; font-size:12px;">
		<th align="center" style="width: 10%;"><b>Number</b></th>
		<th align="center" style="width: 15%;"><b>Teacher</b></th>
		<th align="center" style="width: 15%;"><b>Class</b></th>
		<th align="center" style="width: 15%;"><b>Lesson</b></th>
		<th align="center" style="width: 15%;"><b>Day</b></th>
		<th align="center" style="width: 15%;"><b>Start Time</b></th>
		<th align="center" style="width: 15%;"><b>Expiry Time</b></th>
	</tr>
	<?php $no = 1; ?>
	@foreach($schedules as $data)
	<tr>
		<td align="center">{{$no++}}</td>
		<td align="center">{{$data->teachersName}}</td>
		<td align="center">{{$data->classesName}}</td>
		<td align="center">{{$data->lessonsName}}</td>
		<td align="center">{{$data->day}}</td>
		<td align="center">{{$data->start_time}}</td>
		<td align="center">{{$data->expiry_time}}</td>
	</tr>
	@endforeach()
</table>