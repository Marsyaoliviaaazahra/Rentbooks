@extends('layouts.user')

@section('title', 'Dashboard')
@section('content')



<div class="container mt-4 mb-2">
    
    <div class="content-book">
        <div class="row text">
            <h4>Welcome back, <u>{{Auth::user()->name}}!</u></h4>
        </div>  
        <div class="row d-flex p-5">
        @foreach($data as $book)
            <div class="col-sm-3 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/' .$book->image)}}" style="min-height:400px; max-height:400px; width:100%; object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">{{$book->writer}}</p>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            
                </div>
            </div>
        @endforeach
        </div>
    </div>

@endsection

