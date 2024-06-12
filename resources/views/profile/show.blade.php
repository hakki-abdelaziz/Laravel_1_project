
<x-master title='Profile '>

    <h1>{{ Str::upper($profile->name) }} Profile </h1>
    Mr/Mme. <b>{{ Str::upper($profile->name) }} </b></br>
    id is : {{$profile->id}} </br>
    email is : {{$profile->email}} </br>
    bio : {{$profile->bio}} </br>


</x-master>







