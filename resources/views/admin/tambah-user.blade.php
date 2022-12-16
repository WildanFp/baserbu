@extends('layouts.user')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 style="margin-left: 0px; color: #63AC59">
                <i class="fas fa-arrow-circle-left"></i>
            </h1>
            <div class="row mt-4 mb-4">
                <div class="col-6">
                    <h3 class="heading-section">
                        <strong>Tambah User</strong>
                    </h3>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judulLaporan" class="col-sm-3 col-form-label">Nama User</label>
                <div class="col">
                    <input type="text" class="form-control" id="judulLaporan" placeholder="Ketik Nama User" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judulLaporan" class="col-sm-3 col-form-label">NIP</label>
                <div class="col">
                    <input type="text" class="form-control" id="judulLaporan" placeholder="Ketik NIP" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judulLaporan" class="col-sm-3 col-form-label">Password</label>
                <div class="col">
                    <input type="text" class="form-control" id="judulLaporan" placeholder="Ketik Password" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bidang" class="col-sm-3 col-form-label">posisi</label>
                <div class="col-sm-6">
                    <select class="browser-default custom-select border border-secondary border-opacity-25 rounded"
                        id="statusLaporan">
                        <option selected>Pilih Posisi User...</option>
                        <option value="1">bagian tersakiti</option>
                        <option value="2">bagian menyakiti</option>
                        <option value="3">bagian nt terus</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>
    </div>
@endsection
