@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <h6>Tambah Services</h6>
                <small class="">Silahkan Masukan Services</small>
                <form method="POST" action="{{ route('store.services') }}">
                    @csrf
                    <div class="row mb-3 mt-4">
                        <label for="no" class="col-sm-2 col-form-label">Nomor Services</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="no" name="no" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="name" class="col-sm-2 col-form-label">Services</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" autofocus>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
