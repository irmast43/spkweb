@extends('layout.master')
@section('title', 'lihat-alternatif')
@section('content')
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Penerima Bantuan</strong></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{route('alternatif.tambah')}}">Lihat Penerima Bantuan</a></li>
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
                                <th>Rt/RW</th>
                                <th>NIK</th>
                                <th>NO.KK</th>
                                <th>No.HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datakriteria as $d)
                            <tr>
                                <td>{{$d->idkriteria}}</td>
                                <td>{{$d->nama_kriteria}}</td>
                                <td>{{$d->atribut}}</td>
                                <td>{{$d->bobot1}}</td>
                                <td>{{$d->bobot2}}</td>
                                <td>
                                    <a href="" class="badge bg-warning btn-lg"><span data-feather="edit">Edit</span></a>
                                    <a href="" class="badge bg-danger btn-lg" onclick="return confirm(yakin ingin menghapus data?)"><span data-feather="x-circle">Delete</span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
