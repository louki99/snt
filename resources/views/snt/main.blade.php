<!DOCTYPE html>
<html class=" sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox picture srcset webworkers" style="transform: none;" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="{{ asset("js/wow.min.js") }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> --}}

    @vite(['resources/js/app.js'])

    <style>
        :root {
            --color-primary: #e3363e;
            --color-secondary: #2d3d8b;
            --color-danger: #e3363e;
            --primary-font: 'Poppins', sans-serif;
            --color-muted : #000;
        }

        .editor p{
            font-size: 1.1rem;
            /* text-align: center; */
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
