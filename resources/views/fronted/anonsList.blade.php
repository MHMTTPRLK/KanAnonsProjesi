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
            <div class="col-sm-12 mb-3">

                <select  id="myFilter" class="form-control" name="city_id" onchange="myFunction()">
                    <option value="">Tüm Şehirler</option>
                    @foreach($citys as $city)
                        <option value="{{$city->name}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row" id="myItems">
            <div class="col-sm-12 mb-3">
                @foreach($datas as $data)
                <div class="card bg-light mb-3">
                    <div class="card-body">

                        <h5 class="card-title"><a href="{{route('anonsDetay',$data->id)}}" style=" font-size: 20px;font-weight: bold; color: red;"> !!! ACİL {{$data->anons_kan}} KAN ARANIYOR !!! </a>

                        </h5>
                        <p class="card-text" style=" color: black; font-size: 17px;" >{{ strip_tags($data->anons_detay)}}</p>
                        <h6 class="card-alt mb-2 text-muted cardFilter"><span style=" font-size: 15px; color: black;"> {{$data->get_City->name}} <span>/</span> <span>{{$data->get_District->name}}</span></h6>

                    </div>
                </div>
                @endforeach


            </div>
        </div>
        <div class="d-flex justify-content-center">

        </div>
    </div>
    <script>
        function myFunction() {

            var input, filter, cards, cardContainer, h5, title, i;
            input = document.getElementById("myFilter");
            filter = input.value.toUpperCase();
            cardContainer = document.getElementById("myItems");
            cards = cardContainer.getElementsByClassName("card");
            for (i = 0; i < cards.length; i++) {
                title = cards[i].querySelector(".card-body h6.cardFilter");
                if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";


                } else {
                    cards[i].style.display = "none";

                }
            }




        }
    </script>

@endsection
