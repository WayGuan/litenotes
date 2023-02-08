<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="flex justify-center space-x-4">
        <a href="/home"
            class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a>
        <a href="/about"
            class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">About</a>

        <span class="absolute right-0">
            {{-- <?php echo gettype($name); ?> --}}
            <?php echo isset($name); ?>
            @if (isset($name))
                hello {{ $name }}
            @else
                Hey @yield('name')
            @endif
            </section>
    </nav>

    <section>
        @yield('content')
    </section>
</body>

</html>
