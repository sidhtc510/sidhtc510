@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Список пользователей в БД</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="ml-3 mr-5">

                {{-- ERROR --}}

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                {{-- END ERROR --}}

                @if ($message = Session::get('flash_message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif



                @if (count($users) > 0)

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Имя</th>
                                    <th>email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr 
                                    @if ($user->banned == 1)
                                        style="background-color: #eaa4a4;"
                                @endif
                                @if ($user->is_admin == 3)
                                style="background-color: #b2b2ff;"
                        @endif
                                >
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>



                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <form action="{{ route('users.destroy', $user->id) }}" method="post"
                                        class="float-left">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Удалить \'{{ $user->name }} \' ?' )">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                   
                                

                                </td>
                                </tr>
                @endforeach


                </tbody>
                </table>

                {{ $users->links('vendor.pagination.bootstrap-4') }}
            </div>

        @else <h3>Пользователей нет</h3>
            @endif
    </div>
    </section>
    <!-- /.content -->
    </div>
@endsection
