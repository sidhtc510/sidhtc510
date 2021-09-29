{{-- <div class="blog-pagination">
    <ul class="justify-content-center">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
    </ul>
</div> --}}

<div class="pagination">
    {{ $posts->appends(['s' => request()->s])->links('vendor.pagination.bootstrap-4') }}
</div>
