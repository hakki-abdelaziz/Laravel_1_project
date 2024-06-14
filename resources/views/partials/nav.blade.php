

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="/">Learn001</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('homepage')}}">Home</a>
            </li>

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('login.show')}}">Log In</a>
            </li>
            @endguest

            <li class="nav-item">
                <a class="nav-link" href="{{route('profiles.index')}}">Profiles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('profiles.create')}}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('settings.index')}}">Settings</a>
            </li>
        </ul>

        @auth
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>

                <a class="dropdown-item" href="{{route('login.logout')}}">Log Out</a>
            </div>
        </div>
        @endauth

    </div>
</nav>



