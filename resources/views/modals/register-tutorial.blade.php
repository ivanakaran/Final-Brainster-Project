 {{-- Register Modal --}}
 <div class="modal fade login" id="registerTutorialModal">
     <div class="modal-dialog login animated">
         <div class="modal-content">
             <div class="modal-header border-bottom-0">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             </div>
             <div class="text-center">
                 <h2 class="">Welcome to Hackr.io</h2>
                 <p class="text-muted">Signup to submit and upvote tutorials, follow topics, and more.
                 </p>
                 <p class="alert alert-warning mx-5">You need to Sign up first</p>
                 <small class="d-block text-uppercase text-muted border-bottom mx-5 mt-2">continue with:</small>
             </div>

             <div class="modal-body">
                 <div class="">
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
                         <form method="POST" action="{{ route('register') }}" id="register-tutorial-form">
                            @csrf
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Full Name" autocomplete="off" value="{{ old('name') }}" id="t-name">
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>


                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input id="email" type="email"
                                    class="form-control" name="email"
                                    value="{{ old('email') }}" placeholder="Email" id="t-email">

                                
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>

                                <input id="password" type="password"
                                    class="form-control" name="password"
                                   placeholder="Password" id="t-password">

                                

                            </div>
                            <div class="form-group row justify-content-center">
                                {!! NoCaptcha::display() !!}
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Create Account') }}
                                </button>

                            </div>
                        </form>
                        

                     </div>
                 </div>

             </div>
             <div class="pb-4">
                 <div class="text-center">
                     <span>Already have an account?</span>
                     <a href="" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login</a>
                 </div>
             </div>
         </div>
     </div>
 </div>


 @section('scripts')

     {!! NoCaptcha::renderJs() !!}
     
     
 @endsection
