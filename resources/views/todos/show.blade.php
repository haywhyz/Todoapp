@extends('layout.app')
@section('content')

<h2 class="text-center">View Todo </h2>
<div class="container-fluid">
                <div class="text-center my-5">
                    <h5 class="card-title">{{ $todo->name }}</h5>
                                    <div class="card mt-0">
                                        <div class="card-body ">
                                          {{ $todo->description }}
                                        </div>
                                    </div>
                                    <a href="/todos/{{$todo->id}}/edit" class ="btn btn-info mt-2">Edit </a>
                                    <a href="/todos/{{$todo->id}}/delete" class ="btn btn-danger mt-2">Delete </a>
                                </div>

                 </div>

</div>
@endsection
