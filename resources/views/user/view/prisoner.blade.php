@extends('user.user_master')

@section('user_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View <span style="color:#6875f5">Prisoner</span></h2>
    <div class="mb-3">
        <img src="{{ asset($details->prisoner_image) }}" class="rounded float-end" name="old_image" id="old_image" width="100px" height="150px" style="border-style: double; float: right;">
  </div>
  <div class="mb-3">
  <p class="form-label">Name: {{ $details->name }}</p>
    </div>
<div class="mb-3">
    <p for="email" class="form-label">Email: {{ $details->email }}</p>
    </div>
<div class="mb-3">
    <p for="gender" class="form-label">Gender: {{ $details->gender }}</p>
    </div>
<div class="mb-3">
    <p for="age" class="form-label">Age: {{ $details->age }}</p>
    </div>
<div class="mb-3">
    <p for="Blood_g" class="form-label">Blood Group: {{ $details->Blood_g }}</p>
    </div>
<div class="mb-3">
    <p for="height" class="form-label">Height: {{ $details->height }}</p>
    </div>
<div class="mb-3">
    <p for="weight" class="form-label">Weight: {{ $details->weight }}</p>
    </div>
<div class="mb-3">
    <p for="punishment" class="form-label">Punishment: {{ $details->punishment }}</p>
    </div>
<div class="mb-3">
    <p for="address" class="form-label">Address: {{ $details->address }}</p>
    </div>
<div class="mb-3">
    <p for="prison_cell" class="form-label">Prison cell: {{ $details->prison_cell }}</p>
    </div>
<div class="mb-3">
    <p for="status" class="form-label">Status: {{ $details->status }}</p>
    </div>
<div class="mb-3">
    <p for="prisoner_id" class="form-label">Prisoner ID: {{ $details->prisoner_id }}</p>
    </div><br>
<button type="btn" class="btn text-white" style="border-radius: 25px; background-color:#381739" onclick="goBack()">Go Back To the previous page</button>
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>
@endsection
