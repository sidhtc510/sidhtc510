@extends('frontEndViews.layout')

@section('title', 'Регистрация')
<!-- если есть второй аргумент то можно не использовать @ endsection -->

@section('content')


    <div class="row">

        <div class="col-lg-8 entries">

            <div class="containerTitle">
                <h2>Регистрация</h2>
            </div>




            <div class="register-box">
                {{-- <div class="register-logo">
                <b>Login</b>
            </div> --}}

            <div class="card">
                <div class="card-body register-card-body">
                    {{-- <p class="login-box-msg">Register a new membership</p> --}}

                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Name"
                                value="{{ old('name') }}">
                          
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                value="{{ old('email') }}">
                        
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                         
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Retype password">
                         
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>



                    <a href="{{ route('login.create') }}" class="text-center">I already have a membership</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
            </div>
        </div><!-- End blog entries list -->

        @include('frontEndViews.sideBar')

    </div>

    </div>
    </section><!-- End Blog Section -->
@endsection