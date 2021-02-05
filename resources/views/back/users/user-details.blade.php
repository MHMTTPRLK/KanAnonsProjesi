@extends('back.layouts.master')
@section('title','Kullanıcı Bilgisi')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Kullanıcı Bilgisi</h4>
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
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Adı </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" value="{{$user_details->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Soyadı</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$user_details->surname}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telefon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$user_details->phone}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Kan Grubu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$user_details->kanGrubu}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Şehir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$user_details->get_City->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">İlçe</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="{{$user_details->get_District->name}}" readonly>
                            </div>
                        </div>
                        @if($user_details->email!="")
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email1" value="{{$user_details->email}}" readonly >
                                </div>
                            </div>
                         @endif

                    </div>

                </form>
            </div>
        </div>
@endsection
