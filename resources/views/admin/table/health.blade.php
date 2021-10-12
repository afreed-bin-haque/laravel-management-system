@extends('admin.admin_master')

@section('admin_main')
<h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline"> Health Table </h2>
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
                                    <th scope="col"></th>
                                    <th scope="col">Prisoner Name</th>
                                    <th scope="col">Prisoner ID</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Health Status</th>
                                    <th scope="col">Disease</th>
                                    <th scope="col">Hospital</th>
                                    <th scope="col">Next Visit</th>
                                    <th scope="col">Inserted On</th>
                                    <th scope="col">Update at</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($prisoner_health as $h_tbl)
                                    <td>{{ $prisoner_health->firstItem()+$loop->index }}</td>
                                    <td><img src="{{ asset($h_tbl->prisoner_image) }}" width="80px" height="80px"></td>
                                    <td>{{ $h_tbl-> pname }}</td>
                                    <td>{{ $h_tbl-> prisoner_id }}</td>
                                    <td>{{ $h_tbl-> gender }}</td>
                                    <td>{{ $h_tbl-> age }}</td>
                                    <td>{{ $h_tbl-> h_stat }}</td>
                                    <td>{{ $h_tbl-> disease }}</td>
                                    <td>{{ $h_tbl-> hospital }}</td>
                                    <td>{{ $h_tbl-> next_checkup }}</td>
                                    <td>{{ Carbon\Carbon::parse($h_tbl->created_at)->diffForHumans() }}</td>
                                    @if($h_tbl->updated_at == null)
                                    <td>Upate Time is not available</td>
                                    @else
                                    <td>{{ Carbon\Carbon::parse($h_tbl->updated_at)->diffForHumans() }}</td>
                                    @endif
                                    <td><a href="{{ url('health/view/'.$h_tbl->id) }}" class="btn btn-sm btn-outline-light text-warning" style="border-radius: 25px;color:#f48c06">View</a>
                                    <a href="{{url('health/delete/'.$h_tbl->id)  }}" class="btn btn-sm btn-outline-danger text-white" style="border-radius: 25px;color:#d90429" onclick="return confirm('Are you sure to delete this Visitor and its data?')">Delete</a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $prisoner_health->links() }}
                        </div>
                        </div>
                        </div>
                            </div>
                          </div>
                        </div>
@endsection
