<html>
<head>
<title> todo list </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">

</head>
<body>

<h2 class="text-center">Todo APP todo </h2>
<div class="container-fluid">
        <div class="text-center my-5">
                    <div>  {{ $todos->name }} </div>
                            <div class="card-default">
                                <div class="card-body col-6">
                                    <div class="card-title"><h2> title </h2></div>
                                    {{ $todos->description }}
                                </div>
                            </div>

        </div>

</div>
</body>
</html>