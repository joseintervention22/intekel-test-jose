@if(session('message'))
<div class="alert alert-success" role="alert">
        <h4>Recibido</h4>
    <p>{{session('message')}}</p>
</div>
@endif