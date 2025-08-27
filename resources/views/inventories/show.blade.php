@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventory Show') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <input value="{{ $inventory->name}}" type="text" name="name" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label>Quantity</label>
                        <input value="{{ $inventory->quantity}}" type="text" name="quantity" class="form-control" readonly>
                    </div>
                     <div class="mb-3">
                        <label>Color</label>
                        <input value="{{ $inventory->color}}" type="text" name="color" class="form-control" readonly>
                    </div>

                        <div class="mb-3">
                        <label>Serial No</label>
                        <input value="{{ $inventory->serial_no}}" type="text" name="serial_no" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('inventories.index') }}"
                        class="btn btn-secondary">
                        Back to Inventory Index
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
