@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <form action="{{ route('employe.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Handphone</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="handphone" aria-describedby="emailHelp" placeholder="Enter Number">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp" placeholder="Enter Adress">
                </div>
                
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
            
        </div>
    </div>
</div>
@endsection
