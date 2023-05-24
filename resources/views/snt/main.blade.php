<!DOCTYPE html>
<html class=" sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox picture srcset webworkers" style="transform: none;" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="{{ asset("js/wow.min.js") }}"></script>

    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <script src="{{ asset("js/jquery.fancybox.min.js") }}"></script>

    <link rel="stylesheet" href="{{ asset("css/jquery.fancybox.css") }}">

    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --color-primary: #e3363e;
            --color-secondary: #2d3d8b;
            --color-danger: #e3363e;
            --primary-font: 'Open Sans', sans-serif;
            --color-muted : #000;

        }

        *{
            /* font-family: 'Open Sans', sans-serif; */
            /* font-family: 'Open Sans Light', sans-serif; */
            font-family: 'Open Sans Condensed', sans-serif;
        }

        .editor p{
            font-size: 1.1rem;
            line-height: 1.75;
        }

        .editor figure{
            margin-bottom: 30px !important;
            margin: auto;
        }

        .editor figure img {
            border-radius: 10px;
            max-width: 100%;
        }
        .container p {
            /* font-size: 1rem; */
            line-height: 2;
        }

        p img {
            border-radius: 5px;
            margin-right: 5px;
            width: 230px !important;
            height: 230px !important;
        }

        td{
            padding: 10px !important;
            font-family: inherit;
        }

        a{
            text-decoration: none !important;
        }

        .container p {
            line-height: 1.5 !important;
        }
    </style>

</head>
<body>
    <div class="scroll-progress primary-bg"></div>
    @include('includes.sidebar')
    @include('includes.header')
    @include('includes.search')

    <main>
        <div class="container-fluid" style="transform: none;">
            @yield('content')
        </div>
    </main>

    @include('includes.footer')

</body>
</html>
