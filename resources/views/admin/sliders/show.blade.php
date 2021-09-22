@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show конткретная пост</h1>
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

                <div class="card" style="width: 45rem;">
                    <div class="card-body">
                        <p>
                        <h5 class="card-title">ID: <b>{{ $data->id }}</b> Title: <b>{{ $data->title }}</b></h5>
                        </p><br>
                        <p>
                            <h7 class="card-subtitle mb-2 text-muted">Slug: <b>{{ $data->slug }}</b></h7>
                        </p>
                        <p class="card-text">description: {!! $data->description !!}</p>
                        <p class="card-text">content: {!! $data->content !!}</p>
                        <p class="card-text">category id: <b> {{ $data->category_id }}</b></p>
                        <p class="card-text">category title: <b> {{ $data->category->title }}</b></p>
                        <p class="card-text">tags: <b> {{ $data->tags->pluck('title')->join(', ') }}</b></p>

                        <p class="card-text">views: <b> {{ $data->views }}</b></p>
                        <p class="card-text">thumbnail: <b> {{ $data->thumbnail }}</b></p>
                        <p class="card-text">Created: <b> {{ $data->created_at }}</b></p>
                        <p class="card-text">Updated: <b> {{ $data->updated_at }}</b></p>

                    </div>
                    <div class="float-left" style="width: 18rem;">
                        <img src="{{$data->getImage()}}" class="img-thumbnail">
                    </div>
                </div>

                <a href="{{ route('posts.edit', $data->id) }}" class="btn btn-info btn-sm float-left mr-1">
                    <i class="fas fa-pencil-alt"></i> Редактировать пост
                </a>


            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
