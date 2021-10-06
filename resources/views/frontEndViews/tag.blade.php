@extends('frontEndViews.layout')

@section('title', 'Тэг')
@section('content')


    <div class="row">

        <div class="col-lg-8 entries">


            <div class="containerTitle">
                <h2>Список постов Тега {{ $tag->title }}</h2>
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
