@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/faculties/store" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="studies_year" class="form-label">Studies_year:</label>
      <input type="number" class="form-control" id="Studies_year" placeholder="Enter Studies_year" name="year">
    </div>
    <div class="mb-3 mt-3">
        <label for="website" class="form-label">Website:</label>
        <input type="text" class="form-control" id="website" placeholder="Enter website" name="website">
      </div>
      {{-- <div class="mb-3 mt-3">
        <label for="logo" class="form-label">Logo:</label>
        <input type="file" class="form-control" id="logo" placeholder="Enter logo" name="logo">
      </div> --}}
      <div class="mb-3 mt-3">
        <label for="hours_count" class="form-label">Hours_count:</label>
        <input type="number" class="form-control" id="hours_count" placeholder="Enter hours_count" name="hours_count">
      </div>
      <div class="mb-3 mt-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
      </div>
      <div class="mb-3 mt-3">
        <label for="mat_counts" class="form-label">Mat_counts:</label>
        <input type="number" class="form-control" id="mat_counts" placeholder="Enter mat_counts" name="mat_counts">
      </div>
      {{-- <div class="mb-3 mt-3">
        <label for="location_id" class="form-label">Location_id:</label>
        <input type="number" class="form-control" id="location_id" placeholder="Enter location_id" name="location_id">
      </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


  {{-- $table->string('logo')->nullable();
   $table->bigInteger('location_id');--}}

</div>
@endsection
