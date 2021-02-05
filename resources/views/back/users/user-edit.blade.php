@extends('back.layouts.master')
@section('title','Kullanıcı Düzenle')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Kullanıcı Düzenle</h4>
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
                <form class="form-horizontal" action="{{route('admin.user-update',$user->id)}}" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Adı </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname"  name="name" value="{{$user->name}}"required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Soyadı</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname"   name="surname" value="{{$user->surname}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telefon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname"  name="phone" value="{{$user->phone}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Kan Grubu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname"  name="kanGrubu" value="{{$user->kanGrubu}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Şehir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname"  name="sehir" value="{{$user->get_City->name}}"required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">İlçe</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname"  name="ilce" value="{{$user->get_District->name}}" required>
                            </div>
                        </div>
                        @if($user->email!="")
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email1"  name="email" value="{{$user->email}}"  >
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
