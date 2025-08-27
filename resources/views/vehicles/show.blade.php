vehicle@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Show') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <input value="{{ $vehicles->name}}" type="text" name="name" class="form-control" readonly>
                    </div>

                     <div class="mb-3">
                        <label>Color</label>
                        <input value="{{ $vehicles->color}}" type="text" name="color" class="form-control" readonly>
                    </div>

                        <div class="mb-3">
                        <label>Serial No</label>
                        <input value="{{ $vehicles->serial_no}}" type="text" name="serial_no" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('vehicles.index') }}"
                        class="btn btn-secondary">
                        Back to Vehicle Index
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
