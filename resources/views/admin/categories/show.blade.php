@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show конткретная категория</h1>
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
                <a href="{{ url()->previous() }}">назад</a>
                
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p><h5 class="card-title">ID: <b>{{ $data->id }}</b> Title: <b>{{ $data->title }}</b></h5></p><br>
                        <p><h7 class="card-subtitle mb-2 text-muted">Slug: <b>{{ $data->slug }}</b></h7></p>
                        <p class="card-text">Created: <b> {{ $data->created_at }}</b></p>
                        <p class="card-text">Updated: <b> {{ $data->updated_at }}</b></p>

                    </div>
                </div>

                <a href="{{ route('categories.edit', $data->id) }}"
                    class="btn btn-info btn-sm float-left mr-1">
                    <i class="fas fa-pencil-alt"></i> Редактировать категорию
                </a>


            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
