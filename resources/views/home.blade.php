@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenidos </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
                        
                        <a href="{{route('items.index')}}" class="list-group-item list-group-item-action active">Items</a>
                        <a href="" class="list-group-item list-group-item-action">Clientes</a>
                        <a href="" class="list-group-item list-group-item-action">Invoices</a>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
