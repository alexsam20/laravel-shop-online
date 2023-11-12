@if(\Illuminate\Support\Facades\Session::has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Error!</h4>{{ \Illuminate\Support\Facades\Session::get('error') }}
</div>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>{{ \Illuminate\Support\Facades\Session::get('success') }}
</div>
@endif
