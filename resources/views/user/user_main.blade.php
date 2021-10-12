 @extends('user.user_master')

 @section('user_main')
 <h2 class="font-semibold text-xl text-gray-800 leading-tight nounderline text-center">
           Hello <b style="color:#4361ee">{{ Auth::user()->name }}</b>
        </h2>
							<div class="col-12 ">
                      <!-- Admin table -->
                      <div class="card">
                        <div class="card-body text-dark">
                            <p>Name: {{ Auth::user()->name }}</p>
                            <p> Email: {{ Auth::user()->email }}</p>
                            <p> Position: {{ Auth::user()->	position }}</p>
                        </div>
                        </div>
                            </div>
                          </div>
                          </div>
                          </div>
@endsection
