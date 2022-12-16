@extends('layouts.user')

@section('main-content')
    <div class="row">
        <div class="col-lg-8 mb-4">
            <!-- Project Card Example -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                    <div id="content">
                        <div class="col">
                            <div class="row" style="align-items: center;">
                                <figure class="img-profile rounded-circle avatar font-weight-bold"
                                    data-initial="{{ Auth::user()->name[0] }}"></figure>
                                <div class="col">
                                    <div class="col">
                                        <span>
                                            <h2 class="fw-bolder"><strong>{{ Auth::user()->name }}</strong></h2>
                                        </span>
                                        <span style="color: #AFAFAF;">Bappeda Kota Malang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <img src="img/logo.png" alt="" style="max-width: 750px;"><br>
                        </center>
                        <span class="fw-semibold">Kunjungan teman teman dari SEAL pada 19 November membahas tentang kegiatan
                            kerjasama pembuatan platform internal BAPPEDA
                        </span><br>
                        <span style="color: #AFAFAF;">#time</span>
                    </div>
                    <div id="content" class="mt-5">
                        <div class="col">
                            <div class="row" style="align-items: center;">
                                <figure class="img-profile rounded-circle avatar font-weight-bold"
                                    data-initial="{{ Auth::user()->name[0] }}"></figure>
                                <div class="col">
                                    <div class="col">
                                        <span>
                                            <h2 class="fw-bolder"><strong>{{ Auth::user()->name }}</strong></h2>
                                        </span>
                                        <span style="color: #AFAFAF;">Bappeda Kota Malang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <img src="img/logo.png" alt="" style="max-width: 750px;"><br>
                        </center>
                        <span class="fw-semibold">Kunjungan teman teman dari SEAL pada 19 November membahas tentang kegiatan
                            kerjasama pembuatan platform internal BAPPEDA
                        </span><br>
                        <span style="color: #AFAFAF;">#time</span>
                    </div>
                    <div id="content" class="mt-5">
                        <div class="col">
                            <div class="row" style="align-items: center;">
                                <figure class="img-profile rounded-circle avatar font-weight-bold"
                                    data-initial="{{ Auth::user()->name[0] }}"></figure>
                                <div class="col">
                                    <div class="col">
                                        <span>
                                            <h2 class="fw-bolder"><strong>{{ Auth::user()->name }}</strong></h2>
                                        </span>
                                        <span style="color: #AFAFAF;">Bappeda Kota Malang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <img src="img/logo.png" alt="" style="max-width: 750px;"><br>
                        </center>
                        <span class="fw-semibold">Kunjungan teman teman dari SEAL pada 19 November membahas tentang kegiatan
                            kerjasama pembuatan platform internal BAPPEDA
                        </span><br>
                        <span style="color: #AFAFAF;">#time</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Notifications -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Notifikasi</h6>
                </div>
                <div class="card-body">
                    <div class="col mb-4">
                        <div class="card bg-success" style="height: 10px; width: 100px">
                        </div>
                        <div class="text-center mt-2">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="{{ asset('img/svg/undraw_editable_dywm.svg') }}" alt="">
                        </div>
                        <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow"
                                href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg
                            images that you can use completely free and without attribution!</p>
                        <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw →</a>
                    </div>

                    <div class="col mb-4">
                        <div class="card bg-success text-white shadow " style="height: 10px; width: 100px">
                        </div>
                        <div class="row" style="align-items: center;">
                            <div class="col">
                                <div class="col mt-2">
                                    <span style="color: #AFAFAF;">{{ Auth::user()->name }} baru saja melakukan kegiatan
                                        user</span>
                                    <span>
                                        <h2 class="fw-bolder"><strong>Nama Kegiatan</strong></h2>
                                    </span>

                                </div>
                            </div>
                            <figure class="img-profile rounded-circle avatar font-weight-bold"
                                data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card bg-success text-white shadow " style="height: 10px; width: 100px">
                        </div>
                        <div class="row" style="align-items: center;">
                            <div class="col">
                                <div class="col mt-2">
                                    <span style="color: #AFAFAF;">{{ Auth::user()->name }} baru saja melakukan kegiatan
                                        user</span>
                                    <span>
                                        <h2 class="fw-bolder"><strong>Nama Kegiatan</strong></h2>
                                    </span>

                                </div>
                            </div>
                            <figure class="img-profile rounded-circle avatar font-weight-bold"
                                data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
