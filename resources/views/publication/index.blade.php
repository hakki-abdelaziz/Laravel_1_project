
<x-master title='Publication'>
    <h1>Publication</h1>

        <a href="{{ route('publication.create') }}" class="btn btn-primary float-end mx-2">
            <i class="bi bi-plus-circle"></i> Create a Publication
        </a>
    <div class="row my-5">


        @foreach ($publications as $publication)
        <div class="container">
            <div class="card my-3">
                <div class="card bg-light">
                    <div class="card-header text-center">
                        @if($publication->profile)
                            <img
                                class="float-start card-img-top mx-auto"
                                style="width: 4rem; border-radius:50%; background-color:#b7e4fc"
                                src="{{ asset('storage/'.$publication->profile->image) }}"
                                alt="{{ $publication->profile->name }} pic">
                                <a aria-hidden href="{{ route('profiles.show', $publication->profile->id) }}" class="stretched-link"></a>
                            </img>
                            <b>{{ Str::upper($publication->profile->name) }}</b>
                                <a aria-hidden href="{{ route('profiles.show', $publication->profile->id) }}"></a>
                        @endif
                    </div>
                    <div class="card-body" style="min-height: 10rem;">
                        <h4 class="card-title">{{ $publication->title }}</h4>
                        <p class="card-text">{{ $publication->body }}</p>
                    </div>
                    <div class="card-footer text-bg-dark">Published at: {{ $publication->created_at }}</div>
                </div>
            </div>
        </div>

        @endforeach
    </div>

    {{$publications->links()}}

</x-master>
