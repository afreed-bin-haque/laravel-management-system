@extends('admin.admin_master')

@section('admin_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View And update <span style="color:#6875f5">Hospital Record</span></h2>
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
    <form action="{{ url('hospital/update/'.$details->id) }}" method="POST">
    @csrf
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
    <label for="h_stat" class="form-label">Health Status</label>
    <input type="text" class="form-control" id="h_stat" name="h_stat" aria-describedby="hospitalstat" value="{{ $details->h_stat }}">
    </div>
    @error('h_stat')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="disease" class="form-label">Disease</label>
    <input type="text" class="form-control" id="disease" name="disease" aria-describedby="relation" value="{{ $details->disease }}">
    </div>
    @error('disease')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="doctor" class="form-label">Doctor</label>
    <input type="text" class="form-control" id="doctor" name="doctor" aria-describedby="doctor" value="{{ $details->doctor }}">
    </div>
    @error('doctor')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="hospital" class="form-label">Hospital </label>
    <input type="text" class="form-control" id="hospital" name="hospital" aria-describedby="age" value="{{ $details->hospital }}">
    </div>
    @error('hospital')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="last_check" class="form-label">Last Check</label>
    <input type="text" class="form-control" id="last_check" name="last_check" aria-describedby="last_date" data-mask="00/00/0000" value="{{ $details->last_check }}">
    </div>
    @error('last_check')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="next_checkup" class="form-label">Next Checkup</label>
    <input type="text" class="form-control" id="next_checkup" name="next_checkup" aria-describedby="next_checkup" data-mask="00/00/0000" value="{{ $details->next_checkup }}">
    </div>
    @error('next_checkup')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="no_visit" class="form-label">Total Visits</label>
    <input type="number" class="form-control" min="0" max="1000" id="no_visit" name="no_visit" aria-describedby="no_visit" value="{{ $details->no_visit }}">
    </div>
    @error('no_visit')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror<br>

<button type="submit" class="btn text-white" style="border-radius: 25px; background-color:#faa307">Update Health Record</button>
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
