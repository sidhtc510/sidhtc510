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


 {{-- success --}}



 @if ($message = Session::get('flash_message'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{$message}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 @endif
 {{-- end success --}}