@extends('layout.master')
@section('title', 'Input Alternatif')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>INPUT</strong> ALTERNATIF</h2>
            </div>
            <div class="body">
                <form id="form_validation" action="{{route('alternatif.simpan')}}" method="POST">
                    @csrf
                    <div class="form-group form-float">
                        No <input type="text" class="form-control" value="{{$kodealternatif}}" placeholder="No" name="idalternatif" readonly>
                    </div>
                    <div class="form-group form-float">
                        Nama Alternatif <input type="text" class="form-control" placeholder="Nama Alternatif" name="nama_alternatif" required>
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
                        NIK <input type="number" class="form-control" placeholder="Nomor Induk Keluarga" name="nik" required>
                    </div>
                    <div class="form-group form-float">
                        NO.KK <input type="number" class="form-control" placeholder="Nomor Kartu Keluarga" name="no_kk" required>
                    </div>
                    <div class="form-group form-float">
                        NO.HP <input type="text" class="form-control" placeholder="Nomor Telephone" name="no_hp" required>
                    </div>
                    <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/form-validation.js')}}"></script>
@stop
