<div class="col-sm-4">
    <div class="card my-3">
        <img class="card-img-top" src="/images/user.png" alt="it's ME 😁" />
        <div class="card-body">
            <h4 class="card-title">{{$profile->name}}</h4>
            <p class="card-text">{{Str::limit($profile->bio,50)}}</p>
            <a href="{{ route('profiles.show',$profile->id) }}" class="btn btn-dark stretched-link">See More</a>


        </div>
    </div>
</div>
