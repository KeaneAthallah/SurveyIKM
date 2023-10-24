@extends('home.layouts.main')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <form action="{{ route('store.survey') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">KUESIONER SURVEI KEPUASAN MASYARAKAT (SKM)
                                    PADA UNIT LAYANAN KECAMATAN PALU UTARA KOTA PALU
                                </h5>
                                <hr class="border-primary border-3 border opacity-75">
                                <div class="container">
                                    <div class="row mb-3 mt-4">
                                        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control @error('date') is-invalid @enderror"
                                                id="date" name="date" autofocus value="{{ old('date') }}">
                                            @error('date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <label for="time" class="col-sm-2 col-form-label">Waktu</label>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3" id="time" name="time">
                                                <option value="08.00 - 12.00*">08.00 - 12.00*</option>
                                                <option value="13.00 - 17.00*">13.00 - 17.00*</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="border-primary border-3 border opacity-75">
                                    <h3 class="text-center">Profil</h3>
                                    <div class="row mb-3 mt-4">
                                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3" id="gender" name="gender">
                                                <option value="laki-laki">Laki-Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <label for="age" class="col-sm-2 col-form-label">Usia Anda</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control @error('age') is-invalid @enderror"
                                                id="age" name="age" value="{{ old('age') }}">
                                            @error('age')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <label for="education" class="col-sm-2 col-form-label">Pendidikan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3" id="education" name="education">
                                                <option value="sd">SD</option>
                                                <option value="smp">SMP</option>
                                                <option value="sma">SMA</option>
                                                <option value="s1">S1</option>
                                                <option value="s2">S2</option>
                                                <option value="s3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <label for="ocupation" class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3" id="ocupation" name="ocupation">
                                                <option value="pns">PNS</option>
                                                <option value="tni">TNI</option>
                                                <option value="polri">Polri</option>
                                                <option value="swasta">Swasta</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <label for="service" class="col-sm-2 col-form-label">Jenis Layanan Diterima</label>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3" id="service" name="service">
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->name }}">{{ $service->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <hr class="border-primary border-3 border opacity-75">
                                    <div class="container-fluid">
                                        <h3 class="text-center">PENDAPAT RESPONDEN TENTANG PELAYANAN</h3>
                                        <div class="mt-5">
                                            @foreach ($questions as $question)
                                                <p>{{ $loop->iteration }}. {{ $question->questions_name }}</p>
                                                <div class="col-sm-10">
                                                    <select class="form-select mb-3" id="total"
                                                        name="no.{{ $question->no }}">
                                                        @foreach ($question->answer as $quest)
                                                            <option value="{{ $quest->value }}">
                                                                {{ $quest->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="d-grid d-md-flex justify-content-md-center gap-2">
                                            <button type="submit"
                                                class="btn btn-lg btn-dark rounded-pill px-4 py-2">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
