@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$vehicle->name}}" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="plat_no" class="form-label">Plat No</label>
                            <input type="plat_no" value="{{$vehicle->plat_no}}" class="form-control" id="plat_no" name="plat_no" required>
                        </div>


                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" value="{{$vehicle->color}}" class="form-control" id="color" name="color" required>
                        </div>


                        <button type="submit" class="btn btn-primary">Edit Vehicle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
