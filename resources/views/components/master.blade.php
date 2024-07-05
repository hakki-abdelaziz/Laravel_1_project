<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Learn001 | {{$title}}</title>
</head>
<body>
    @include('partials.nav')
    {{-- <x-alert type="warning">
        <strong>may I have your attention please</strong>
    </x-alert> --}}
    <main>
        <div class="container p-5">
            <div class="row my-3">
                @include('partials.flashbag')
            </div>
            {{$slot}}
        </div>

    </main>

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>

