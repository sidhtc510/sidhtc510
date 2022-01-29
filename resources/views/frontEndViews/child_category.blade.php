{{-- шаблон вложенных чилд категорий 
весь код ниже инклюдится в categoriesMenu.blade.php --}}


<li class="dropdown">
    <a 
        href="{{ route('categories.single', ['slug' => $child_category->slug]) }}">{{ $child_category->title }}</a>
</li>
@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('frontEndViews.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
