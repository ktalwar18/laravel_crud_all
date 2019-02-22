<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<style>
	table,thead,th,tr,td  
	{
		border-collapse: collapse;
		border : 1px solid black;
		padding-left: 1.5em; 
	}

</style>
	</head>
	<body>
		<br><br>
		<h3><a href="create">Create</a></h3>
		<br>
		<hr>
          
          <table style="width:100%">
          	<thead>
          		<th>Id</th>
          		<th>Name</th>
          		<th>Email</th>
          		<th>Mobile</th>
          		<th>Gender</th>
          		<th>Operating System</th>
          		<th>Show</th>
          		<th>Update</th>
          		<th>Delete</th>
          	</thead>
          	@foreach($user as $users)
          	<tr>
          		<td>{{$users->id}}</td>
          		<td>{{$users->name}}</td>
          		<td>{{$users->email}}</td>
          		<td>{{$users->mobile}}</td>
          		<td>{{$users->gender}}</td>
          		<td>{{$users->os}}</td>
          		<td><a href="show/{{$users->id}}">Show</td>
          		<td><a href="edit/{{$users->id}}">Update</td>
          		<td><a href="delete/{{$users->id}}">Delete</td>
          	</tr>
          	@endforeach
          </table>

	</body>
	</html>