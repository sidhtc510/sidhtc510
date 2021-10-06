@extends('frontEndViews.layout')

@section('title', 'Авторизация')
<!-- если есть второй аргумент то можно не использовать @ endsection -->

@section('content')


    <div class="row">

        <div class="col-lg-8 entries">

            <div class="containerTitle">
                <h2>Авторизация</h2>
            </div>




            <div class="register-box">
                {{-- <div class="register-logo">
                <b>Login</b>
            </div> --}}

                <div class="card">
                    <div class="card-body register-card-body">
                        {{-- <p class="login-box-msg">Login</p> --}}

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    value="sidhtc510@gmail.com">

                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password">

                            </div>

                            <div class="row">
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>



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
