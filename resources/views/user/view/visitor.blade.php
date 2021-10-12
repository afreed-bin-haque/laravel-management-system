@extends('user.user_master')

@section('user_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View <span style="color:#6875f5">Visitor</span></h2>
  <div class="mb-3">
    <p for="name" class="form-label">Visitor Name: {{ $details->name }}</p>
    </div>
<div class="mb-3">
    <p for="email" class="form-label">Visitor Email: {{ $details->email }}</p>
    </div>
<div class="mb-3">
    <p for="relation" class="form-label">Visitor relation: {{ $details->relation }}</p>
    </div>
<div class="mb-3">
    <p for="gender" class="form-label">Visitor gender: {{ $details->gender }}</p>
    </div>
<div class="mb-3">
    <p for="age" class="form-label">Visitor age: {{ $details->age }}</p>
    </div>
<div class="mb-3">
    <p for="prisoner_id" class="form-label">Prisoner ID: {{ $details->prisoner_id }}</p>
    </div>
<div class="mb-3">
    <p for="no_visit" class="form-label">Total Visits: {{ $details->no_visit }}</p>
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
