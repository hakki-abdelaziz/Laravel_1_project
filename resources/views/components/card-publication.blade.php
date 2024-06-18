<div class="container">
    <div class="card my-3">
        <div class="card bg-light">
            <div class="card-header text-center">
                <img
                    class="float-start card-img-top mx-auto"
                    style="width: 4rem; border-radius:50%; background-color:#b7e4fc"
                    src="{{ asset('storage/'.$publication->profile->image) }}"
                    alt="{{$publication->profile->name}} pictur">
                    <a aria-hidden href="{{ route('profiles.show',$publication->profile->id) }}" class="stretched-link"></a>
                </img>
                <b >{{Str::Upper($publication->profile->name)}}</b>
                    <a aria-hidden href="{{ route('profiles.show',$publication->profile->id) }}"></a>
            </div>
            <div class="card-body" style="min-height: 10rem;">
                <h4 class="card-title">{{$publication->title}}</h4>
                <p class="card-text">{{$publication->body}}</p>
            </div>
            <div class="card-footer text-bg-dark">Pulished at : {{$publication->created_at}}</div>
        </div>
    </div>
</div>
