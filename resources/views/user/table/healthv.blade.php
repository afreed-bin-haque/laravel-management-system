@extends('user.user_master')

@section('user_main')
<h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline"> Health Table </h2>
<div class="row">
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
                                    <td><a href="{{ url('health/view/all/'.$h_tbl->id) }}" class="btn btn-sm btn-outline-light text-warning" style="border-radius: 25px;color:#f48c06">View</a>
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
