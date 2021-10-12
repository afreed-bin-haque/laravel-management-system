@extends('user.user_master')

@section('user_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View <span style="color:#6875f5">Parole</span></h2>
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
    <input type="text" class="form-control" id="interviewer" name="interviewer" aria-describedby="interviewer" value="{{ $details->interviewer }}" readonly>
    </div>
    @error('interviewer')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="hearing" class="form-label">Hearing</label>
    <input type="text" class="form-control" id="hearing" name="hearing" aria-describedby="hearing" value="{{ $details->hearing }}"readonly>
    </div>
    @error('hearing')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="remand" class="form-label">Remand</label>
    <input type="text" class="form-control" id="remand" name="remand" aria-describedby="remand" value="{{ $details->remand }}"readonly>
    </div>
    @error('remand')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="investigation" class="form-label">Investigation </label>
    <textarea type="text" class="form-control" id="investigation" name="investigation" readonly>{{ $details->investigation }}</textarea>
    </div>
    @error('investigation')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="entrydate" class="form-label">Entry Date</label>
    <input type="text" class="form-control" id="entrydate" name="entrydate" aria-describedby="entrydate" data-mask="00/00/0000" value="{{ $details->entrydate }}" readonly>
    </div>
    @error('entrydate')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="exitdate" class="form-label">Exit Date</label>
    <input type="text" class="form-control" id="exitdate" name="exitdate" aria-describedby="exitdate" data-mask="00/00/0000" value="{{ $details->exitdate }}" readonly>
    </div>
    @error('exitdate')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="lastremandvisit" class="form-label">Last Remand Date</label>
    <input type="text" class="form-control" id="lastremandvisit" name="lastremandvisit" aria-describedby="lastremandvisit" data-mask="00/00/0000" value="{{ $details->lastremandvisit }}" readonly>
    </div>
    @error('lastremandvisit')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="b_status" class="form-label">Remand</label>
    <input type="text" class="form-control" id="b_status" name="b_status" aria-describedby="b_status" value="{{ $details->b_status }}" readonly>
    </div>
    @error('b_status')
    <div class="alert alert-danger text-center" role="alert" style="border-radius: 25px;">
  {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="prison_duration" class="form-label">Prison Duration</label>
    <input type="text" class="form-control" id="prison_duration" name="prison_duration" aria-describedby="prison_duration" value="{{ $details->prison_duration }}" readonly>
    </div>
    @error('prison_duration')
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
