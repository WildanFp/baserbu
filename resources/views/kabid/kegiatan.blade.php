@extends('layouts.user')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row mt-4 mb-4">
                <div class="col-6">
                    <h3 class="heading-section">
                        <strong>Ekonomi dan Sumber Daya Alam</strong>
                    </h3>
                </div>
                <div class="" style="margin-left: 400px">
                    <a class="btn btn-success text-white rounded" style="height: 40px; width: 200px;">+ Tambah Kegiatan</a>
                </div>
                <div class="col-md-auto">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <button class="btn" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table" id="table_user">
                            <thead class="thead-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Jumlah Proyek</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Perbaikan Jalan</td>
                                    <td>2</td>
                                    <td class="row">
                                        <i class="far fa-edit" style="font-size: 18px; margin-right: 10px"></i>
                                        <form method="POST">
                                            @csrf @method('DELETE')
                                            <i class="fas fa-trash-alt"
                                                style="
                                            color: rgb(255, 55, 55);
                                            font-size: 18px;
                                            margin-left: 15px;
                                        "></i>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Perbaikan Jalan</td>
                                    <td>4</td>
                                    <td class="row">
                                        <i class="far fa-edit" style="font-size: 18px; margin-right: 10px"></i>
                                        <form method="POST">
                                            @csrf @method('DELETE')
                                            <i class="fas fa-trash-alt"
                                                style="
                                            color: rgb(255, 55, 55);
                                            font-size: 18px;
                                            margin-left: 15px;
                                        "></i>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Perbaikan Jalan</td>
                                    <td>1</td>
                                    <td class="row">
                                        <i class="far fa-edit" style="font-size: 18px; margin-right: 10px"></i>
                                        <form method="POST">
                                            @csrf @method('DELETE')
                                            <i class="fas fa-trash-alt"
                                                style="
                                            color: rgb(255, 55, 55);
                                            font-size: 18px;
                                            margin-left: 15px;
                                        "></i>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="dataTables_info" id="dtBasicExample_info" role="status" aria-live="polite">
                        Showing 1 to 10 of 57 entries
                    </div>
                </div>
                <div class="col" style="margin-left: 45%">
                    <div>
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="dtBasicExample_previous">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="0" tabindex="0"
                                    class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="1" tabindex="0"
                                    class="page-link">1</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="2" tabindex="0"
                                    class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="3" tabindex="0"
                                    class="page-link">3</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="4" tabindex="0"
                                    class="page-link">4</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="5" tabindex="0"
                                    class="page-link">5</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="6" tabindex="0"
                                    class="page-link">6</a>
                            </li>
                            <li class="paginate_button page-item next" id="dtBasicExample_next">
                                <a href="#" aria-controls="dtBasicExample" data-dt-idx="7" tabindex="0"
                                    class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
