@extends('user.user_master')

@section('user_main')
<h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline"> Prisoner Table </h2>
<div class="row">
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
                            @if(session('danger'))
                            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                            <div class="text-center">
                                <strong>{{ session('danger') }}</strong>
                                <span class="float-left"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></span>
                            </div>
                            </div>
                            @endif
							<div class="col-xl-12 col-md-12">
                      <div class="card card-default todo-table" id="todo" data-scroll-height="675">
                        <div class="card-body">
                        <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" style="background-color: #6875f5;color:white">
                                <thead>
                                    <tr>
                                    <th scope="col">SL</th>
                                    <th></th>
                                    <th scope="col">Prisoner Name</th>
                                    <th scope="col">Prisoner ID</th>
                                    <th scope="col">Case ID</th>
                                    <th scope="col">Punishment</th>
                                    <th scope="col">Inserted By</th>
                                    <th scope="col">Update at</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($prisoner_table as $pr_tbl)
                                    <td>{{ $prisoner_table->firstItem()+$loop->index }}</td>
                                    <td><img src="{{ asset($pr_tbl->prisoner_image) }}" width="80px" height="80px"></td>
                                    <td>{{ $pr_tbl-> name }}</td>
                                    <td>{{ $pr_tbl-> prisoner_id }}</td>
                                    <td>{{ $pr_tbl-> case_id }}</td>
                                    <td>{{ $pr_tbl-> punishment }}</td>
                                    <td>{{ $pr_tbl-> inserted_by }}</td>
                                    @if($pr_tbl->updated_at == null)
                                    <td>Upate Time is not available</td>
                                    @else
                                    <td>{{ Carbon\Carbon::parse($pr_tbl->updated_at)->diffForHumans() }}</td>
                                    @endif
                                    <td><a href="{{ url('prisoner/all/view/'.$pr_tbl->id) }}" class="btn btn-sm btn-outline-light text-warning" style="border-radius: 25px;color:#f48c06">View</a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $prisoner_table->links() }}
                        </div>
                        </div>
                        </div>
                            </div>
                          </div>
                        </div>
@endsection
