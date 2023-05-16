<!DOCTYPE html>
<html class=" sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox picture srcset webworkers" style="transform: none;" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="{{ asset("js/wow.min.js") }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>


    @vite(['resources/js/app.js'])

    <style>
        :root {
            --color-primary: #1a9002;
            --color-secondary: #2d3d8b;
            --color-danger: #e3363e;
            --primary-font: 'Poppins', sans-serif;
            --color-muted : #000;
        }
    </style>

</head>
<body>
    <div class="scroll-progress primary-bg"></div>
    @include('includes.sidebar')
    @include('includes.header')
    @include('includes.search')

    <main>
        <div class="container" style="transform: none;">
            @yield('content')
        </div>
    </main>

    @include('includes.footer')
</body>
</html>
