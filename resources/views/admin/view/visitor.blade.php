@extends('admin.admin_master')

@section('admin_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View And update <span style="color:#6875f5">Visitor</span></h2>
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
    <form action="{{ url('visitor/update/'.$details->id) }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Visitor Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ $details->name }}">
    </div>
    @error('name')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="email" class="form-label">Visitor Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="name" value="{{ $details->email }}">
    </div>
    @error('email')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="relation" class="form-label">Visitor relation</label>
    <input type="text" class="form-control" id="relation" name="relation" aria-describedby="relation" value="{{ $details->relation }}">
    </div>
    @error('relation')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="gender" class="form-label">Visitor gender</label>
    <input type="text" class="form-control" id="gender" name="gender" aria-describedby="gender" value="{{ $details->gender }}">
    </div>
    @error('gender')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="age" class="form-label">Visitor age</label>
    <input type="text" class="form-control" id="age" name="age" aria-describedby="age" value="{{ $details->age }}">
    </div>
    @error('age')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="prisoner_id" class="form-label">Prisoner ID</label>
    <input type="text" class="form-control" id="prisoner_id" name="prisoner_id" aria-describedby="age" value="{{ $details->prisoner_id }}">
    </div>
    @error('prisoner_id')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="no_visit" class="form-label">Total Visits</label>
    <input type="text" class="form-control" id="no_visit" name="no_visit" aria-describedby="no_visit" value="{{ $details->no_visit }}">
    </div>
    @error('no_visit')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror<br>

<button type="submit" class="btn text-white" style="border-radius: 25px; background-color:#faa307">Update Visitor</button>
  </div>
</form>
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
