
<x-master title='Publication'>
    <h1>Publication</h1>
    <div class="row my-5">
        @foreach ($publications as $publication)
            <x-card-publication :publication="$publication"/>
        @endforeach
    </div>

    {{$publications->links()}}

</x-master>
