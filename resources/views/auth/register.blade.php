@extends('auth.layouts.authLayout')

@section('content')
    <div class="row">
        <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
            <div class="card">
                <div class="card-header">
                    <strong>Register</strong>
                    <small>Form</small>
                </div>
                <div class="card-block">
                    <div class="row">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                </div>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="ccnumber">Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Enter Email">
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="ccnumber">Password</label>
                                    <input name="password" type="password" class="form-control"
                                        placeholder="Enter Password">
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="col-sm-12">
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-sm btn-primary">Register</button>
                                    <a href="{{ route('login.index') }}" class="btn btn-sm btn-danger text-white">Return to Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/row-->

                </div>
            </div>

        </div>
        <!--/col-->



    </div>
@endsection
