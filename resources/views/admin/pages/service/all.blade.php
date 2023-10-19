@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Services</h6>
                    <a href="{{ route('add.services') }}" class="btn btn-primary m-2"><i class="fa fa-plus me-2"></i>Tambah
                        Service</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Service</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{ $service->no }}</th>
                                    <td>{{ $service->name }}</td>
                                    <td>
                                        <a href="{{ route('edit.services', $service->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('delete.services', $service->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
