@extends('fronted.layouts.master')
@section('title','Anons&Duyuru')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="{{route('anons-olustur')}}" method="post">
            @csrf
            <div class="row">
                <!-- User Id-->
                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}" >

                <!-- Hasta Adı -->
                <div class="col-lg-6 col-xs-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Adı</label>
                        <input type="text" class="form-control" name="anons_name" required >
                    </div>
                </div>
                <!-- Hasta Soyadı -->
                <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Soyadı</label>
                        <input type="text" class="form-control" name="anons_surname" required>
                    </div>
                </div>
                <!-- Hasta Telefon -->
                <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">İrtibat Telefonu</label>
                        <input type="tel" class="form-control"  name="anons_phone" required>
                    </div>
                </div>
                <!-- Kan Grubu -->
                <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-12">
                    <div class="form-group">
                        <label for="Gender" class="select">Kan Grubu</label>
                        <br>
                        <select class="form-control" name="anons_kan" value="{{ old('anons_kan') }}" required  autofocus>
                            <option value="">Kan Grubunuz</option>
                            <option value="A RH+">A RH+</option>
                            <option value="A RH-">A RH-</option>
                            <option value="B RH+">B RH+</option>
                            <option value="B RH-">B RH-</option>
                            <option value="AB RH+">AB RH+</option>
                            <option value="AB RH-">AB RH-</option>
                            <option value="0 RH+">0 RH+</option>
                            <option value="0 RH-">0 RH-</option>
                        </select>
                    </div>
                </div>
                <!-- Şehir -->
                <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                    <div class="form-group">
                        <label for="Gender" class="select">Şehir</label>
                        <br>
                        <select id="city-dropdown"  class="form-control " name="city_id" value="{{ old('sehir') }}" required autocomplete="sehir" autofocus>
                            <option value="">Şehir seçiniz</option>
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}">
                                    {{$city->name}}
                                </option>
                            @endforeach

                        </select>
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <!-- İlçe-->
                <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-12">
                    <div class="form-group">
                        <label for="Gender" class="select">İlçe</label>
                        <br>
                        <select id="district-dropdown" class="form-control"  name="district_id" value="{{ old('ilce') }}" required autocomplete="ilce" autofocus>
                            <option value="">İlçe</option>

                        </select>
                    </div>
                </div>
                <br>
                <br><br>
                <!-- Hasta Detay -->
                <div class="col-lg-offset-0 col-lg-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Anons Detay</label>
                        <br>
                        <div class="col-xs-9">
                            <textarea  class="form-control"name="anons_detay" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-12 mx-auto mb-0">
                    <input type="submit" class="btn btn-primary btn-block py-2" value="Anons Yap">
                </div>

            </div>

        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <script>

        $(document).ready(function() {
            $('#city-dropdown').on('change', function() {
                var city_id = this.value;
                $("#district-dropdown").html('');
                $.ajax({
                    url:"{{url('get-districts-by-city')}}",
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

