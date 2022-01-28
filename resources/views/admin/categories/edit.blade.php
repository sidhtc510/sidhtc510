@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Изменение категории</h1>
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
                        <h3 class="card-title">Измененить категорию</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название категории</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror id="title"
                                    name="title" value="{{ $category->title }}">

                                    @if ($category->parentCategory == null)
                                    Является родительской категорией
                             
                                    @endif
                                    
                            </div>

                           {{-- @dd($category) --}}
                           {{-- @dd($nullCategories) --}}
                            <div class="card-body">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Выбор родительской категории</label>
                                    <select name="category_id" class="form-control">
                                        @if ($category->parentCategory == null)
                                        <option selected value="@php NULL @endphp">Родительская категория</option>
                                                @foreach ($nullCategories as $nullCategory)
                                                    <option  value="{{$nullCategory->id}}">{{$nullCategory->title}}</option>
                                                @endforeach
                                        @else
                                                @foreach ($nullCategories as $nullCategory)
                                                    @if ($category->parentCategory->id == $nullCategory->id)
                                                        @php
                                                            $selected = "selected" 
                                                        @endphp 
                                                    @else
                                                         {{$selected = null}}
                                                    @endif
                                                     <option  value="{{$nullCategory->id}}">{{$nullCategory->title}}</option>
                                                @endforeach
                                                <option value="@php NULL @endphp">Родительская категория</option>
                                        @endif                     
                                    </select>
                                </div>
                            </div>
                        </div>



                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3" name="checkSlug">
                                    <label class="custom-control-label " style="font-weight: 400" for="customSwitch3">Внести изменения в Slug (не
                                        рекомендуется)</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
