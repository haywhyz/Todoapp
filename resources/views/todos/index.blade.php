<html>
<head>
<title> todo </title>
</head>
<body>

<h2>Todo APP todo </h2>
<table>
<thead>
<th>NAME </th>
<th>DESCRIPTION </th>
<th> STATUS </th>
</thead>
<tr>
@foreach($todos as $todo)
<td> {{ $todo->name }} </td>
<td> {{ $todo->description }} </td>
<td> {{ $todo->completed }} </td>
</tr>


@endforeach
</body>
</html>