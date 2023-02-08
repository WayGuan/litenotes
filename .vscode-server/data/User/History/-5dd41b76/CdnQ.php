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
    <div class="flex justify-center  space-x-4 divide-y">
        <nav class="flex justify-center space-x-4">
            <a href="/home"
                class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a>
            <a href="/team"
                class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Team</a>
            <a href="/projects"
                class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Projects</a>
            <a href="/about"
                class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">About</a>
        </nav>

        <section class="absolute right-0">
            @yield('name')
            {{-- <?php echo gettype($name)?> --}}
            <?php echo isset($name)?>
            @if (isset($name))
                hello @echo haha
            @else
            <?php gettype($name)?>
            @endif
        </section>

    </div>
    <section>
        @yield('content')
    </section>
</body>

</html>
