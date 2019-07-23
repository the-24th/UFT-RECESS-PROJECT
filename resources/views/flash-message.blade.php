
@if($message = Session::get('success'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        <strong>{{$message}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
@endif

@if($message = Session::get('failure'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show" style="background-color:pink;border-color:lightcoral">
        <span class="badge badge-pill badge-success" style="background-color:red">SORRY!</span>
        <strong>{{$message}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
@endif
