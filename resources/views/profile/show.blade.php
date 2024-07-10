
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
    {{-- Show Publications of the current profile  --}}
    <div class="row">
        @foreach ($publications as $publication)
        <div class="container col-md-6">
            <div class="card my-3 ">
                <div class="card bg-light">
                    <div class="card-header text-center">
                        @if($publication->profile)
                            <img
                                class="float-start card-img-top mx-auto"
                                style="width: 3rem; border-radius:50%; background-color:#b7e4fc"
                                src="{{ asset('storage/'.$publication->profile->image) }}"
                                alt="{{ $publication->profile->name }} pic">
                            </img>
                            <b>{{ Str::upper($publication->profile->name) }}</b>
                                <a aria-hidden href="{{ route('profiles.show', $publication->profile->id) }}"></a>
                        @endif
                    </div>
                    <div class="card-body" style="min-height: 10rem;">
                        <h4 class="card-title">{{ $publication->title }}</h4>
                        <p class="card-text">{{ $publication->body }}</p>
                    </div>
                    <div class="card-footer text-bg-dark">
                        <form action="{{ route('publication.destroy', $publication->id) }}" method="post">
                            Published at: {{ $publication->created_at }}
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm float-end" >DELETE !</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</x-master>











