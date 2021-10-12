 @extends('admin.admin_master')

 @section('admin_main')
 <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline">
           Hello <b style="color:#4361ee">{{ Auth::user()->name }}</b>
           <b style="float:right; font-size:small;color:#b5179e">Total User (by paginator): <span style="padding: 5px 10px; border-radius: 50%;background-color: #f72585;color: white;">{{ count($users) }}</span> </b>
        </h2>
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
                      <!-- Admin table -->
                      <div class="card card-default todo-table" id="todo" data-scroll-height="675">
                        <div class="card-header">
                          <h2>Users</h2>
                        </div>
                        <div class="card-body">
                        <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" style="background-color: #6875f5;color:white">
                                <thead>
                                    <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col"> Updated At</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user_detail)
                                    <tr>
                                    <td>{{ $users->firstItem()+$loop->index }}</td>
                                    <td>{{ $user_detail-> name }}</td>
                                    <td>{{ $user_detail-> email}}</td>
                                    <td>{{ $user_detail-> position}}</td>
                                    <td>{{ Carbon\Carbon::parse($user_detail-> created_at)->diffForHumans() }}</td>
                                    <td>{{ Carbon\Carbon::parse($user_detail-> updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{url('user/delete/'.$user_detail->id)  }}" class="btn btn-sm btn-outline-danger text-white" style="border-radius: 25px;color:#d90429" onclick="return confirm('Are you sure to delete this User and its data?')">Delete</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                        </div>
                        </div>
                            </div>
                          </div>
                        </div>
@endsection
