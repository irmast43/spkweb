@extends('layout.master')
@section('title', 'Kriteria Bantuan')
@section('content')
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Data Kriteria</strong></h2>
                <div class="row col-lg-1">
                    <a class="btn btn-success" href="{{route('kriteria.tambah')}}">Tambah</a>
                </div>
            </div>
            <div class="body">
                <p>Data kriteria bantuan Desa Cagak Agung, Cerme, Gresik</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Atribut</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datakriteria as $d)
                            <tr>
                                <td>{{$d->kode_kriteria}}</td>
                                <td>{{$d->nama_kriteria}}</td>
                                <td>{{$d->atribut}}</td>
                                <td style="text-right">
                                    <a href="" class="badge bg-warning btn-lg"><span data-feather="edit">Edit</span></a>
                                    <a data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Menghapus Data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <a href="{{route('kriteria.destroy',$d->idkriteria)}}"
                                                class="btn btn-danger">Delete</a>
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

@stop
@section('page-script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(session('alert'))
    swal("{{ session('alert') }}");
    @endif

</script>
@endsection
