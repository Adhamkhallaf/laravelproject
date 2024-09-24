@extends('layout.app')
@section('content')
<h1 class="text-primary text-center">Welcome at add employees page</h1>
<form method="post" action="{{ route('allemployees.store')}}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Employee name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Employee sallary</label>
        <input type="text" name="sallary" class="form-control" id="exampleInputPassword1">
    </div>

    <button class="btn btn-primary">Send data</button>
</form>

@endsection