@extends('back.layouts.master')
@section('title','Gönüllüler')
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
                            <h5 class="card-title">Gönüllü Listesi</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>

                                        <th> Gönüllü Adı</th>
                                        <th>Gönüllü Soyadı</th>
                                        <th> İrtibat Telefon</th>
                                        <th>Kan Grubu</th>
                                        <th>Şehir</th>
                                        <th>İlçe</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($gonullu_data as $gonullu)
                                        <tr>



                                            <td>{{!empty($gonullu->get_User) && empty($gonullu->get_User->deleted_at) ?  $gonullu->get_User->name :''}} </td>
                                            <td>{{!empty($gonullu->get_User) && empty($gonullu->get_User->deleted_at) ?  $gonullu->get_User->surname :''}}</td>
                                            <td>{{!empty($gonullu->get_User) && empty($gonullu->get_User->deleted_at) ?  $gonullu->get_User->phone :''}}</td>
                                            <td>{{!empty($gonullu->get_User) && empty($gonullu->get_User->deleted_at) ?  $gonullu->get_User->kanGrubu :''}}</td>
                                            <td>{{!empty($gonullu->get_User) && empty($gonullu->get_User->deleted_at) ?  $gonullu->get_User->get_City->name :''}}</td>
                                            <td>{{!empty($gonullu->get_User)  && empty($gonullu->get_User->deleted_at) ?   $gonullu->get_User->get_District->name :''}}</td>
                                            <td width="70">
                                                <a
                                                   style="color: white;"  gonullu-id="{{$gonullu->id}}"
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
                            <form  method="post" action="{{route('admin.gonullu-delete')}}">

                                @csrf
                                <div class="form-group">
                                    <label>Kullanıcı Silmek İstiyormusunuz ?</label>

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
                    id = $(this)[0].getAttribute('gonullu-id');
                    $.ajax({
                        type: 'GET',
                        url: '{{route('admin.gonullu-getData')}}',
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


