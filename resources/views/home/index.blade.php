@extends('home.layouts.main')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid wow fadeIn mb-5 p-0" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1">
                    <img class="img-fluid" src="{{ asset('home/img/IMG_6970.jpg') }}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="{{ asset('home/img/IMG_7946.jpg') }}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="{{ asset('home/img/IMG_7447.jpg') }}" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('home/img/IMG_6970.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-uppercase animated zoomIn mb-4 text-white"></h4>
                            <h1 class="display-1 animated zoomIn mb-0 text-white">Pelantikan Walikota Palu</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('home/img/IMG_7946.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-uppercase animated zoomIn mb-4 text-white"></h4>
                            <h1 class="display-1 animated zoomIn mb-0 text-white">Pelantikan TP-PKK</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('home/img/IMG_7447.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-uppercase animated zoomIn mb-4 text-white">
                            </h4>
                            <h1 class="display-1 animated zoomIn mb-0 text-white">
                                Kunjungan Huntara Petobo</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light h-100 rounded p-5 text-center">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">IKM Saat ini</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">
                            {{ round($surveys->sum('total_IKP') / $surveys->count()) }}</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light h-100 rounded p-5 text-center">
                        <i class="fa fa-bullseye fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">IKM Target</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">{{ $periode[0]->target }}</h1>
                        <p class="display-7 mt-3">Periode</p>
                        <p class="display-7 mt-3">{{ $periode[0]->mulai }} s/d {{ $periode[0]->akhir }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light h-100 rounded p-5 text-center">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Total Responden</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">{{ $surveys->count() }}</h1>
                    </div>
                </div>

            </div>
            <div class="row g-4 justify-content-center mt-2">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light h-100 rounded p-5 text-center">
                        <h5 class="mb-3 mt-0">Responden</h5>
                        <hr class="border-primary border-3 border opacity-75">
                        <div class="row mt-2">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">Jumlah</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">{{ $surveys->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <hr class="border-primary border-3 border opacity-75">
                        <div class="row mt-2">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">pria</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('gender', 'laki-laki')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">wanita</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('gender', 'perempuan')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <hr class="border-primary border-3 border opacity-75">
                        <p class="display-10 mb-0 text-center">Pendidikan</p>
                        <div class="row mt-2">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">SD</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('education', 'sd')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">SMP</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('education', 'smp')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">SMA</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('education', 'sma')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">S1</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('education', 's1')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">S2</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('education', 's2')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="display-10 mb-0 text-end">S3</p>
                            </div>
                            <div class="col">
                                <p class="display-10 mb-0 text-end" data-toggle="counter-up">
                                    {{ $surveys->where('education', 's3')->count() }}</p>
                            </div>
                            <div class="col">
                                <p class="display-10 text-start">orang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="wow fadeInUp mx-auto mb-5 text-center" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title text-primary bg-white px-3 text-center">Testimonial</h6>
                    <h1 class="display-6 mb-4">Kritik dan Saran!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($comments as $comment)
                        <div class="testimonial-item bg-light rounded p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="ms-4">
                                    <h5 class="mb-1" style="text-transform: capitalize">{{ $comment->class }}</h5>
                                    <span>{{ $comment->date }}</span>
                                </div>
                            </div>
                            <p class="mb-0">{{ $comment->comment }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    @endsection
