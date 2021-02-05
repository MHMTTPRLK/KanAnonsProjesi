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
                            <table class="table">
                                <thead >
                                <tr>
                                    <th>Ad Soyadd</th>
                                    <th> İrtibat</th>
                                    <th>Kan G.</th>
                                    <th>Şehir</th>

                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>{{$data->name." ".$data->surname}}</td>
                                        <td>{{Str::limit($data->phone,6,'....')}}</td>
                                        <td>{{$data->kanGrubu}}</td>
                                        <td>{{$data->get_City->name}}</td>
                                        <td>{{$data->get_District->name}}</td>


                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>


@endsection



