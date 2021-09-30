@extends('frontEndViews.layout')

@section('title', 'Категория') 
@section('content')
       
    
              <div class="row">
      
                <div class="col-lg-8 entries">


                  <div class="containerTitle">
                    <h2>Список постов категории {{$category->title}}</h2>
                  </div>

                    @foreach ($posts as $post)
                        <article class="entry">
      
                    <div class="entry-img">
                      <img src="{{$post->getImage()}}" alt="" class="img-fluid">
                    </div>
      
                    <h2 class="entry-title">
                      <a href="{{route('posts.single', ['slug' => $post->slug])}}">{{$post->title}}</a>
                    </h2>
      
                    <div class="entry-meta">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">John Doe</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="{{route('categories.single', ['slug'=> $category->slug])}}">Category: {{$category->title}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> {{$post->getPostDate()}}</li>
                        <li class="d-flex align-items-center"><i class="bi bi-eye"></i>Views: {{$post->views}}</li>
                      </ul>
                    </div>
      
                    <div class="entry-content">
                      <p>
                      {!!$post->description!!}
                      </p>
                      <div class="read-more">
                        <a href="{{route('posts.single', ['slug' => $post->slug])}}">Read More</a>
                      </div>
                    </div>
      
                  </article><!-- End blog entry -->
                    @endforeach
                  
      
      
                  @include('frontEndViews.pagination')
      
                </div><!-- End blog entries list -->
      
                @include('frontEndViews.sideBar')
      
              </div>
      
            </div>
          </section><!-- End Blog Section -->
@endsection