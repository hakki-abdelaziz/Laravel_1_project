
<x-master title='Profiles create '>
    <h1 class="mb-5"> Create Profile</h1>
    @if ($errors->any())
        <x-alert type="danger">
            <h6>ERRORS : </h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}"/>
            @error('email')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="{{old('password')}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Bio</label>
            <textarea class="form-control" name="bio">{{old('bio')}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input class="form-control" type="file" name="image">{{old('bio')}}</input>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-dark my-2 btn-block">Create</button>
        </div>
    </form>

</x-master>
