@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 style="margin-left: 0px; color: #63AC59">
                <i class="fas fa-arrow-circle-left"></i>
            </h1>
            <div data-bss-parallax-bg="true"
                style="height: 500px;margin-left: 34px;margin-right: 44px;margin-bottom: 39px;margin-top: 27px;padding-bottom: 0px;background: url(&quot;https://i.pinimg.com/564x/9a/08/2e/9a082e273c6b589a344fc9bb17e27286.jpg&quot;) center / cover, url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
            </div>
            <h1 style="margin-left: 46px;">Perbaikan Gorong-Gorong
                <i class="fas fa-info-circle" style="font-size: 30px;margin-left: 1000px;"></i>
            </h1>
            <p
                style="margin-left: 48px;margin-bottom: 13px;margin-top: -3px;font-size: 18px;color: rgb(139,139,139);font-style: italic;">
                Jl. Soekarno Hatta No. 21134</p>
            <p
                style="margin-left: 48px;margin-right: 73px;margin-top: -18px;font-size: 21px;padding-bottom: 0px;margin-bottom: -19px;">
                <br>Air Terjun Coban Wilis terletak dihulu Kali Semut di kawasan gunung Kelud. Air Terjun ini terdiri
                dari
                tiga
                rangkaian,<br>Air terjun ketiga (air terjun utama) tingginya kurang lebih 100 meter terletak di hilir
                dari
                air
                terjun pertama dan kedua, air terjun ke dua yang paling kecil, sementara air terjun yang pertama lebih
                menarik
                karena bertingkat, sayang untuk sampai disana belum ada jalurnya kecuali mau menyusuri lewat sungai yang
                masih
                sulit medannya.<br><br><br>
            </p>

            <div class="card" style="margin-left: 43px;margin-right: 89px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-9">
                            <h4 style="margin-right: 100px;padding-right: 300px;">Progress 1</h4>
                        </div>
                        <div class="col"><button class="btn btn-primary" type="button" style="width: 171.5px; margin-left: 1200px; background: #63AC59;">selengkapnya</button>
                        </div>

                    </div>
                    <h6 class="text-muted card-subtitle mb-2" style="margin-right: 175px;padding-right: 118px;">
                        <strong>13
                            desember 2022</strong>, proses perbaikan sudah mencapai 60%&nbsp;
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-9">
                            <h4 style="margin-right: 100px;padding-right: 300px;">Progress 2</h4>
                        </div>
                        <div class="col"><button class="btn btn-primary" type="button"
                                style="width: 171.5px; margin-left: 1200px; background: #63AC59;">selengkapnya</button>
                        </div>
                    </div>
                    <h6 class="text-muted card-subtitle mb-2" style="margin-right: 175px;padding-right: 118px;">
                        <strong>19
                            desember 2022</strong>, proses perbaikan sudah mencapai 80%&nbsp;
                    </h6>
                </div>
            </div>

            <section class="photo-gallery py-4 py-xl-5">
                <div class="container">
                    <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">

                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img
                                    class="img-fluid" src="img/cf70c61c5ea5fb148994389f23b9a3b5.jpg" width="364"
                                    height="242"></a></div>
                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img
                                    class="img-fluid" src="img/cf70c61c5ea5fb148994389f23b9a3b5.jpg" width="364"
                                    height="242"></a></div>
                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img
                                    class="img-fluid" src="img/cf70c61c5ea5fb148994389f23b9a3b5.jpg" width="365"
                                    height="243"></a></div>
                    </div>
                </div>
            </section>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokumen</th>
                            <th>Pemilik</th>
                            <th>tanggal</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                        <tr>
                            <td><strong>1</strong></td>
                            <td>Dokumen 1 Perbaikan</td>
                            <td>Joko Widodo</td>
                            <td>12 Desember 2022</td>
                            <td><button class="btn btn-primary" type="button">Download</button></td>
                        </tr>
                        <tr>
                            <td><strong>2</strong></td>
                            <td>Dokumen 2 Jalan Rusak</td>
                            <td>Joko Anwar</td>
                            <td>12 Desember 2022</td>
                            <td><button class="btn btn-primary" type="button">Download</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/bs-init.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
            <script src="assets/js/Lightbox-Gallery.js"></script>
        </div>
    </div>
    </div>
    </div>
@endsection
