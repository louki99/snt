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


    <link   href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <script src="{{ asset("js/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>



    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <style>
        .modal-backdrop{
            z-index: 0;
        }
        .note-modal .modal-dialog{
            margin-top: 100px;
            z-index: 9;
        }
        select#page {
            font-size: 12px;
        }
        .app-page-title .page-title-subheading{
            font-size: 1.1rem !important;
        }

        .note-editing-area p {
            line-height: 1.5 !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                tabsize: 2,
                height: 100
            });
        });
    </script>

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
                <div class="app-main__inner">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('.editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckfinder.upload').'?_token='.csrf_token() }}'
                },
                toolbar: {
                    items: [
                        'undo', 'redo',
                        '|', 'heading',
                        '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                        '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                        '|', 'alignment',
                        'link', 'uploadImage', 'blockQuote', 'codeBlock',
                        '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                    ],
                    shouldNotGroupWhenFull: true
                }


            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}

    <script type="text/javascript" src="{{ asset('js/master.js') }}"></script>

    <script>
      const select = document.getElementById('layout');
      //const sectioncontext = document.getElementById('sectioncontext');
      //const sectionNormalPage = document.getElementById('sectionNormalPage');

      //sectioncontext.style.display = 'none';


    //   select.addEventListener('change', function() {
    //         if (this.value == 1) {
    //             sectioncontext.style.display = 'block';
    //             sectionNormalPage.style.display = 'none';
    //         } else {
    //             sectioncontext.style.display = 'none';
    //             sectionNormalPage.style.display = 'block';
    //         }
    //     });

    </script>

</body>

</html>
