@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <p>Por favor corrija los errores debajo</p>
    <p>{{$errors->first()}}</p>

</div>
@endif