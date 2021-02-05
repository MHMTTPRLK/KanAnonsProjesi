@extends('back.layouts.master')
@section('title','Anons Bilgisi')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Anons Bilgisi</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="card">
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Anons Sahibi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$anons_details->get_User->name." ".$anons_details->get_User->surname}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hasta Adı </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" value="{{$anons_details->anons_name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hasta Soyadı</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$anons_details->anons_surname}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">İrtibat Telefon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$anons_details->anons_phone}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Kan Grubu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$anons_details->anons_kan}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Anons Detay</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$anons_details->anons_detay}}</textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Şehir</label>
                            <div class="col-sm-9">

                                <input type="" class="form-control" id="lname" value="{{$anons_details->get_City->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">İlçe</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$anons_details->get_District->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Anons Tarihi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$anons_details->created_at}}" readonly>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
@endsection

