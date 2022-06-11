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
                <h2><strong>INPUT</strong> KRITERIA</h2>
            </div>
            <div class="body">
                <form id="form_validation" method="POST">
                    <div class="form-group form-float">
                        Kode Kriteria <input type="text" class="form-control" placeholder="Kode Kriteria" name="name" required>
                    </div>
                    <div class="form-group form-float">
                        Nama kriteria <input type="text" class="form-control" placeholder="Nama Kriteria" name="name" required>
                    </div>
                    <div class="form-group form-float">
                        Tambahkan Nilai Bobot AHP-TOPSIS <input type="text" class="form-control" placeholder="Nilai Bobot kriteria AHP-TOPSIS" name="surname" required>
                    </div>
                    <div class="form-group form-float">
                        Tambahkan Nilai Bobot COPRAS <input type="text" class="form-control" placeholder="Nilai Bobot kriteria COPRAS" name="surname" required>
                    </div>
                    <div class="form-group form-float">
                        Atribut
                        <div class="radio inlineblock m-r-20">
                            <input type="radio" name="atribut" id="cost" class="with-gap" value="option1">
                            <label for="cost">Cost</label>
                        </div>
                        <div class="radio inlineblock">
                            <input type="radio" name="atribut" id="benefit" class="with-gap" value="option2" checked="">
                            <label for="benefit">Benefit</label>
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
