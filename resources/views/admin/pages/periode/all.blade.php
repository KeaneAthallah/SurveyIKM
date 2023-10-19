@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Atur Periode</h6>
                    {{-- <a href="{{ route('add.periode') }}" class="btn btn-primary m-2"><i class="fa fa-plus me-2"></i>Tambah
                        Periode</a> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mulai</th>
                                <th scope="col">Akhir</th>
                                <th scope="col">Target IKM</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periodes as $periode)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $periode->mulai }}</td>
                                    <td>{{ $periode->akhir }}</td>
                                    <td>{{ $periode->target }}</td>
                                    <td>
                                        <a href="{{ route('edit.periode', $periode->id) }}" class="btn btn-warning">Edit</a>
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
