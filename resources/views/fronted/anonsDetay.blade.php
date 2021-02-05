@extends('fronted.layouts.master')
@section('title','Anons Detay')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">

        <div class="row" >

            <div class="container">
                <h2></h2>
                <div class="panel-group">

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h2 style="color: black;">!!! &nbsp;ACİL&nbsp;{{"  ".$data->anons_kan." "}}&nbsp; ARANIYOR &nbsp;!!!</h2></div>
                        <div class="panel-body">
                            <div class="col-lg-7 col-md-12">
                                <p style="text-transform: uppercase;"><b style="color: black;font-weight: bold;">{{$data->get_City->name}} / {{$data->get_District->name}} &nbsp;</b> {{strip_tags($data->anons_detay)}}</p>
                                <p><b style="color:black;font-weight: bold;">İRTİBAT :</b> <a href="tel:{{$data->anons_phone}}">{{$data->anons_phone}}</a></p>
                                <p class="text-danger help-block " >Bağış Talebi İçin  İrtibatta Bulunan Ve Gelişecek Durumlardan Sorumlu Değiliz...<br>KAN VER HAYAT KURTAR</p>


                            </div>
                    </div>
                </div>
            </div>

            </div>
        </div>






    </div>
@endsection
