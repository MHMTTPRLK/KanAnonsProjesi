@extends('fronted.layouts.master')
@section('title','Anonslarım')
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
                            <h5 class="card-title">Anons Listesi</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
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
                                    @foreach($anons as $anon)
                                        <tr>

                                            <td>{{$anon->anons_name}}</td>
                                            <td>{{$anon->anons_surname}}</td>
                                            <td>{{$anon->anons_phone}}</td>
                                            <td>{{$anon->anons_kan}}</td>
                                            <td>{{$anon->get_City->name}}</td>
                                            <td>{{$anon->get_District->name}}</td>
                                            <td width="100">
                                                <a anons-id="{{$anon->id}}" title="Görüntüle Ve Güncelle" class="btn btn-sm btn-info show-click"><i class="fa fa-eye  text-white"></i>
                                                </a>
                                                <a  style="color: white;"  anons-id="{{$anon->id}}"
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

        </div>

<br>
<br>
<br>
    <div id="show-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Anons İçerigi</h5>

                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('anons-update')}}">
                        @csrf
                        <div class="form-group">
                            <label>Hasta Ad </label>
                            <input  id="anons_name" type="text" class="form-control" name="anons_name" required/>
                            <input  id="anons-id" type="hidden"  name="id" />

                        </div>
                        <div class="form-group">
                            <label>Hasta  Soyad</label>
                            <input  id="anons_surname" type="text" class="form-control" name="anons_surname" required/>


                        </div>
                        <div class="form-group">
                            <label>İrtibat Telefonu</label>
                            <input id="anons_phone" type="text" class="form-control" name="anons_phone" required/>

                        </div>
                        <div class="form-group">
                            <label>Kan Grubu</label>
                            <input id="anons_kan" type="text" class="form-control" name="anons_kan" required/>
                        </div>
                        <div class="form-group">
                            <label>Şehir</label>
                            <input id="sehir" type="text" class="form-control" name="sehir" required/>
                        </div>
                        <div class="form-group">
                            <label>İlçe</label>
                            <input id="ilce" type="text" class="form-control" name="ilce" required/>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Anons Detay</label>
                            <textarea class="form-control" id="anons_detay" name="anons_detay" required></textarea>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success">Güncelle</button>
                            <button type="button" class="btn btn-danger " data-dismiss="modal">Kapat</button>

                        </div>

                    </form>
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
                    <form  method="post" action="{{route('anons-delete')}}">
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
    <!-- Show Modal -->
    <script src="{{asset('back/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('back/dist/js/jquery-ui.min.js')}}"></script>
    <script>
        $(function () {
            //show-click
            $('.show-click').click(function () {
                id = $(this)[0].getAttribute('anons-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('anons-getData')}}',
                    data: {id: id},
                    success: function (data) {
                        console.log(data);
                        $('#anons_name').val(data.anons_name);
                        $('#anons_surname').val(data.anons_surname);
                        $('#anons-id').val(data.id);
                        $('#anons_phone').val(data.anons_phone);
                        $('#anons_kan').val(data.anons_kan);
                        $('#sehir').val(data.sehir);
                        $('#ilce').val(data.ilce);
                        $('#anons_detay').val(data.anons_detay);
                        $('#show-Modal').modal();
                    }

                });
            });

        })
    </script>
    <script>
        $(function () {

            $('.remove-click').click(function () {
                id = $(this)[0].getAttribute('anons-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('anons-getData')}}',
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
