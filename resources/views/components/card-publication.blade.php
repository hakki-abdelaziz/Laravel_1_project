<div class="container">
    <div class="card my-3">
        <div class="card-body">
            <h4 class="card-title">{{$publication->title}}</h4>
            <p class="card-text">{{$publication->body}}</p>
                {{-- <a aria-hidden href="{{ route('profiles.show',$profile->id) }}" class="stretched-link"></a> --}}
        </div>
    </div>
</div>
