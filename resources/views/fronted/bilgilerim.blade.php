@extends('fronted.layouts.master')
@section('title','Bilgilerim')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="container align-content-center">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">

                <div>
                    <form role="form" action="{{route('bilgi-update',$data->id)}}" method="post" novalidate>
                        @csrf

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Ad</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="{{$data->name}}" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Soyad</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  value="{{$data->surname}}" name="surname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email"  value="{{$data->email}}" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Telefon Numarası</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  value="{{$data->phone}}" name="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Kan Grubu</label>
                            <div class="col-lg-9">
                              <select id="" class="form-control" size="1" name="kanGrubu">
                                   <option @if($data->kanGrubu=="A RH+") selected @endif value="A RH+" >A RH+</option>
                              <option @if($data->kanGrubu=="A RH-") selected @endif value="A RH-" >A RH-</option>
                              <option @if($data->kanGrubu=="B RH+") selected @endif value="B RH+">B RH+</option>
                              <option @if($data->kanGrubu=="B RH-") selected @endif value="B RH-">B RH-</option>
                              <option @if($data->kanGrubu=="AB RH+") selected @endif value="AB RH+">AB RH+</option>
                              <option @if($data->kanGrubu=="AB RH-") selected @endif value="AB RH-">AB RH-</option>
                              <option @if($data->kanGrubu=="0 RH+") selected @endif value="0 RH+">0 RH+</option>
                              <option @if($data->kanGrubu=="0 RH-") selected @endif value="0 RH-">0 RH-</option>
                            </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Şehir</label>
                            <div class="col-lg-9">

                                <select id="city-dropdown"  class="form-control" name="city_id" value="{{ old('sehir') }}" required autocomplete="sehir">
                                    @foreach ($cities as $city)
                                        <option  @if($data->get_City->id==$city->id)  selected @endif value="{{$city->id}}">
                                            {{$city->name}}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">İlçe</label>
                            <div class="col-lg-9">
                                <select id="district-dropdown"   class="form-control " name="district_id" value="{{ old('ilce') }}" required autocomplete="ilce" autofocus  >

                                    <option value="{{$data->get_District->id}}">{{$data->get_District->name}}</option>

                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">

                                <input type="submit" class="btn btn-success" value="Güncelle">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#city-dropdown').on('change', function() {
                var city_id = this.value;
                $("#district-dropdown").html('');
                $.ajax({
                    url:"{{route('getDistrict1')}}",
                    type: "POST",
                    data: {
                        city_id: city_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#district-dropdown').html('<option value="">İlçe seçiniz</option>');
                        $.each(result.districts,function(key,value){
                            $("#district-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
                });
            });
        });
    </script>

@endsection

