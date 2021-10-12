@extends('admin.admin_master')

@section('admin_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View And update <span style="color:#6875f5">Parole</span></h2>
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
    <form action="{{ url('parole/update/'.$details->id) }}" method="POST">
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
    <label for="interviewer" class="form-label">Interviewer</label>
    <input type="text" class="form-control" id="interviewer" name="interviewer" aria-describedby="interviewer" value="{{ $details->interviewer }}">
    </div>
    @error('interviewer')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="hearing" class="form-label">Hearing</label>
    <input type="text" class="form-control" id="hearing" name="hearing" aria-describedby="hearing" value="{{ $details->hearing }}">
    </div>
    @error('hearing')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="remand" class="form-label">Remand</label>
    <input type="text" class="form-control" id="remand" name="remand" aria-describedby="remand" value="{{ $details->remand }}">
    </div>
    @error('remand')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="investigation" class="form-label">Investigation </label>
    <textarea type="text" class="form-control" id="investigation" name="investigation">{{ $details->investigation }}</textarea>
    </div>
    @error('investigation')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="entrydate" class="form-label">Entry Date</label>
    <input type="text" class="form-control" id="entrydate" name="entrydate" aria-describedby="entrydate" data-mask="00/00/0000" value="{{ $details->entrydate }}">
    </div>
    @error('entrydate')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="exitdate" class="form-label">Exit Date</label>
    <input type="text" class="form-control" id="exitdate" name="exitdate" aria-describedby="exitdate" data-mask="00/00/0000" value="{{ $details->exitdate }}">
    </div>
    @error('exitdate')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="lastremandvisit" class="form-label">Last Remand Date</label>
    <input type="text" class="form-control" id="lastremandvisit" name="lastremandvisit" aria-describedby="lastremandvisit" data-mask="00/00/0000" value="{{ $details->lastremandvisit }}">
    </div>
    @error('lastremandvisit')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="b_status" class="form-label">Remand</label>
    <input type="text" class="form-control" id="b_status" name="b_status" aria-describedby="b_status" value="{{ $details->b_status }}">
    </div>
    @error('b_status')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="prison_duration" class="form-label">Prison Duration</label>
    <input type="text" class="form-control" id="prison_duration" name="prison_duration" aria-describedby="prison_duration" value="{{ $details->prison_duration }}">
    </div>
    @error('prison_duration')
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
