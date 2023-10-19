@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <h6>Tambah Periode</h6>
                <small class="">Silahkan Masukan Pertanyaan</small>
                <form method="POST" action="{{ route('store.periode') }}">
                    @csrf
                    <div class="row mb-3 mt-4">
                        <label for="mulai" class="col-sm-2 col-form-label">Mulai</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="mulai" name="mulai" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="akhir" class="col-sm-2 col-form-label">Akhir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="akhir" name="akhir">
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="target" class="col-sm-2 col-form-label">Target IKM</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="target" name="target">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
