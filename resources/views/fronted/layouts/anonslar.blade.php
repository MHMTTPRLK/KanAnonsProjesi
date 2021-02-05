<!-- Anonslar-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4 align-self-center">
                <div class="single_feature_text ">
                    <h2>Kan Anonslarımız</h2>

                    <a href="{{route('anonsList')}}" style="font-size: 17px;" class="btn_2">Daha Fazla</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="feature_item">
                    <div class="row">
                        @foreach($datas as $data)
                        <div class="col-lg-6 col-sm-6" onclick="location.href='{{route('anonsDetay',$data->id)}}';">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('fronted/img/kan.png')}}" alt=""></span>
                                    <h4>Aranan Kan : {{$data->anons_kan}}<p>{{$data->get_City->name}}/{{$data->get_District->name}}</p></h4>
                                    <p>{{strip_tags($data->anons_detay)}}</p>
                                    <p>{{$data->updated_at->format('d.m.Y')}} &nbsp; </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
