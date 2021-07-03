<table border="1">  
	<tr style="background-color:#FFA500; color:#fff; font-size:12px;">
		<th align="center" style="width: 10%;"><b>Number</b></th>
		<th align="center" style="width: 90%;"><b>Name</b></th>
	</tr>
	<?php $no = 1; ?>
	@foreach($classes as $data)
	<tr>
		<td align="center">{{$no++}}</td>
		<td align="center">{{$data->name}}</td>
	</tr>
	@endforeach()
</table>