    {{-- Password Reset Modal --}}

    <div class="modal fade login" id="passwordModal">
        <div class="modal-dialog login animated">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="text-center">
                    <h2 class="">Forgot Password</h2>
                    <small class="text-muted ">Password reset link will be sent to your email</small>
                </div>

                <div class="modal-body">
                    <div class=" border-top pt-3">
                        <div class="content">



                            <div class="form loginBox">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="off" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-0">
                                        <a href="{{ route('password.request') }}" type="submit"
                                            class="btn btn-primary btn-block">
                                            {{ __('Send Password') }}
                                        </a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="pb-4">
                    <div class="text-center">
                        <span>Didn't receive password reset link?</span>
                        <a href="">Resend</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </nav>
