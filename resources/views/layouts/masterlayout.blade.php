<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mehedi Alam - @yield('title', 'Website')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    @stack('style')
</head>

<body>

    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('news') }}">News</a></li>
            <li><a href="{{ route('contact-us') }}">Contact</a></li>
        </ul>
    </header>

    <section>
        <aside>
            <nav>
                @section('sidebar')
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                    </ul>
                @show
            </nav>
        </aside>

        <article>
            @hasSection('content')
                @yield('content')
            @else
                <h2>No content Found.</h2>
            @endif

        </article>
    </section>

    <footer>
        Copyright 2023 by Mehedi Alam. All Rights Reserved.
    </footer>


    @stack('scripts')
</body>

</html>
