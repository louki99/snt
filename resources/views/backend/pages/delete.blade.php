@extends('snt.master')
@section('content')

 <div class="container card p-2">
    <div id="BlockUIConfirm" class="BlockUIConfirm">
        <div>
            <div class="confirm-header row-dialog-hdr-success">
                Confirmation
            </div>
            <div class="confirm-body">
                Are you sure you want to delete the page?
            </div>
            <div class="confirm-btn-panel pull-right">
                <div class="btn-holder pull-right">
                    <div style="display: flex;">
                        <form method="post" action="{{ route('pages.delete',$slug) }}" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="row-dialog-btn btn btn-success" value="Yes, Accept" onclick="Submit();" />
                        </form>

                        <a rel="stylesheet" href="{{ route("list.pages") }}" class="row-dialog-btn btn btn-naked">Annuler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection


<style>

    .RowDialogBody {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 400px;
        opacity: 1;
        background-color: white;
        border-radius: 4px;
    }

    .RowDialogBody > div:not(.confirm-body) {
        padding: 8px 10px;
    }

    .confirm-header {
        width: 100%;
        border-radius: 4px 4px 0 0;
        font-size: 13pt;
        font-weight: bold;
        margin: 0;
    }

    .row-dialog-hdr-success {
        border-top: 4px solid #5cb85c;
        border-bottom: 1px solid transparent;
    }

    .row-dialog-hdr-info {
        border-top: 4px solid #5bc0de;
        border-bottom: 1px solid transparent;
    }

    .confirm-body {
        border-top: 1px solid #ccc;
        padding:20px 10px;
        border-bottom: 1px solid #ccc;
    }

    .confirm-btn-panel {
        width: 100%;
    }
    .row-dialog-btn {
        cursor: pointer;
    }

    .btn-naked {
        background-color: transparent;
    }

</style>
