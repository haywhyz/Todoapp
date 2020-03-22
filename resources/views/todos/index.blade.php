@extends('layout.app')
@section('content')

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
                  
                   <td> 
                   @if($todo->completed == 0)
                    <a href="/todos/{{$todo->id}}/activate" class="btn btn-success">Activate</a>
                   @else
                    
                   @endif</td> 
                    <td> <a href="/todos/{{$todo->id}}" class="btn btn-primary">View</a> </td>
                </tr>

                @endforeach
            </table>
    </div>
@endsection