@extends('back.layouts.master')
@section('title','Anonslar')
@section('content')
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
                            <h5 class="card-title">Anons Listesi</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>

                                        <th>Anons Sahibi</th>
                                        <th>Hasta Adı</th>
                                        <th> Hasta Soyadı</th>
                                        <th> İrtibat Telefon</th>
                                        <th>Kan Grubu</th>
                                        <th>Şehir</th>
                                        <th>İlçe</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($anons_data as $anons)
                                        <tr>
                                            <td><a href="{{route('admin.user-detail',$anons->get_User->id)}}">{{ $anons->get_User->name." ".$anons->get_User->surname}}</a> </td>
                                            <td>{{$anons->anons_name}}</td>
                                            <td>{{$anons->anons_surname}}</td>
                                            <td>{{$anons->anons_phone}}</td>
                                            <td>{{$anons->anons_kan}}</td>
                                            <td>{{$anons->get_City->name}}</td>
                                            <td>{{$anons->get_District->name}}</td>
                                            <td width="70">
                                                <a href="{{route('admin.anons-detail',$anons->id)}}"
                                                   target="_blank" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i>
                                                </a>
                                                <a
                                                   style="color: white;"  anons-id="{{$anons->id}}"
                                                   title="Sil"   class="btn btn-sm btn-danger remove-click"><i class="fa fa-times"></i>
                                                </a>
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
            <div id="delete-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Bilgilenidrme</h5>

                        </div>
                        <div class="modal-body">
                            <form  method="post" action="{{route('admin.anons-delete')}}">

                                @csrf
                                <div class="form-group">
                                    <label>Anonsu Silmek İstiyormusunuz ?</label>

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

        </div>
        <script src="{{asset('back/assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('back/dist/js/jquery-ui.min.js')}}"></script>
        <script>
            $(function () {

                $('.remove-click').click(function () {
                    id = $(this)[0].getAttribute('anons-id');
                    $.ajax({
                        type: 'GET',
                        url: '{{route('admin.anons-getData')}}',
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

