@extends('layout.master')
@section('title', 'Bobot AHP')
@section('content')
    <!-- Basic Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Input Bobot AHP</strong></h2>
                    <div class="row col-lg-1">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addModal">
                            Tambah
                        </button>
                    </div>
                </div>
                <div class="body">
                    <p>Data Penerima bantuan Desa Cagak Agung, Cerme, Gresik</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kriteria B</th>
                                    <th>Kriteria A</th>
                                    <th>Nilai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datainputbobotahp as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->kriteria_1 }}</td>
                                        <td>{{ $d->kriteria_2 }}</td>
                                        <td>{{ $d->nilai }}</td>
                                        <td style="text-right">
                                            <a href="">edit</a>
                                            <a data-toggle="modal" data-target="#exampleModalCenter"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    apakah anda yakin menghapus data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Bobot AHP</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_validation" action="{{ route('alternatif.simpan') }}" method="POST">
                        @csrf
                        <div class="form-group form-float">
                            Nama Alternatif <input type="text" class="form-control" placeholder="Nama Alternatif"
                                name="nama_alternatif" required>
                        </div>
                        <div class="form-group form-float">
                            Alamat
                            <select class="form-control show-tick ms select2" name="alamat" data-placeholder="Select">
                                <option></option>
                                <option value="Dusun Cagak">Dusun Cagak</option>
                                <option value="Dusun Agung">Dusun Agung</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            RT
                            <select class="form-control show-tick ms select2" name="rt" data-placeholder="Select">
                                <option></option>
                                <option value="001">001</option>
                                <option value="002">002</option>
                                <option value="003">003</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            RW
                            <select class="form-control show-tick ms select2" name="rw" data-placeholder="Select">
                                <option></option>
                                <option value="001">001</option>
                                <option value="002">002</option>
                                <option value="003">003</option>
                            </select>
                        </div>

                        <div class="form-group form-float">
                            NIK <input type="number" class="form-control" placeholder="Nomor Induk Keluarga" name="nik"
                                required>
                        </div>
                        <div class="form-group form-float">
                            NO.KK <input type="number" class="form-control" placeholder="Nomor Kartu Keluarga"
                                name="no_kk" required>
                        </div>
                        <div class="form-group form-float">
                            NO.HP <input type="text" class="form-control" placeholder="Nomor Telephone" name="no_hp"
                                required>
                        </div>
                        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@stop
