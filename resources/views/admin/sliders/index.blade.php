@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Список картинок слайдера</h1>
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

                <a href="{{ route('sliders.create') }}" class="btn btn-primary mb-3">Добавить картинку</a>


                @if ($message = Session::get('flash_message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if (count($sliders) > 0)

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    
                                    <th>img</th>
                                    
                                    <th>дата</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        
                                        <td><div><img src="{{ $slider->getImage() }}" alt="" style="width: 4rem;"></div></td>
                                        
                                        <td>{{ $slider->created_at }}</td>



                                        <td>

                                            
                                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="post"
                                                class="float-left">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Удалить картинку?' )">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                        {{-- {{ $slider->links('vendor.pagination.bootstrap-4') }} --}}
                    </div>

                @else <h3>Картинок нет</h3>
                @endif
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
