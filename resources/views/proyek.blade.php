@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="col-md-auto">
                <div class="dropdown" style="margin-bottom:20px">
                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Semua Bidang
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Bidang Perencanaan Pembangunan Daerah</a>
                        <a class="dropdown-item" href="#">Bidang Perencanaan Pengendalian dan Evlauasi</a>
                        <a class="dropdown-item" href="#">Bidang Ekonomi dan Sumber Daya Alam</a>
                        <a class="dropdown-item" href="#">Bidang Pemerintahan dan Pembangunan Manusia</a>
                        <a class="dropdown-item" href="#">Bidang Infrastruktur dan Kewilayahan</a>
                        <a class="dropdown-item" href="#">Sekretariat</a>
                        <a class="dropdown-item" href="#">Media Sosial</a>
                    </div>
                    <button class="btn btn-success" type="button"
                        style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px; margin-left:40px"><i
                            class="fas fa-filter" style="margin-right: 7px;"></i>filter</button>
                </div>

            </div>
            <div class="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/proyek.jpg"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-clipboard"></i> Progress</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Perbaikan Gorong-gorong</a>
                                </h4>
                                <p class="blog-card-description">Jl. Soekarno Hatta, Kota Malang</p>
                                <div class="ftr">
                                    <div class="author">
                                        <div class="stats"> <i class="far fa-calendar-alt"></i> Des 22, 2022 </div>
                                    </div>
                                    <div class="stats"> <i class="far fa-edit"
                                            style="font-size:20px;margin-right:10px"></i> <i
                                            class="fas fa-trash text-danger" style="font-size:20px"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/proyek.jpg"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-check"></i> done</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Pelebaran Jalan</a>
                                </h4>
                                <p class="blog-card-description">Jl. Soekarno Hatta, Kota Malang</p>
                                <div class="ftr">
                                    <div class="author">
                                        <div class="stats"> <i class="far fa-calendar-alt"></i> Des 22, 2022 </div>
                                    </div>
                                    <div class="stats"> <i class="far fa-edit"
                                            style="font-size:20px;margin-right:10px"></i> <i
                                            class="fas fa-trash text-danger" style="font-size:20px"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/proyek.jpg"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-clipboard"></i> Progress</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Pengawasan Perbaikan</a>
                                </h4>
                                <p class="blog-card-description">Jl. Soekarno Hatta, Kota Malang</p>
                                <div class="ftr">
                                    <div class="author">
                                        <div class="stats"> <i class="far fa-calendar-alt"></i> Des 22, 2022 </div>
                                    </div>
                                    <div class="stats"> <i class="far fa-edit"
                                            style="font-size:20px;margin-right:10px"></i> <i
                                            class="fas fa-trash text-danger" style="font-size:20px"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/proyek.jpg"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-clipboard"></i> Progress</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Pengawasan Perbaikan</a>
                                </h4>
                                <p class="blog-card-description">Jl. Soekarno Hatta, Kota Malang</p>
                                <div class="ftr">
                                    <div class="author">
                                        <div class="stats"> <i class="far fa-calendar-alt"></i> Des 22, 2022 </div>
                                    </div>
                                    <div class="stats"> <i class="far fa-edit"
                                            style="font-size:20px;margin-right:10px"></i> <i
                                            class="fas fa-trash text-danger" style="font-size:20px"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/proyek.jpg"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-clipboard"></i> Progress</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Pengawasan Perbaikan</a>
                                </h4>
                                <p class="blog-card-description">Jl. Soekarno Hatta, Kota Malang</p>
                                <div class="ftr">
                                    <div class="author">
                                        <div class="stats"> <i class="far fa-calendar-alt"></i> Des 22, 2022 </div>
                                    </div>
                                    <div class="stats"> <i class="far fa-edit"
                                            style="font-size:20px;margin-right:10px"></i> <i
                                            class="fas fa-trash text-danger" style="font-size:20px"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/proyek.jpg"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-clipboard"></i> Progress</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Pengawasan Perbaikan</a>
                                </h4>
                                <p class="blog-card-description">Jl. Soekarno Hatta, Kota Malang</p>
                                <div class="ftr">
                                    <div class="author">
                                        <div class="stats"> <i class="far fa-calendar-alt"></i> Des 22, 2022 </div>
                                    </div>
                                    <div class="stats"> <i class="far fa-edit"
                                            style="font-size:20px;margin-right:10px"></i> <i
                                            class="fas fa-trash text-danger" style="font-size:20px"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
