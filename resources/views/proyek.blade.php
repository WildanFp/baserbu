@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="col-md-auto">
                <div class="dropdown">
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
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/proyek.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><span class="font-weight-bold text-primary">Pembangunan
                                    Gorong-Gorong</span></h5>
                            <p class="card-text">Jl. Soekarno Hatta No.21122</p>

                            <div class="mb-4">
                                <span class="font-weight-bold">Mujianto</span>
                            </div>
                            <div class="row">

                                <a class="btn btn-success" href="{{ route('detail_proyek') }}">
                                    Go Details
                                </a>
                                <i class="far fa-edit"
                                    style="font-size: 18px;padding-left: 0px;margin-left: 100px; margin-right:10px"></i>
                                <form method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <i class="fas fa-trash-alt"
                                        style="color: rgb(255,55,55);font-size: 18px;margin-left: 17px;"></i>
                                    {{-- <button type="submit" class="btn btn-sm btn-danger">Delete</button> --}}
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/proyek.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><span class="font-weight-bold text-primary">Pembangunan
                                    Gorong-Gorong</span></h5>
                            <p class="card-text">Jl. Soekarno Hatta No.21122</p>

                            <div class="mb-4">
                                <span class="font-weight-bold">Mujianto</span>
                            </div>
                            <div class="row">

                                <a class="btn btn-success" href="{{ route('detail_proyek') }}">
                                    Go Details
                                </a>
                                <i class="far fa-edit"
                                    style="font-size: 18px;padding-left: 0px;margin-left: 100px; margin-right:10px"></i>
                                <form method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <i class="fas fa-trash-alt"
                                        style="color: rgb(255,55,55);font-size: 18px;margin-left: 17px;"></i>
                                    {{-- <button type="submit" class="btn btn-sm btn-danger">Delete</button> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/proyek.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><span class="font-weight-bold text-primary">Pembangunan
                                    Gorong-Gorong</span></h5>
                            <p class="card-text">Jl. Soekarno Hatta No.21122</p>

                            <div class="mb-4">
                                <span class="font-weight-bold">Mujianto</span>
                            </div>
                            <div class="row">

                                <a class="btn btn-success" href="{{ route('detail_proyek') }}">
                                    Go Details
                                </a>
                                <i class="far fa-edit"
                                    style="font-size: 18px;padding-left: 0px;margin-left: 100px; margin-right:10px"></i>
                                <form method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <i class="fas fa-trash-alt"
                                        style="color: rgb(255,55,55);font-size: 18px;margin-left: 17px;"></i>
                                    {{-- <button type="submit" class="btn btn-sm btn-danger">Delete</button> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
