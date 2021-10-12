@extends('admin.admin_master')

@section('admin_main')
<div class="card card-default">
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
										<div class="card-header card-header-border-bottom">
											<h2>Health Record Registration</h2>
										</div>
										<div class="card-body">
                                        <form action ="{{ route('save.hospital')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="prisioner_id">Prisoner ID</label>
                                                    <select class="form-control" aria-label="Default select example" id="prisioner_id" name="prisioner_id">
                                                    @foreach($prioner_id as $p_id)
                                                    <option value="{{ $p_id->prisoner_id }}">{{ $p_id->prisoner_id }}</option>
                                                    @endforeach
                                                    </select>
                                                    </div>
                                            <div class="form-group form-pill">
													<input type="text" class="form-control" id="h_stat" name="h_stat" placeholder="Health Status">
												</div>
                                                    <div class="form-group">
                                                    <input type="text" class="form-control" id="disease" name="disease" placeholder="Disease">
												    </div>

                                                    <div class="form-group">
													<input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor's name">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" id="hospital" name="hospital" placeholder="Hospital name">
                                                </div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="last_check" name="last_check"  data-mask="00/00/0000"  placeholder="Last Checkup">
                                                </div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="next_checkup" name="next_checkup" data-mask="00/00/0000"  placeholder="Next Checkup">
                                                </div>
                                                <div class="form-group">
													<input type="number" class="form-control" id="no_visit" min="0" max="100" name="no_visit" placeholder="No. of Visit">
                                                </div>
                                                <div class="form-footer pt-5 border-top">
													<button type="submit" class="btn btn-success btn-default">Register</button>
												</div>
											</form>
										</div>
@endsection
