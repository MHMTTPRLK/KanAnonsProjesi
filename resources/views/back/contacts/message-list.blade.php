@extends('back.layouts.master')
@section('title','Mesajlar')
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
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="m-0 font-weight-bold text-primary float-left"><strong>{{$contacts->count()}} Mesaj Mevcut</strong>
                            </h6>
                            <h6 class="m-0 font-weight-bold text-primary float-right" style="float: right; font-weight: bold !important;">
                                <a href="{{route('admin.contact-trashed')}}"  class="btn btn-warning btn-sm float-right" style="float: right;font-size: 15px;" ><i class="fa fa-trash">  Silinen Mailler</i></a>

                            </h6>

                        </div>
                        <div class="x_panel card-body">
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
                                    @foreach($contacts as  $contact)
                                        <tr>
                                            <td>@if($contact->status==1)
                                                    <i class="fas fa-check-double bg-success fa-2x"></i>
                                                @endif
                                                @if($contact->status==0)
                                                    <i class="fas fa-check fa-2x"></i>
                                                @endif
                                            </td>
                                            <td>{{$contact->fullname}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>
                                                {{$contact->topic}}
                                            </td>
                                            <td>
                                                {!! $contact->message !!}
                                            </td><td>
                                                {{$contact->created_at->diffForHumans()}}
                                            </td>
                                            <td>
                                                <a  contact-id="{{$contact->id}}"  title="Mesaj Görüntüle" class="btn btn-sm btn-info show-click"><i class="fa fa-eye  text-white"></i></a>
                                                <a
                                                    style="color: white;"  contact-id="{{$contact->id}}"
                                                    title="Mesaj Sil"
                                                    class="btn btn-sm btn-danger remove-click">
                                                    <i class="fa fa-times  text-white"></i></a>                                            </td>
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
    <!-- Show Modal -->
    <div id="show-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mesaj İçerigi</h5>

                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('admin.contact-status')}}">
                        @csrf
                        <div class="form-group">
                            <label>Gönderen Ad Soyad</label>
                            <input  id="contact" type="text" class="form-control" name="fullname" readonly/>
                            <input  id="contact-id" type="hidden"  name="id"/>

                        </div>
                        <div class="form-group">
                            <label>Gönderen Email</label>
                            <input id="email" type="text" class="form-control" name="email" readonly/>
                            <input id="durum" type="hidden" class="form-control" name="status"  />
                        </div>
                        <div class="form-group">
                            <label>Konu</label>
                            <input id="topic" type="text" class="form-control" name="topic" readonly/>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mesaj</label>
                            <textarea class="form-control" id="message" name="message" readonly></textarea>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-danger">Kapat</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- DeleteModal -->
    <div id="delete-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Bilgilenidrme</h5>

                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('admin.deleteMsg')}}">

                        @csrf
                        <div class="form-group">
                            <label>Mesajı Silmek İstiyormusunuz ?</label>

                            <input  id="delete-id" type="hidden"  name="id" />
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success">Sil</button>
                            <button type="button" class="btn btn-danger " data-dismiss="modal">Kapat</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="{{asset('back/assets/libs/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{asset('back/dist/js/jquery-ui.min.js')}}"></script>
    <script>
        $(function () {
            //show-click
            $('.show-click').click(function () {
                id = $(this)[0].getAttribute('contact-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('admin.contact-getData')}}',
                    data: {id: id},
                    success: function (data) {
                        console.log(data);
                        $('#contact').val(data.fullname);
                        $('#contact-id').val(data.id);
                        $('#email').val(data.email);
                        $('#durum').val(data.status);
                        $('#topic').val(data.topic);
                        $('#message').val(data.message);
                        $('#show-Modal').modal();
                    }

                });
            });

        })
    </script>
    <script>
        $(function () {

            $('.remove-click').click(function () {
                id = $(this)[0].getAttribute('contact-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('admin.contact-getData')}}',
                    data: {id: id},
                    success: function (data) {
                        console.log(data);
                        $('#delete-id').val(data.id);
                        $('#delete-Modal').modal();
                    }

                });
            });

        })
    </script>

@endsection


