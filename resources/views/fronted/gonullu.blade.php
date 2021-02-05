@extends('fronted.layouts.master')
@section('title','Gönülülerimiz')
@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gönülülerimiz </h5>
                        <div class="table-responsive-sm">
                            <table class="table" style="padding: 1px;">
                                <thead>
                                <tr>
                                    <th>Ad Soyad</th>
                                    <th>Kan G.</th>
                                    <th>Şehir</th>

                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $data)
                                    <tr>

                                        <td>{{$data->get_User->name." ".$data->get_User->surname}}</td>
                                        <td>{{$data->get_User->kanGrubu}}</td>
                                        <td>{{$data->get_User->get_City->name}}</td>

                                        <td width="100">
                                            <a gonullu-id="{{$data->get_User->id}}"
                                               title="Görüntüle Ve Güncelle" class="btn btn-sm btn-info show-click"><i class="fa fa-eye  text-white"></i>
                                            </a>

                                        </td>
                                        <td> <a  href="tel:+905396467730" title="İletişime Geç" class="btn btn-sm btn-success show-click"><i class="fa fa-phone  text-white"></i>
                                            </a></td>
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

    <br>
    <br>
    <br>
    <div id="show-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Gönüllü Bilgileri</h5>

                </div>
                <div class="modal-body">
                    <form  method="post" >
                        @csrf
                        <div class="form-group">
                            <label>Hasta Ad </label>
                            <input  id="name" type="text" class="form-control" name="name" readonly/>
                            <input  id="gonullu-id" type="hidden"  name="id" />

                        </div>
                        <div class="form-group">
                            <label>Hasta  Soyad</label>
                            <input  id="surname" type="text" class="form-control" name="surname" readonly/>


                        </div>
                        <div class="form-group">
                            <label>İrtibat Telefonu</label>
                            <input id="phone" type="text" class="form-control" name="phone" readonly/>

                        </div>
                        <div class="form-group">
                            <label>Kan Grubu</label>
                            <input id="kanGrubu" type="text" class="form-control" name="kanGrubu" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Şehir</label>
                            <input id="sehir" type="text" class="form-control" name="sehir" readonly/>
                        </div>
                        <div class="form-group">
                            <label>İlçe</label>
                            <input id="ilce" type="text" class="form-control" name="ilce" readonly/>
                        </div>

                        <div class="form-group">
                            <a  href="tel:+905396467730" title="İletişime Geç" class="btn btn-success ">Ara</a>
                            <button type="button" class="btn btn-danger " data-dismiss="modal">Kapat</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Show Modal -->
    <script src="{{asset('back/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('back/dist/js/jquery-ui.min.js')}}"></script>
    <script>
        $(function () {
            //show-click
            $('.show-click').click(function () {
                id = $(this)[0].getAttribute('gonullu-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('gonullu-getData')}}',
                    data: {id: id},

                    success: function (data) {
                        console.log(data);
                        $('#name').val(data.gonullu.name);
                        $('#surname').val(data.gonullu.surname);
                        $('#gonullu-id').val(data.gonullu.id);
                        $('#phone').val(data.gonullu.phone);
                        $('#kanGrubu').val(data.gonullu.kanGrubu);
                        $('#sehir').val(data.sehir);
                        $('#ilce').val(data.ilce);
                        $('#show-Modal').modal();
                    }

                });
            });

        })
    </script>
@endsection


