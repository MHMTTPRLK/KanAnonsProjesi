@extends('back.layouts.master')
@section('title','Kullanicilar')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Tables</h4>
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
                            <h5 class="card-title">Kullanıcılar Listesi</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Adı</th>
                                        <th>Soyadı</th>
                                        <th>Telefon</th>
                                        <th>Kan Grubu</th>
                                        <th>Şehir</th>
                                        <th>İlçe</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->surname}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->kanGrubu}}</td>
                                            <td>{{$user->get_City->name}}</td>
                                            <td>{{$user->get_District->name}}</td>
                                            <td>
                                                <a href="{{route('admin.user-detail',$user->id)}}"
                                                   target="_blank" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{route('admin.user-edit',$user->id)}}"
                                                   title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt" ></i>
                                                </a>
                                                <a
                                                   style="color: white;"  user-id="{{$user->id}}"
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
                            <form  method="post" action="{{route('admin.user-delete')}}">

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
                    id = $(this)[0].getAttribute('user-id');
                    $.ajax({
                        type: 'GET',
                        url: '{{route('admin.user-getData')}}',
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

