

    <x-master title='Profiles'>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="row my-5">
            @foreach ($profiles as $profile)
                <x-card-profile :profile="$profile"/>
            @endforeach
        </div>


        {{$profiles->links()}}

    </x-master>



