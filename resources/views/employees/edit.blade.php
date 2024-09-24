@extends('layout.app')
@section('content')
<h1 class="text-primary text-center">Welcome at edit employees page</h1>
<h1 class="text-info text-center"> employees number {{$employee->id}}</h1>
<form method="post" action="{{ route('allemployees.update',$employee->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Employee name</label>
        <input type="text" value="{{$employee->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Employee sallary</label>
        <input type="text" value="{{$employee->sallary}}" name="sallary" class="form-control" id="exampleInputPassword1">
    </div>

    <button class="btn btn-primary">Send data</button>
</form>

@endsection