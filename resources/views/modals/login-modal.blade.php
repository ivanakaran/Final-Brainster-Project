  {{-- Login Modal --}}

  <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
          <div class="modal-content">
              <div class="modal-header border-bottom-0">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="text-center">
                  <h2 class="">Welcome Back</h2>
                  <small class=" text-uppercase text-muted d-block mx-5 border-bottom ">continue with:</small>
              </div>

              <div class="modal-body">
                  <div class="content">

                      <div class="form-group">

                          <div class="row">
                              <div class="col-6 offset-3">
                                  <a href="{{ url('/login/google') }}" class=" btn btn-danger btn-block">
                                      <i class="fab fa-google mr-auto"></i>
                                      Sign in with Google</a>
                              </div>
                          </div>
                          <div class="row mt-3">
                              <div class="col-6">
                                  <a href="{{ url('/login/facebook') }}" class=" btn btn-primary btn-block">
                                      <i class="fab fa-facebook-f"></i>
                                      Sign in with Facebook</a>
                              </div>
                              <div class="col-6">
                                  <a href="{{ url('/login/github') }}" class="btn btn-dark btn-block">
                                      <i class="fab fa-github"></i>
                                      Sign in with Github</a>
                              </div>
                          </div>

                      </div>


                      <div class="division">
                          <div class="line l"></div>
                          <span>or</span>
                          <div class="line r"></div>
                      </div>
                      <form method="POST" action="{{ route('login') }}" id="login-form">
                          @csrf
                          <div class="form-group input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                              </div>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                  name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Email">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                          </div>

                          <div class="form-group input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                              </div>

                              <input id="password" type="password"
                                  class="form-control @error('password') is-invalid @enderror" name="password"
                                  autocomplete="off" placeholder="Password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             

                          </div>
                          <div class="form-group row justify-content-center">
                              {!! NoCaptcha::display() !!}
                          </div>
                          @if (Route::has('password.request'))
                              <a class="my-2 text-muted float-right" href="" data-toggle="modal"
                                  data-target="#passwordModal" data-dismiss="modal">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif




                          <div class="form-group mb-0">
                              <button type="submit" class="btn btn-primary btn-block">
                                Login
                              </button>

                          </div>
                      </form>


                  </div>


              </div>
              <div class="pb-4">
                  <div class="text-center">
                      <span>Don't have an account?</span>
                      <a href="" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Sign Up</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  @section('scripts')
      {!! NoCaptcha::renderJs() !!}
      

  
      
        
   
  @endsection
 