@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Список постов в БД</h1>
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

                <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Добавить пост</a>


                @if ($message = Session::get('flash_message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if (count($posts) > 0)

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>img</th>
                                    <th>Наименование</th>
                                    <th>Категория</th>
                                    <th>теги</th>
                                    <th>дата</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td><div><img src="{{ $post->getImage() }}" alt="" style="width: 4rem;"></div></td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->title }}</td>
                                        <td>{{ $post->tags->pluck('title')->join(', ') }}</td>
                                        <td>{{ $post->created_at }}</td>



                                        <td>

                                            <a href="{{ route('posts.show', $post->id) }}"
                                                class="btn btn-success btn-sm float-left mr-1">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                                                class="float-left">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Удалить \'{{ $post->title }} \' ?' )">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                        {{ $posts->links('vendor.pagination.bootstrap-4') }}
                    </div>

                @else <h3>постов нет</h3>
                @endif
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
