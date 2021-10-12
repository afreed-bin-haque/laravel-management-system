@extends('user.user_master')

@section('user_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View <span style="color:#6875f5">Crime Record</span></h2>
    @if(session('success'))
  <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>
  <div class="text-center">
    <strong>{{ session('success') }}</strong>
    <span class="float-left"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></span>
  </div>
 </div>
 @endif
  <div class="mb-3">
    <label for="prisioner_id" class="form-label">Prisoner ID</label>
    <input type="text" class="form-control" id="prisioner_id" name="prisioner_id" aria-describedby="prisionerid" value="{{ $details->prisioner_id }}" readonly>
    </div>
    @error('prisioner_id')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="case_id" class="form-label">Case ID</label>
    <input type="text" class="form-control" id="case_id" name="case_id" aria-describedby="case_id" value="{{ $details->case_id }}" readonly>
    </div>
    @error('case_id')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="crime_code" class="form-label">Crime Code</label>
    <input type="text" class="form-control" id="crime_code" name="crime_code" aria-describedby="crime_code" value="{{ $details->crime_code }}" readonly>
    </div>
    @error('crime_code')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" aria-describedby="author" value="{{ $details->author }}"readonly>
    </div>
    @error('author')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="case_type" class="form-label">Case Type</label>
    <input type="text" class="form-control" id="case_type" name="case_type" aria-describedby="case_type" value="{{ $details->case_type }}"readonly>
    </div>
    @error('case_type')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="description" value="{{ $details->description }}"readonly>
    </div>
    @error('description')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="laywer_name" class="form-label">Lawyer Name </label>
    <input type="text" class="form-control" id="laywer_name" name="laywer_name" aria-describedby="age" value="{{ $details->laywer_name }}"readonly>
    </div>
    @error('laywer_name')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="judge_name" class="form-label">Judge's Name </label>
    <input type="text" class="form-control" id="judge_name" name="judge_name" aria-describedby="judge_name" value="{{ $details->judge_name }}"readonly>
    </div>
    @error('judge_name')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="{{ $details->email }}"readonly>
    </div>
    @error('email')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror<br>

  </div>
<button type="btn" class="btn text-white" style="border-radius: 25px; background-color:#381739" onclick="goBack()">Go Back To the previous page</button>
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
