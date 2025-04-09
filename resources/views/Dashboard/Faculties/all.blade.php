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
          <th>Studies Year</th>
          <th>Website</th>
          <th>Description</th>
          <th>Control</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($faculties as $one )
        <tr>
          <td>{{$one->id}}</td>
          <td>{{$one->name}}</td>
          <td>{{$one->studies_year}}</td>
          <td>{{$one->website}}</td>
          <td>{{$one->description}}</td>
          <td>
            <a type="button" href="/faculties/edit/{{ $one->id }}" class="btn btn-success">Edit</a>
            <a type="button" href="/faculties/delete/{{ $one->id }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>

    </table>
  </div>
</div>
@endsection
