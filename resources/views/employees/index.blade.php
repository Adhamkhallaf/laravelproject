@extends('layout.app')
@section('content')

@if(Session::has('insert_done'))

<div class="alert alert-success" role="alert">
    {{Session::get('insert_done')}}
</div>
@endif
@if(Session::has('delete_done'))

<div class="alert alert-success" role="alert">
    {{Session::get('delete_done')}}
</div>
@endif
@if(Session::has('update_done'))

<div class="alert alert-success" role="alert">
    {{Session::get('update_done')}}
</div>
@endif
<h1 class="text-primary text-center">Welcome at employees page</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">employee id</th>
            <th scope="col">employee name</th>
            <th scope="col">employee sallary</th>
            <th scope="col">employee action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($allemployees as $employee)


        <tr>
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->name}}</td>
            <td>{{$employee->sallary}}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('allemployees.edit',$employee->id)}}">Update</a>


                <!-- <a class="btn btn-danger" href="{{ route('allemployees.destroy',$employee->id)}}">Delete</a> -->
                <form action="{{ route('allemployees.destroy',$employee->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection