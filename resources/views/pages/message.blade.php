

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    {{ session('success') }}
    <button type="button" style="top:9px" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" >&times;</span>
    </button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
    {{ session('error') }}
    <button type="button" style="top:9px" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" >&times;</span>
    </button>
</div>
@endif
