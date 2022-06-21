@extends('layout.master')
@section('title', 'Bobot alternatif Metode AHP-TOPSIS')
@section('content')
    <!-- Basic Table -->
    <div class="panel panel-default">
        <form class="form-inline" action="" method="post">
            <div class="row mb-2">
                <div class="form-group col-lg-3 form-float">
                    <select class="form-control show-tick ms select2" name="kriteria" data-placeholder="Select">
                        <option></option>
                        <option value="Dusun Cagak">Dusun Cagak</option>
                        <option value="Dusun Agung">Dusun Agung</option>
                    </select>
                </div>
                <div class="form-group col-lg-3 form-float">
                    <select class="form-control show-tick ms select2" name="kriteria" data-placeholder="Select">
                        <option></option>
                        <option value="Dusun Cagak">Dusun Cagak</option>
                        <option value="Dusun Agung">Dusun Agung</option>
                    </select>
                </div>
                <div class="form-group col-lg-3 form-float">
                    <select class="form-control show-tick ms select2" name="kriteria" data-placeholder="Select">
                        <option></option>
                        <option value="Dusun Cagak">Dusun Cagak</option>
                        <option value="Dusun Agung">Dusun Agung</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <button type="button" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="body">
                    <p>Bobot Alternatif Metode AHP-TOPSIS</p>
                    <div class="container">
                        <div class="tableparent">
                            <table class="table rowtitle">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                    </tr>
                                    <tr>
                                        <th>8</th>
                                    </tr>
                                    <tr>
                                        <th>9</th>
                                    </tr>
                                    <tr>
                                        <th>10</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
