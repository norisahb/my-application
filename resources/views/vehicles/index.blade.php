@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Vehicles Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>No Plat</th>
                                <th>Warna</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->name }}</td>
                                    <td>{{ $vehicle->plat_no }}</td>
                                    <td>{{ $vehicle->color }}</td>
                                     <td>{{ $vehicle->user->name}} - {{ $vehicle->user->email }}</td>


                                 <td>
                                        <a
                                            href="{{ route('vehicles.show', $vehicle) }}"
                                            class="btn btn-info btn-sm">
                                            Show
                                        </a>
                                        <a
                                            href="{{ route('vehicles.edit', $vehicle) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <a
                                            href="{{ route('vehicles.destroy', $vehicle) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="confirm('Are you sure you want to delete this vehicle?') || event.preventDefault();">
                                            Delete
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
