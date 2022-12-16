@extends('layouts.admin')

@section('main-content')
    <div class="main-body">
        <form class="shadow p-3 mb-5 bg-white rounded">
            <h1 style="margin-left: 0px; color: #63AC59">
                <i class="fas fa-arrow-circle-left"></i>
            </h1>
            <div style="margin-top: 35px; margin-left: 20px">
                <div class="mb-3 row">
                    <label for="judulKegiatan" class="col-sm-3 col-form-label">Judul Kegiatan</label>
                    <div class="col">
                        <input type="text" class="form-control" id="judulKegiatan" placeholder="Pilih Kegiatan"
                            required />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="judulLaporan" class="col-sm-3 col-form-label">Judul Laporan</label>
                    <div class="col">
                        <input type="text" class="form-control" id="judulLaporan" placeholder="Ketik Judul Lapporan Anda"
                            required />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lokasiKegiatan" class="col-sm-3 col-form-label">Lokasi Kegiatan</label>
                    <div class="col">
                        <input type="text" class="form-control" id="lokasiKegiatan" placeholder="Ketik Lokasi Kegiatan"
                            required />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsiKegiatan" class="col-sm-3 col-form-label">Deskripsi Kegiatan</label>
                    <div class="col">
                        <textarea class="form-control" id="deskirpsiKegiatan" rows="3" placeholder="Ketik Deskripsi Kegiatan" required></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="progress" class="col-sm-3 col-form-label">Progres</label>
                    <div class="col">
                        <textarea class="form-control" id="progress" rows="3" placeholder="Deskripsi progress terbaru..." required></textarea>
                    </div>

                </div>
                <button class="btn btn-primary" type="button"
                    style="margin-left: 450px; margin-bottom: 10px; width: 365.5px;background: rgb(61, 173, 61);">Tambah
                    Progress
                    Baru</button>
                <div class="mb-3 row">
                    <label for="tanggalMulai" class="col-sm-3 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tanggalMulai" required />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-3 col-form-label">Bidang</label>
                    <div class="col-sm-6">
                        <select class="browser-default custom-select border border-secondary border-opacity-25 rounded"
                            id="statusLaporan">
                            <option selected>Pilih bidang...</option>
                            <option value="1">Bidang Perencanaan Pembangunan Daerah</option>
                            <option value="2">Bidang Perencanaan Pengendalian dan Evaluasi</option>
                            <option value="3">Bidang Ekonomi dan Sumber Daya Alam</option>
                            <option value="4">Bidang Pemerintahan dan Pembangunan Manusia</option>
                            <option value="5">Bidang Infrastruktur dan Kewilayahan</option>
                            <option value="6">Sekretariat</option>
                            <option value="7">Media Sosial</option>
                        </select>
                        <!-- <input list="bidang" name="bidang" id="bidang" placeholder="Pilih bidang...">
                                                          <datalist id="bidang">
                                                            <option value="Bidang Perencanaan Pembangunan Daerah">
                                                            <option value="Bidang Perencanaan Pengendalian dan Evaluasi">
                                                            <option value="Bidang Ekonomi dan Sumber Daya Alam">
                                                            <option value="Bidang Pemerintahan dan Pembangunan Manusia">
                                                            <option value="Bidang Infrastruktur dan Kewilayahan">
                                                            <option value="Sekretariat">
                                                            <option value="Media Sosial">
                                                          </datalist> -->
                        <!-- <div class="dropdown">
                                                            <button class="btn btn-outline-secondary dropdown-toggle border border-opacity-25" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Semua Bidang
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                              <a class="dropdown-item" href="#">Bidang Perencanaan Pembangunan Daerah</a>
                                                              <a class="dropdown-item" href="#">Bidang Perencanaan Pengendalian dan Evaluasi</a>
                                                              <a class="dropdown-item" href="#">Bidang Ekonomi dan Sumber Daya Alam</a>
                                                              <a class="dropdown-item" href="#">Bidang Pemerintahan dan Pembangunan Manusia</a>
                                                              <a class="dropdown-item" href="#">Bidang Infrastruktur dan Kewilayahan</a>
                                                              <a class="dropdown-item" href="#">Sekretariat</a>
                                                              <a class="dropdown-item" href="#">Media Sosial</a>
                                                            </div>
                                                          </div> -->
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="statusLaporan" class="col-sm-3 col-form-label">Status Laporan</label>
                    <div class="col-sm-6">
                        <div class="" style="height: 2rem">
                            <select class="browser-default custom-select border border-secondary border-opacity-25 rounded"
                                id="statusLaporan">
                                <option selected>Status Kegiatan</option>
                                <option value="1">Progress</option>
                                <option value="2">Selesai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="filePendukung" class="col-sm-3 col-form-label">File Pendukung</label>

                    <div class="col">
                        <div id="container">
                            <div class="drop">

                                <div class="cont"><i class="fa fa-cloud-upload"></i>
                                    <div class="tit">
                                        Seret/pilih file di bawah ini
                                    </div>

                                    <input id="files" multiple name="files[]" type="file" />


                                    <div class="browse">

                                        click here to browse
                                    </div>
                                </div>
                                <output id="list"></output>

                            </div>


                        </div>
                        <div id="container">
                            <div class="drop">

                                <div class="cont"><i class="fa fa-cloud-upload"></i>
                                    <div class="tit">
                                        Seret/pilih foto di bawah ini
                                    </div>

                                    <input id="files" multiple name="files[]" type="file" />


                                    <div class="browse">

                                        click here to browse
                                    </div>
                                </div>
                                <output id="list"></output>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokumen</th>
                                <th>Pemilik</th>
                                <th>tanggal</th>
                                <th>hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                            <tr>
                                <td><strong>1</strong></td>
                                <td>Dokumen 1 Perbaikan</td>
                                <td>Joko Widodo</td>
                                <td>12 Desember 2022</td>
                                <td><button class="btn btn-danger" type="button">hapus</button></td>
                            </tr>
                            <tr>
                                <td><strong>2</strong></td>
                                <td>Dokumen 2 Jalan Rusak</td>
                                <td>Joko Anwar</td>
                                <td>12 Desember 2022</td>
                                <td><button class="btn btn-danger" type="button">hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection
