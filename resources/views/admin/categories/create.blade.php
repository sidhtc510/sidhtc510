@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Добавление новой категории</h1>
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
                {{-- ERROR --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- END ERROR --}}


                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Добавление категории</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название категории</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror id="title"
                                    name="title" placeholder="Название категории">
                            </div>
                        </div>
                        <!-- /.card-body -->



                        <div class="card-body">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Выбор родительской категории</label>
                                    <select name="category_id" class="form-control">
                                        <option value="@php
                                            NULL
                                        @endphp">Родительская категория</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach                                      
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
