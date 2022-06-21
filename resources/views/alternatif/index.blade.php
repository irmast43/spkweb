@extends('layout.master')
@section('title', 'Calon Penerima Bantuan')
@section('content')
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Penerima Bantuan</strong></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{route('alternatif.tambah')}}">Tambah Penerima Bantuan</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <p>Data Penerima bantuan Desa Cagak Agung, Cerme, Gresik</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Alternatif</th>
                                <th>Alamat</th>
                                <th>Rt</th>
                                <th>NIK</th>
                                <th>NO.KK</th>
                                <th>No.HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataalternatif as $d)
                            <tr>
                                <td>{{$d->idalternatif}}</td>
                                <td>{{$d->nama_alternatif}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->rt}}</td>
                                <td>{{$d->nik}}</td>
                                <td>{{$d->no_kk}}</td>
                                <td>{{$d->no_hp}}</td>
                                <td style="text-right">
                                    <a href="{{ route('alternatif.show', ['id' => $d->idalternatif]) }}">edit</a>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            apakah anda yakin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <a href="{{route('alternatif.destroy',$d->idalternatif)}}"
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
