@extends('auth.layouts.authLayout')

@section('content')
    <div class="row p">
        <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
            <div class="card-group ">
                <div class="card p-a-2">
                    <div class="card-block">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <h1>Login</h1>
                            <p class="text-muted">insert your Credentials</p>
                            <div class="input-group m-b-1">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input type="text" class="form-control en" name="email" placeholder="Email">
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="input-group m-b-2">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" name="password" class="form-control en" placeholder="Password">
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-primary p-x-2">
                                        <i class="icon-login"></i>
                                        Login</button>
                                </div>
                                {{-- <div class="col-xs-6 text-xs-right">
                                <button type="button" class="btn btn-link p-x-0">فراموشی رمز ورود</button>
                            </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card card-inverse card-primary p-y-3" style="width:44%">
                    <div class="card-block text-xs-center">
                        <div>
                            <h2> Dont have an Account?</h2>
                            <p>If you Dont have an Account You Can Press The Button Below to Sign Up</p>
                            <a href="{{ route('register.index') }}" class="btn btn-primary active m-t-1">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
