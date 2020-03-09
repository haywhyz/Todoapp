<html>
<head>
<title> todo </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">

</head>
<body>

<h2 class="text-center">Todo APP todo </h2>
<div class="container-fluid">
<table class="table">
<thead>
<th>NAME </th>
<th>DESCRIPTION </th>
<th> STATUS </th>
<th>operation </th>
</thead>
<tr>
@foreach($todos as $todo)
<td> {{ $todo->name }} </td>
<td> {{ $todo->description }} </td>
<td> {{ $todo->completed }} </td>
<td> <a href="{{$todo->id}}" class="btn btn-primary">View</a> </td>
</tr>

@endforeach
</table>
</div>
</body>
</html>