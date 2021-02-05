@extends('fronted.layouts.master')
@section('title','Bize Ulaşın')
@section('content')
    <br>
    <br>
    <br>

    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row reservation_img">
                <div class=" col-md-6">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <div class="container">
        @if (count($errors)>0)
            <div class="alert alert-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <form action="{{route('gonullu-create')}}" method="post">
         @csrf
            <input type="hidden" name="id" value="{{Auth::user()->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Ad</label>
                        <input type="text" class="form-control" placeholder="" id="first" name="name" value="{{Auth::user()->name}}" readonly>
                    </div>
                </div>
                <!--  col-md-6   -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Soyad</label>
                        <input type="text" class="form-control" placeholder="" id="last" name="surname" value="{{Auth::user()->surname}}" readonly>
                    </div>
                </div>
                <!--  col-md-6   -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Kan Grubu</label>
                        <input type="text" class="form-control" placeholder="" id="company" name="kanGrubu" value="{{Auth::user()->kanGrubu}}" readonly>
                    </div>
                </div>
                <!--  col-md-6   -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Telefon Numarası</label>
                        <input type="tel" class="form-control" id="phone" placeholder="" name="phone" value="{{Auth::user()->phone}}" readonly >
                    </div>
                </div>

            </div>

            <div class="row">
            <div class="input-group col-lg-6 mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input onclick="myFunction()" type="checkbox" aria-label="Checkbox for following text input" id="myCheck" name="dogrula1">
                    </div>
                </div>
                <a  href=""  class="form-control" data-toggle="modal" data-target="#exampleModalLong" style="color: black;" >Gönülülük Şartları Kabul Ediyorum</a>

            </div>
            </div>
            <button type="submit" class="btn btn-primary" id="btnSubmit"> Gönder</button>
        </form>

        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: black; font-weight: bold; font-size: 25px; align-content: center;">Gönülülük Şartları</h5>

                           <p style="color: black;"><b style="color: black; font-weight: bold;">Hastalıklar, Aşılar:</b><br>    Bazı hastalıklar kan bağışına sürekli veya belli bir dönem için engel oluşturmaktadır.
                               Bu hastalıklara ilişkin bazı bilgiler aşağıda belirtilmiştir.</p>

                        <p style="color: black;">Hepatit B (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;"> Hepatit C (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">   AIDS (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">Creutzfeldt-Jacob hastalığı olanlar, (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;"> Diabet hastaları (İnsülin kullananlar veremez) (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">Geçmişte damar yolu ile uyuşturucu kullanmış veya halen kullanmakta olanlar(Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">Hemofili veya pıhtılaşma problemi olanlar(Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">Koroner kalp hastalığı, angina pektoris, ciddi kardiyak aritmi, serebrovasküler hastalıklar, arteriyal tromboz veya rekküren venöz trombozu olan kişiler (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">  Astım hastaları (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">   Otoimmün hastalığı olanlar (Hiçbir zaman kan veremezler).</p>
                        <p style="color: black;"> Sebebi açıklanamayan ateş, kilo kaybı, gece terlemesi, büyümüş lenf bezi veya kitlesi, deride mor lekeler, ağızda veya boğazda beyaz döküntüler, uzun süren ve iyileşmeyen öksürük veya ishali olanlar(Hiçbir zaman kan veremezler)
                            Anemi teşhisi konmuş kişiler (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">Kanama diatezi (Kanama eğilimi) olanlar(Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">Kronik bronşit hastaları (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;"> Tüberküloz (Tedavinin sağlanmasından 2 yıl sonra kan verebilirler)</p>
                        <p style="color: black;">Sıtma (Tedavinin sağlanmasından 3 yıl sonradan itibaren kan verebilirler)</p>
                        <p style="color: black;"> Osteomyelit geçirmiş hastalar, tam düzelmeden 5 yıl sonra kan verebilirler</p>
                        <p style="color: black;"> Ayrıca ;</p>
                        <p style="color: black;">Para almak için cinsel ilişkide bulunanlar, (Hiçbir zaman kan veremezler)</p>
                        <p style="color: black;">Bir kez bile olsa erkek erkeğe cinsel ilişki yaşayanlar, (Hiçbir zaman kan veremezler)</p>

                        <p style="font-weight: bold; color: black;">Belirtilen Hastalıkları Okuyup Şartlarını Sağlıyorsanız Gönülülük Şartlarını Kabul Ediyorum Olarak İşaretleyiniz.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-primary" id="kabul_btn" data-dismiss="modal" onclick="kabul()">Kabul Ediyorum</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        var btn=document.getElementById('btnSubmit');
        var myCheck=document.getElementById('myCheck');

        if(myCheck.checked==false)
        {
            btn.disabled=true;
        }

        function myFunction() {

            btn.disabled=false;
        }

        function kabul() {
            var myCheck=document.getElementById('myCheck').checked=true;
            btn.disabled=false;
        }
    </script>
    @jquery
@endsection
