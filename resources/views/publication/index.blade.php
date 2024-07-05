
<x-master title='Publication'>
    <h1>Publication</h1>

        <a href="{{ route('publication.create') }}" class="btn btn-primary float-end mx-2">
            <i class="bi bi-plus-circle"></i> Create a Publication
        </a>
    <div class="row my-5">


        @foreach ($publications as $publication)
            <x-card-publication :publication="$publication"/>
        @endforeach
    </div>

    {{$publications->links()}}

</x-master>
