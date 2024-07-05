
<x-master title='User Profile '>

    <div class="container-fluid">
        <div class="row">
            <div class="card my-d py-4">
                <img class="card-img-top w-25 mx-auto" style="width: 4rem; border-radius:50%; background-color:#b7e4fc" src="{{ asset('storage/'.$profile->image) }}" alt="it's ME 😁" />
                <div class="card-body text-center">
                    <h4 class="card-title">#{{$profile->id}} <b>{{ Str::upper($profile->name) }}</b></h4>
                    <p class="card-text">Email : {{$profile->email}}</p>
                    <p class="card-text">Bio : {{$profile->bio}}</p>
                    <p class="card-text">Created at {{$profile->created_at->format('d-m-y')}}</p>
                </div>
            </div>
            <div class="card-foot border-top px-3 py-3 bg-light">
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
    {{-- <div class="row my-5">
        @foreach ($publication as $publication)
            @if ($publication->profile->id === Auth::user()->profile->id)
                <x-card-publication :publication="$publication"/>
            @endif
        @endforeach
    </div> --}}

</x-master>







