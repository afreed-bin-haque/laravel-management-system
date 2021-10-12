@extends('user.user_master')

@section('user_main')
    <div class="py-12">
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">View <span style="color:#6875f5">Health Record</span></h2>
  <div class="mb-3">
    <p for="prisioner_id" class="form-label">Prisoner ID: {{ $details->prisioner_id }}</p>
    </div>
<div class="mb-3">
    <p for="h_stat" class="form-label">Health Status: {{ $details->h_stat }}</p>
    </div>
<div class="mb-3">
    <p for="disease" class="form-label">Disease: {{ $details->disease }}</p>
    </div>
<div class="mb-3">
    <p for="doctor" class="form-label">Doctor: {{ $details->doctor }}</p>
    </div>
<div class="mb-3">
    <p for="hospital" class="form-label">Hospital: {{ $details->hospital }}</p>
    </div>
<div class="mb-3">
    <p for="last_check" class="form-label">Last Check: {{ $details->last_check }}</p>
    </div>
<div class="mb-3">
    <p for="next_checkup" class="form-label">Next Checkup: {{ $details->next_checkup }}</p>
    </div>
<div class="mb-3">
    <p for="no_visit" class="form-label">Total Visits: {{ $details->no_visit }}</p>
    </div><br>
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
