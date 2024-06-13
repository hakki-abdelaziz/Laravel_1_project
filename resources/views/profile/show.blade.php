
<x-master title='Profile '>

    <h1>{{ Str::upper($profile->name) }} Profile </h1>
    <img class="card-img-top" src="{{ asset('storage/'.$profile->image) }}" alt="it's ME 😁" />
    Mr/Mme. <b>{{ Str::upper($profile->name) }} </b></br>
    id is : {{$profile->id}} </br>
    email is : {{$profile->email}} </br>
    bio : {{$profile->bio}} </br>
    <form action="{{ route('profiles.destroy',$profile->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger btn-sm float-end">DELETE !</button>
    </form>
    <form action="{{ route('profiles.edit',$profile->id) }}" method="GET">
        @csrf
        <button class="btn btn-primary btn-sm float-end mx-2">UPDATE !</button>
    </form>

</x-master>







