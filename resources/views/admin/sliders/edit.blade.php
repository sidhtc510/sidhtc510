@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование поста</h1>
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

                @if ($message = Session::get('flash_message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


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
                        <h3 class="card-title">Редактирование поста</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название поста</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror id="title"
                                    name="title" value="{{ $post->title }}">
                            </div>



                            <div class="form-group">
                                <label for="description">описание статьи</label>
                                <textarea class="form-control" rows="2" name="description"
                                    id="description">{{ $post->description }}</textarea>

                            </div>

                            <div class="form-group">
                                <label for="content">текст статьи</label>
                                <textarea class="form-control" rows="5" name="content"
                                    id="content">{{ $post->content }}</textarea>

                            </div>

                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach ($categories as $k => $v)
                                        <option value="{{ $k }}" @if ($k == $post->category_id) selected @endif>{{ $v }}
                                        </option>
                                    @endforeach


                                </select>
                            </div>


                            <div class="form-group">
                                <label for="tags">Теги</label>
                                <select id="tags" name="tags[]" class="select2" multiple="multiple"
                                    data-placeholder="выбор тегов" style="width: 100%;">
                                    @foreach ($tags as $k => $v)
                                        <option value="{{ $k }}" @if (in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{ $v }}
                                        </option>
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

                                @if ($post->thumbnail)
                                    <div>{{ $post->thumbnail }} <a
                                            href="{{ route('destroyImage', ['id' => $post->id]) }}">delete
                                            image</a></div>
                                @endif

                                <div><img src="{{ $post->getImage() }}" alt="" style="width: 18rem;"></div>
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">сохранить изменения</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
