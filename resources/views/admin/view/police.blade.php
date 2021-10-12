@extends('admin.admin_master')

@section('admin_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View And update <span style="color:#6875f5">Police Details</span></h2>
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
    <form action="{{ url('police/update/'.$details->id) }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="rank" class="form-label">Police Rank</label>
    <input type="text" class="form-control" id="rank" name="rank" aria-describedby="rank" value="{{ $details->rank }}">
    </div>
    @error('rank')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="name" class="form-label">Name:</label>
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
    <input type="text" class="form-control" id="doctor" name="gender" aria-describedby="gender" value="{{ $details->gender }}">
    </div>
    @error('gender')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="polic_station" class="form-label">Police Station</label>
    <input type="text" class="form-control" id="polic_station" name="polic_station" aria-describedby="policstation" value="{{ $details->polic_station }}">
    </div>
    @error('polic_station')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="text" class="form-control" id="age" name="age" aria-describedby="age"  value="{{ $details->age }}">
    </div>
    @error('age')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="blood_g" class="form-label">Blood Group</label>
    <input type="text" class="form-control" id="blood_g" name="blood_g" aria-describedby="blood_g"  value="{{ $details->blood_g }}">
    </div>
    @error('blood_g')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="duty_t" class="form-label">Duty Time</label>
    <input type="text" class="form-control"  id="duty_t" name="duty_t" aria-describedby="duty_t" value="{{ $details->duty_t }}">
    </div>
    @error('duty_t')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="join_d" class="form-label">Join Date</label>
    <input type="text" class="form-control"  id="join_d" name="join_d" data-mask="00/00/0000" aria-describedby="duty_t" value="{{ $details->join_d }}">
    </div>
    @error('join_d')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="position_p" class="form-label">Position In Prison</label>
    <input type="text" class="form-control"  id="position_p" name="position_p" " aria-describedby="position_p" value="{{ $details->position_p }}">
    </div>
    @error('position_p')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror<br>

<button type="submit" class="btn text-white" style="border-radius: 25px; background-color:#236A60">Update Police Details</button>
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
