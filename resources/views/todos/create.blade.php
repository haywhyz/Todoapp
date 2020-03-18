@extends('layout.app')
@section('content')

<h2 class="text-center">Create new Todo </h2>
        <div class="container-fluid">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item">
                            {{$error}}
                            </li>
                        @endforeach
                        </ul>
                    </div>
                    @endif

            <form action="/store-todos" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Description </label>
                    <textarea class="form-control" name="description">  </textarea>
                </div>
                <div class="form-group">
                <button type="submit" class=" form-control btn btn-success" > Submit </button>
                </div>
            </form>

</div>

@endsection