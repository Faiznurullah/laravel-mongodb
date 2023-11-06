@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            

            <a href="{{ route('employe.create') }}" class="btn btn-sm btn-primary">Tambah</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Handphone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($employes as $item)
            
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->handphone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                      <a href="{{ route('employe.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="/delete/{{ $item->id }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>


    </div>
</div>
@endsection
