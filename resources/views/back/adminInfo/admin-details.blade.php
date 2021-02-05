@extends('back.layouts.master')
@section('title','Admin Bilgisi')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Admin Bilgisi</h4>
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
            <form class="form-horizontal" action="{{route('admin.admin-update',Auth::user()->id)}}" method="post">
                @csrf
                <div class="card-body">

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Adı </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname" value="{{Auth::user()->name}}" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Soyadı</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" value="{{Auth::user()->surname}}" name="surname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telefon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" value="{{Auth::user()->phone}}" name="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Kan Grubu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" value="{{Auth::user()->kanGrubu}}" name="kanGrubu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Şehir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" value="{{Auth::user()->sehir}}" name="sehir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">İlçe</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" value="{{Auth::user()->ilce}}" name="ilce">
                        </div>
                    </div>
                    @if(Auth::user()->email!="")
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email1" value="{{Auth::user()->email}}" name="email" >
                        </div>
                    </div>
                    @endif

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection

