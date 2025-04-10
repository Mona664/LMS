@extends('layouts.app')

@section('content')
<h1 class="text-center">Edit Mat</h1>
<div class="container">
   <form action="/mat/update/{{$mat->id}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text"  value="{{$mat->name}}"
       class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="hours_count" class="form-label">Hours_count</label>
      <input type="number" value="{{$mat->hours_count}}"
       class="form-control" id="hours_count" placeholder="Enter hours_count" name="hours_count">
    </div>

      <div class="mb-3 mt-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" value="{{$mat->description}}"
        class="form-control" id="description" placeholder="Enter description" name="description">
      </div>
      <div class="mb-3 mt-3">
        <label for="year" class="form-label">Year</label>
        <input type="number" value="{{$mat->year}}"
        class="form-control" id="year" placeholder="Enter year" name="year">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</div>
@endsection
