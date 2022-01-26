{{-- построение дерева родительских категорий
то что инклюдится, это чилд категории --}}


<ul>
    @foreach ($categories as $category)


        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                href="{{ route('categories.single', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
            <ul class="dropdown-menu">

                @foreach ($category->childrenCategories as $childCategory)

                    @include('frontEndViews.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
    @endforeach
    </li>
</ul>