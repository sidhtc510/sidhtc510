@extends('frontEndViews.layout')

@section('title', 'главная страница')
<!-- если есть второй аргумент то можно не использовать @ endsection -->

@section('content')


    <div class="row">

        <div class="col-lg-8 entries">

            <div class="containerTitle">
                <h2>По запросу ' {{ $s }} ', найдено {{ $posts->total() }} постов</h2>
            </div>

            @if ($posts->count())

                @foreach ($posts as $post)
                    @include('frontEndViews.cardOfPosts')
                @endforeach
            @else
                По данному запросу постов не найдено
            @endif


            @include('frontEndViews.pagination')

        </div><!-- End blog entries list -->

        @include('frontEndViews.sideBar')

    </div>

    </div>
    </section><!-- End Blog Section -->
@endsection
