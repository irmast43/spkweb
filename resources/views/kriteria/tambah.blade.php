@extends('layout.master')
@section('title', 'Input Kriteria')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet"
    href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
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
                <form id="form_validation" action="{{route('kriteria.simpan')}}" method="POST">
                    @csrf
                    <div class="form-group form-float">
                        Kode Kriteria <input type="text" class="form-control" value="{{$kodekriteria}}"
                            placeholder="Kode Kriteria" name="kode_kriteria" readonly>
                    </div>
                    <div class="form-group form-float">
                        Nama kriteria <input type="text" class="form-control" placeholder="Nama Kriteria"
                            name="nama_kriteria" required>
                    </div>
                    <div class="form-group form-float">
                        Atribut
                        <select class="form-control show-tick ms select2" name="atribut" data-placeholder="Select">
                            <option></option>
                            <option value="Cost">Cost</option>
                            <option value="Benefit">Benefit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        {{-- <div class="checkbox">
                            <input id="checkbox" type="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div> --}}
                        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                    </div>
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
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function deleteSales(url) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "POST",
                url: url,
                success: function (result) {
                    location.reload();
                }
            });
        }
    }

</script>
@stop
