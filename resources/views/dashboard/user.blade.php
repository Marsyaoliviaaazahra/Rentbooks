@extends('layouts.master')

@section('title', 'user')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>No.hp</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach($data as $dt)
        <tr>       
          <td>{{$i++}}</td>
          <td>{{$dt->name}}</td>
          <td>{{$dt->email}}</td>
          <td>{{$dt->no_hp}}</td>
          <td>{{$dt->address}}</td> 
          <td>
          <form action="" method="post">
            <button type="submit" class="btn btn-outline-success">Edit</button>
            @csrf
          </form>
          
          <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete</button>
          </form>
          </td>     
        </tr>
        @endforeach
    </tbody>
</table>
@endsection