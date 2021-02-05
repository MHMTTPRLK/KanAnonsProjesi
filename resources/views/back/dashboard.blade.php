@extends('back.layouts.master')
@section('title','Anasayfa')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard-2</h4>
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
<!-- Container fluid  Content -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <!-- Dashboard -->
        <div class="col-md-6 col-lg-2">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <a href="{{route('admin.dashboard')}}">
                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                    <h6 class="text-white">Dashboard</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Anonslar -->
        <div class="col-md-6 col-lg-2">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <a href="{{route('admin.anons-list')}}">
                    <h1 class="font-light text-white"><i class="mdi mdi-hospital"></i></h1>
                    <h6 class="text-white">Anonslar</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Kullanıcılar -->
        <div class="col-md-6 col-lg-2">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <a href="{{route('admin.user-list')}}">
                    <h1 class="font-light text-white"><i class="mdi mdi-account-card-details"></i></h1>
                    <h6 class="text-white">Kullanıcılar</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Gönüllüler -->
        <div class="col-md-6 col-lg-2">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <a href="{{route('admin.gonullu-list')}}">
                    <h1 class="font-light text-white"><i class="mdi mdi-fingerprint"></i></h1>
                    <h6 class="text-white">Gönüllüler</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- Mesajlar -->
        <div class="col-md-6 col-lg-2">
            <div class="card card-hover">
                <div class="box bg-orange text-center">
                    <a href="{{route('admin.contact')}}">
                    <h1 class="font-light text-white"><i class="mdi mdi-message-settings"></i></h1>
                    <h6 class="text-white">Mesajlar</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($anons as $anon)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Posts</h4>
                    </div>
                    <div class="comment-widgets scrollable">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2"><img src="{{asset('back/assets/images/users/1.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text w-100">
                               <h6 class="font-medium">{{$anon->anons_name.' '.$anon->anons_surname}}</h6>
                                <span class="m-b-15 d-block text-left">{{$anon->anons_detay}}</span>
                                <span class="m-b-15 d-block">{{$anon->ilce}}/{{$anon->sehir}} </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">{{$anon->updated_at->format('m.d.Y H:i')}}</span>
                                    <a href="{{route('admin.anons-detail',$anon->id)}}"
                                       target="_blank" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{route('admin.anons-detail',$anon->id)}}"
                                       title="Sil"   class="btn btn-sm btn-danger"><i class="fa fa-times"></i>
                                    </a>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        @endforeach


        <!--  <div class="col-md-6">


          </div>-->
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5 class="card-title">Calender</h5>
            <div class="card">
                <div class="">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div>
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

</div>
@endsection
