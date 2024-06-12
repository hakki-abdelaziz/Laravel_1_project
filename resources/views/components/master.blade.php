<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.esm.min.js" integrity="sha512-p6KKvRUjLcXZtvsFd+01s4jcHKu0PNWplQNHeEHmq+27tF5osNRRNkziDu45B5Mo+0+DE/k1qD0ZI29DHEutww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

