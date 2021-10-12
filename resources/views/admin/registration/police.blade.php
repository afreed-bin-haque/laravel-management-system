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
											<h2>Register A Police</h2>
										</div>
										<div class="card-body">
                                        <form action ="{{ route('save.police')}}" method="POST">
                                            @csrf
                                            <div class="form-group form-pill">
													<input type="text" class="form-control" id="rank" name="rank" placeholder="Rank">
												</div>
                                                    <div class="form-group">
													   <input type="text" class="form-control" id="name" name="name" placeholder="Name">
												    </div>
                                                    <div class="form-group">
													<input type="text" class="form-control" id="email" name="email" placeholder="email">
												</div>
                                                    <div class="form-group text-mutted">
                                                    <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="gender">Gender: </label>
                                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                                                        <label class="form-check-label" for="gender">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                                        <label class="form-check-label" for="gender">Female</label>
                                                        </div>
                                                    </div>
												<div class="form-group">
													<input type="text" class="form-control" id="police_st" name="police_st" placeholder="Police station">
												</div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="age" name="age" placeholder="Age">
												</div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="blood_g" name="blood_g" placeholder="Blood Group">
												</div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="duty_t" name="duty_t" placeholder="Duty Time">
												</div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="join_d" name="join_d" data-mask="00/00/0000" placeholder="join date" aria-label="" autocomplete="off" maxlength="10">
												</div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="position_p" name="position_p" placeholder="Position In Prison">
												</div>
                                                <div class="form-group">
													<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
												</div>
                                                <div class="form-footer pt-5 border-top">
													<button type="submit" class="btn btn-primary btn-default">Register</button>
												</div>
											</form>
										</div>
@endsection
