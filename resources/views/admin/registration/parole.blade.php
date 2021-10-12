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
											<h2>Parole Registration</h2>
										</div>
										<div class="card-body">
                                        <form action ="{{ route('save.parole')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="prisioner_id">Prisoner ID</label>
                                                    <select class="form-control" aria-label="Default select example" id="prisioner_id" name="prisioner_id">
                                                    @foreach($prioner_id as $p_id)
                                                    <option value="{{ $p_id->prisoner_id }}">{{ $p_id->prisoner_id }}</option>
                                                    @endforeach
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                    <input type="text" class="form-control" id="interviewer" name="interviewer" placeholder="Interviewer">
												    </div>

                                                    <div class="form-group">
													<input type="text" class="form-control" id="hearing" name="hearing" placeholder="Hearing">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" id="remand" name="remand" placeholder="Remand">
                                                </div>
                                                <div class="form-group">
													<textarea class="form-control" id="investigation" name="investigation" placeholder="Investigation"></textarea>
                                                </div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="entrydate" name="entrydate"  data-mask="00/00/0000"  placeholder="Entry Date">
                                                </div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="exitdate" name="exitdate" data-mask="00/00/0000"  placeholder="Exit Date">
                                                </div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="lastremandvisit" name="lastremandvisit"  placeholder="Last Remand Visit">
                                                </div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="b_status" name="b_status"  placeholder="Behavior Status ">
                                                </div>
                                                <div class="form-group">
													<input type="text" class="form-control" id="prison_duration" name="prison_duration"  placeholder="Prison Duration">
                                                </div>
                                                @foreach($authorname as $author)
                                                <div class="form-group">
													   <input type="text" class="form-control" id="author" name="author" value="{{ $author->name }}" hidden>
												    </div>
                                                    @endforeach
                                                <div class="form-footer pt-5 border-top">
													<button type="submit" class="btn btn-success btn-default">Record</button>
												</div>
											</form>
										</div>
@endsection
