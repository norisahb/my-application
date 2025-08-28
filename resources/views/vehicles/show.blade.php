@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ $vehicle->name}} " type="text" class="form-control" id="name" name="name" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="plat_no" class="form-label">Plat No</label>
                            <input value="{{ $vehicle->plat_no}} " type="number" class="form-control" id="plat_no" name="plat_no" readonly>
                        </div>

                         <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input value="{{ $vehicle->color}} "  type="text" class="form-control" id="color" name="color" readonly>
                        </div>


                        <div class="form-group">
                        <a href="{{ route('vehicles.index') }}"
                        class="btn btn-secondary">
                        Back to Vehicle Index
                        </a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
