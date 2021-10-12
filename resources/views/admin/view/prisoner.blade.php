@extends('admin.admin_master')

@section('admin_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View And update <span style="color:#6875f5">Prisoner</span></h2>
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
    <form action="{{ url('prisoner/update/'.$details->id) }}" method="POST">
    @csrf
    <div class="mb-3">
    <img src="{{ asset($details->prisoner_image) }}" class="rounded float-end" name="old_image" id="old_image" width="100px" height="150px" style="float: right;">
    </div>
    <div class="mb-3">
    <label for="image" class="form-label">Update Image</label>
    <input type="file" class="form-control" id="image" name="image" aria-describedby="image" value="{{ $details->image }}">
</div>
  <div class="mb-3">
  <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ $details->name }}">
    </div>
    @error('name')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="{{ $details->email }}">
    </div>
    @error('email')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="text" class="form-control" id="gender" name="gender" aria-describedby="relation" value="{{ $details->gender }}">
    </div>
    @error('gender')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="text" class="form-control" id="age" name="age" aria-describedby="age" value="{{ $details->age }}">
    </div>
    @error('age')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="Blood_g" class="form-label">Blood Group</label>
    <input type="text" class="form-control" id="Blood_g" name="Blood_g" aria-describedby="Blood_g" value="{{ $details->Blood_g }}">
    </div>
    @error('Blood_g')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="height" class="form-label">Height</label>
    <input type="text" class="form-control" id="height" name="height" aria-describedby="age" value="{{ $details->height }}">
    </div>
    @error('height')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="weight" class="form-label">Weight</label>
    <input type="text" class="form-control" id="weight" name="weight" aria-describedby="weight" value="{{ $details->weight }}">
    </div>
    @error('weight')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="punishment" class="form-label">Punishment</label>
    <input type="text" class="form-control" id="punishment" name="punishment" aria-describedby="punishment" value="{{ $details->punishment }}">
    </div>
    @error('punishment')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" aria-describedby="address" value="{{ $details->address }}">
    </div>
    @error('address')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="prison_cell" class="form-label">Prison cell</label>
    <input type="text" class="form-control" id="prison_cell" name="prison_cell" aria-describedby="prison_cell" value="{{ $details->prison_cell }}">
    </div>
    @error('prison_cell')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <input type="text" class="form-control" id="status" name="status" aria-describedby="status" value="{{ $details->status }}">
    </div>
    @error('status')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="prisoner_id" class="form-label">Prisoner ID</label>
    <input type="text" class="form-control" id="prisoner_id" name="prisoner_id" aria-describedby="status" value="{{ $details->prisoner_id }}">
    </div>
    @error('prisoner_id')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror<br>

<button type="submit" class="btn text-white" style="border-radius: 25px; background-color:#faa307">Update Prisoner</button>
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
