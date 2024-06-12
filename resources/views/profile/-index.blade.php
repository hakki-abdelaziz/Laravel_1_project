

    <x-master title='Profiles'>
        <h1>Profiles</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Bio</th>
                <th>Actions</th>
            </tr>
        @foreach ($profiles as $profile)
            <tr>
                <td>{{$profile->id}}</td>
                <td>{{$profile->name}}</td>
                <td>{{$profile->email}}</td>
                <td>{{Str::limit($profile->bio,50)}}</td>
                <td>
                    <button type="button" class="btn btn-dark text-decoration-none">
                        <a class="text-decoration-none link-light" href="{{ route('profiles.show',$profile->id)}}">See More</a>
                    </button>
                </td>

            </tr>
        @endforeach

        </table>
        {{$profiles->links()}}
        
    </x-master>



