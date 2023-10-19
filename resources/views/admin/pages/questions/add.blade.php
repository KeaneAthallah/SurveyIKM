@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <h6>Tambah Pertanyaan</h6>
                <small class="">Silahkan Masukan Pertanyaan</small>
                <form method="POST" action="{{ route('store.questions') }}">
                    @csrf
                    <div class="row mb-3 mt-4">
                        <label for="no" class="col-sm-2 col-form-label">Nomor Pertanyaan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="no" name="no" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="questions_name" class="col-sm-2 col-form-label">Pertanyaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="questions_name" name="questions_name" autofocus>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
