@extends('home.layouts.main')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <form action="{{ route('store.comment') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Masukan Kritik dan Saran Anda
                                </h5>
                                <hr class="border border-primary border-3 opacity-75">
                                <div class="container">
                                    <div class="row mb-3 mt-4">
                                        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="date"
                                                autofocus value="{{ old('date') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <label for="class" class="col-sm-2 col-form-label">Jenis</label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select mb-3" id="class" name="class">
                                                <option value="kritik">Kritik</option>
                                                <option value="saran">Saran</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <label for="text" class="col-sm-2 col-form-label mb-4">Kritik Dan Saran</label>
                                        <textarea name="comment" id="text" cols="30" rows="10" value="{{ old('comment') }}"></textarea>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        <button type="submit"
                                            class="btn btn-lg btn-dark rounded-pill py-2 px-4">Save</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
