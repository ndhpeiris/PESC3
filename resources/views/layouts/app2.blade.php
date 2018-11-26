
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	@include('head')
</head>
<body>
    <div id="app">
        @include('header')

        <main class="py-4">
            @yield('content')
        </main>
	</div>
	@include('footer')
</body>
@include('feet')
</html>
