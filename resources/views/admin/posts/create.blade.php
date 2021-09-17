@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Добавление нового поста</h1>
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
                        <h3 class="card-title">Добавление поста</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название поста</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror id="title"
                                    name="title" placeholder="Название поста" value="{{old('title')}}">
                            </div>



                            <div class="form-group">
                                <label for="description">описание статьи</label>
                                <textarea class="form-control" rows="2" name="description" id="description"
                                    placeholder="Enter ...">{{old('description')}} </textarea>

                            </div>

                            <div class="form-group">
                                <label for="content">текст статьи</label>
                                <textarea class="form-control" rows="5" name="content" id="content"
                                    placeholder="Enter ...">{{old('content')}}</textarea>

                            </div>

                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach ($categories as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach


                                </select>
                            </div>


                            <div class="form-group">
                                <label for="tags">Теги</label>
                                <select id="tags" name="tags[]" class="select2" multiple="multiple"
                                    data-placeholder="выбор тегов" style="width: 100%;">
                                    @foreach ($tags as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="thumbnail">изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                        <label class="custom-file-label" for="thumbnails">Choose file</label>
                                    </div>

                                </div>
                            </div>

                


                        </div>
                        <!-- /.card-body -->

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
