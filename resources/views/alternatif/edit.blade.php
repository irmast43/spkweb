@extends('layout.master')
@section('title', 'Edit Alternatif')
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
                <h2><strong>EDIT</strong> ALTERNATIF</h2>
            </div>
            <div class="body">
                <form id="form_validation" action="{{ route('alternatif.edit', $company->idalternatif) }}" method="POST">
                    @csrf
<<<<<<< HEAD

=======
>>>>>>> 9fe63ffc38d2ae59342455bd6add26ab2b446425
                    <div class="form-group form-float">
                        Nama Alternatif <input type="text" class="form-control" value="{{$data->nama_alternatif}}" placeholder="Nama Alternatif" name="nama_alternatif" required>
                    </div>
                    <div class="form-group form-float" value="{{$data->alamat}}">
                        Alamat
                        <select class="form-control show-tick ms select2"  name="alamat" data-placeholder="Select">
                            <option></option>
                            <option value="Dusun Cagak">Dusun Cagak</option>
                            <option value="Dusun Agung">Dusun Agung</option>
                        </select>
                    </div>
                    <div class="form-group form-float">
                        RT/RW <input type="number" min="1" value="{{$data->rt}}" class="form-control" placeholder="RT/RW" name="rt" required>
                    </div>
                    <div class="form-group form-float">
                        NIK <input type="number" class="form-control" value="{{$data->nik}}" placeholder="Nomor Induk Keluarga" name="nik" required>
                    </div>
                    <div class="form-group form-float">
                        NO.KK <input type="number" class="form-control" value="{{$data->no_kk}}" placeholder="Nomor Kartu Keluarga" name="no_kk" required>
                    </div>
                    <div class="form-group form-float">
                        NO.HP <input type="text" class="form-control" value="{{$data->no_hp}}" placeholder="Nomor Telephone" name="no_hp" required>
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
