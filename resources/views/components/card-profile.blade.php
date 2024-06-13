<div class="col-sm-3">
    <div class="card my-3">
        <img class="card-img-top" src="{{ asset('storage/'.$profile->image) }}" alt="it's ME 😁" />
        <div class="card-body">
            <h4 class="card-title">{{$profile->name}}</h4>
            <p class="card-text">{{Str::limit($profile->bio,50)}}</p>
                <a aria-hidden href="{{ route('profiles.show',$profile->id) }}" class="stretched-link"></a>
        </div>
        <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
            <form action="{{ route('profiles.destroy',$profile->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm float-end">DELETE !</button>
            </form>
            <form action="{{ route('profiles.edit',$profile->id) }}" method="GET">

                @csrf
                <button class="btn btn-primary btn-sm float-end mx-2">UPDATE !</button>
            </form>
        </div>
    </div>
</div>
