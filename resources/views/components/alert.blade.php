<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session()->get('message') }}</strong>
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session()->get('error') }}</strong>
        </div>
    @endif 
</div>