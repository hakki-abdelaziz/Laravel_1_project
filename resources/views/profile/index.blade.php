

    <x-master title='Profiles'>
        <h1>Profiles</h1>
        <div class="row my-5">
            @foreach ($profiles as $profile)
                <x-card-profile :profile="$profile"/>
            @endforeach
        </div>


        {{$profiles->links()}}

    </x-master>



