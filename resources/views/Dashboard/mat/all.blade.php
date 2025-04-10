@extends('layouts.app')

@section('content')
<div class="container">

  <!-- All Faculties table-->
  <div class="container mt-3">
    <h2 class="text-center">{{ $title }}</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>hours_count</th>
          <th>year</th>
          <th>Description</th>
          <th>Control</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($mat as $one )
        <tr>
          <td>{{$one->id}}</td>
          <td>{{$one->name}}</td>
          <td>{{$one->hours_count}}</td>
          <td>{{$one->year}}</td>
          <td>{{$one->description}}</td>
          <td>
            <a type="button" href="/mat/edit/{{ $one->id }}" class="btn btn-success">Edit</a>
            <a type="button" href="/mat/delete/{{ $one->id }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>

    </table>
  </div>
</div>
@endsection
