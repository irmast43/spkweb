@extends('layout.master')
@section('title', 'Input Kriteria')
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
                <form id="form_validation" method="POST">
                    <div class="form-group form-float">
                        No <input type="text" class="form-control" placeholder="No" name="name" required>
                    </div>
                    <div class="form-group form-float">
                        Nama Alternatif <input type="text" class="form-control" placeholder="Nama Alternatif" name="name" required>
                    </div>
                    <div class="form-group form-float">
                        Alamat <input type="text" class="form-control" placeholder="Alamat" name="village" required>
                    </div>
                    <div class="form-group form-float">
                        RT/RW <input type="text" class="form-control" placeholder="RT/RW" name="village" required>
                    </div>
                    <div class="form-group form-float">
                        NIK <input type="text" class="form-control" placeholder="Nomor Induk Keluarga" name="number" required>
                    </div>
                    <div class="form-group form-float">
                        NO.KK <input type="text" class="form-control" placeholder="Nomor Kartu Keluarga" name="number" required>
                    </div>
                    <div class="form-group form-float">
                        NO.HP <input type="text" class="form-control" placeholder="Nomor Telephone" name="number" required>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input id="checkbox" type="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div>
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
