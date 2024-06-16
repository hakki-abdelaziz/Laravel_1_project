
<x-master title='Log In'>
    <div class="container w-75 my-2 bg-light p-5">

        <h3>LOG IN</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="login" class="form-control" value="{{old('login')}}" required/>
                @error('login')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">password</label>
                <input type="password" name="password" class="form-control" value="{{old('password')}}" required/>
            </div>
            <div class="d-grid">
                <button class="btn btn-dark">LOG IN</button>

            </div>
        </form>
            <div class="d-grid">
                <button class="btn btn-outline-dark mt-3"><a class="nav-link" href="{{route('profiles.create')}}">SIGN UP</a></button>
            </div>
    </div>


</x-master>


