@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Список категорий в БД</h1>
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
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>
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



                @if (count($categories) > 0)

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Наименование</th>
                                    <th>Slug</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            {{ $category->slug }}
                                        </td>
                                        <td>

                                            <a href="{{ route('categories.show', $category->id) }}"
                                                class="btn btn-success btn-sm float-left mr-1">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="{{ route('categories.edit', $category->id) }}"
                                                class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                                                class="float-left">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Удалить \'{{ $category->title }} \' ?' )">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                        {{ $categories->links('vendor.pagination.bootstrap-4') }}
                    </div>

                @else <h3>Категорий нет</h3>
                @endif
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
