<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ENS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="this is content">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        @include('includes.backend.header')

        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="scrollbar-sidebar">
                   @include('includes.backend.sidebar')
                </div>
            </div>
            <div class="app-main__outer">
               this is content
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/master.js') }}"></script>

</body>

</html>
