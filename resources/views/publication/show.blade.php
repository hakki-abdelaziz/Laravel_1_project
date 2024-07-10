
<x-master title="Publication">
    <div class="container">
        <div class="card my-3">
            <img
            class="float-start card-img-top mx-auto"
            style="width: 4rem; border-radius:50%; background-color:#b7e4fc"
            src="{{ asset('storage/'.$publication->profile->image) }}"
            alt="{{ $publication->profile->name }} pic">
            <a aria-hidden href="{{ route('profiles.show', $publication->profile->id) }}" class="stretched-link"></a>
            </img>
            @if($publication->image)
                <img class="card-img-top" src="{{ asset('storage/' . $publication->image) }}" alt="Publication Img">
            @endif
            <div class="card-body">
                <h1 class="card-title">{{ $publication->title }}</h1>
                <h4 class="card-subtitle mb-2 text-muted">By {{ $publication->profile->name }}</h4>
                <p class="card-text">{{ $publication->body }}</p>
            </div>
            <div class="card-footer">
                <form action="{{ route('publication.destroy', $publication->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>

    </div>

</x-master>
