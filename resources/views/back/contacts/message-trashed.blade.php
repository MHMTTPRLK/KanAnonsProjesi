@extends('back.layouts.master')
@section('title','Silinen Mesajlar')
@section('content')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title"></h4>
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
            <div class="col-12">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="m-0 font-weight-bold text-primary float-left"><strong>{{$contacts->count()}} Mesaj Mevcut</strong>
                        </h6>
                        <h6 class="m-0 font-weight-bold text-primary float-right">
                            <a href="{{route('admin.contact')}}"  class="btn btn-success btn-sm float-right" style="font-size: 15px;"><i class="fa fa-check">  Okunmamış Mailler</i></a>

                        </h6>


                    </div>
                    <div class=" x_panel card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th><i class="fa fa-binoculars  fa-2x text-wihte"></i></th>
                                    <th>Gönderen</th>
                                    <th>Gönderen Email</th>
                                    <th>Konu</th>
                                    <th>Mesaj</th>
                                    <th>Tarih</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>@if($contact->status==1)
                                                <i class="fas fa-check-double bg-success fa-2x"></i>
                                            @endif
                                            @if($contact->status==0)
                                                <i class="fas fa-check fa-2x"></i>
                                            @endif
                                        </td>
                                        <td>
                                            {{$contact->fullname}}
                                        </td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->topic}}</td>
                                        <td>{{substr($contact->message,0,10)}}...</td>
                                        <td>{{$contact->created_at->diffForHumans()}}</td>

                                        <td>
                                            <a href="{{route('admin.contact-recoverMsg',$contact->id)}}"  title="Geri Al" class="btn btn-sm btn-success"><i class="fa fa-recycle"></i></a>
                                            <a href="{{route('admin.hardDelete',$contact->id)}}" title="Sil"   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>


@endsection




