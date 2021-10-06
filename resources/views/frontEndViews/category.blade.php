@extends('frontEndViews.layout')

@section('title', 'Категория')
@section('content')


    <div class="row">

        <div class="col-lg-8 entries">


            <div class="containerTitle">
                <h2>Список постов категории {{ $category->title }}</h2>
            </div>

            @foreach ($posts as $post)
                @include('frontEndViews.cardOfPosts')
            @endforeach



            @include('frontEndViews.pagination')

        </div><!-- End blog entries list -->

        @include('frontEndViews.sideBar')

    </div>

    </div>
    </section><!-- End Blog Section -->
@endsection
