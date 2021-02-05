<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kayıt Ol Sayfası</title>
    <link rel="icon" href="{{asset('fronted/img/favicon1.png')}} ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    @toastr_css

    <style>



        .border-md {
            border-width: 2px;
        }

        .btn-facebook {
            background: #405D9D;
            border: none;
        }

        .btn-facebook:hover, .btn-facebook:focus {
            background: #314879;
        }

        .btn-twitter {
            background: #42AEEC;
            border: none;
        }

        .btn-twitter:hover, .btn-twitter:focus {
            background: #1799e4;
        }



        /*
        *
        * ==========================================
        * FOR DEMO PURPOSES
        * ==========================================
        *
        */

        body {
            min-height: 100vh;
        }

        .form-control:not(select) {
            padding: 1.5rem 0.5rem;
        }

        select.form-control {
            height: 52px;
            padding-left: 0.5rem;
        }

        .form-control::placeholder {
            color: #ccc;
            font-weight: bold;
            font-size: 0.9rem;
        }
        .form-control:focus {
            box-shadow: none;
        }

    </style>
</head>
<body>
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- LOGO-->
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="{{asset('fronted/img/logo2.jpg')}}" alt="LOGO" width="150">
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="{{asset('fronted/img/telefon.jpg')}}" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Hesap Oluştur</h1>
            <p class="font-italic text-muted mb-0">Bilgileri Eksiksiz Doldurunuz Lütfen</p>

        </div>
        @if (count($errors)>0)
            <div class="alert alert-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

    @endif

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text"  placeholder="Adınız" class="form-control bg-white border-left-0 border-md" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text"  placeholder="Soyadınız" class="form-control bg-white border-left-0 border-md" name="surname" value="{{ old('surname') }}"  autocomplete="surname" autofocus>
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email"  placeholder="Email Adresiniz" class="form-control bg-white border-left-0 border-md" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    <!-- Phone Number -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>


                        <input id="phoneNumber" type="tel"  placeholder="Telefon Numaranız" class="form-control bg-white border-md border-left-0 pl-3" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                    </div>.


                    <!-- Kan Grubu -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="kanGrubu"  class="form-control custom-select bg-white border-left-0 border-md" name="kanGrubu" value="{{ old('kanGrubu') }}" required autocomplete="kanGrubu" autofocus>
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

                    <!-- Şehir -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="city-dropdown"  class="form-control custom-select bg-white border-left-0 border-md" name="city_id" value="{{ old('sehir') }}" required autocomplete="sehir" autofocus>
                            <option value="">Şehir seçiniz</option>
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}">
                                    {{$city->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <!-- İlçe -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="district-dropdown"  class="form-control custom-select bg-white border-left-0 border-md" name="district_id" value="{{ old('ilce') }}" required autocomplete="ilce" autofocus>
                            <option value="">İlçe Seçiniz</option>


                        </select>
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password"  placeholder="Şifreniz" class="form-control bg-white border-left-0 border-md" name="password" required autocomplete="new-password">
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="text"  placeholder="Şifreyi Onayla" class="form-control bg-white border-left-0 border-md" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="input-group col-lg-6 mb-4">


                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input onclick="myFunction()" type="checkbox" aria-label="Checkbox for following text input" id="myCheck" name="dogrula">
                                </div>
                            </div>
                        <a  href=""  class="form-control" data-toggle="modal" data-target="#exampleModalLong" >Üyelik Ve Gizlilik Politikası</a>



                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                            <input type="submit" class="btn btn-primary btn-block py-2" id="btnSubmit" value="Hesabı Oluştur">
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">VEYA</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>



                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Hali Hazırda Hesabınız Var Mı ?  <a href="{{route('giris')}}" class="text-primary ml-2">Giriş Yap</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Üyelik Ve Gizlilik Politikası</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p><b>Kananonscum.com</b> olarak, kullanıcılarımızın hizmetlerimizden güvenli ve eksiksiz şekilde faydalanmalarını sağlamak amacıyla sitemizi kullanan üyelerimizin gizliliğini korumak için çalışıyoruz.</p>
            <p>Bu doğrultuda, işbu <b>Kananonscum.com</b> Gizlilik Politikası (“Politika”), üyelerimizin kişisel verilerinin 6698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”) ile tamamen uyumlu bir şekilde işlenmesi ve kullanıcılarımızı bu bağlamda bilgilendirmek amacıyla hazırlanmıştır. </p>
                <p><b>Kananonscum.com</b> çerez politikası İşbu Politika’nın ayrılmaz parçasıdır.</p>
            <p>İşbu Politika’nın amacı,<b>Kananonscum.com</b>tarafından işletilmekte olan <b> www.Kananonscum.com</b> internet sitesi ile mobil uygulamanın (hepsi birlikte “Platform” olarak anılacaktır) işletilmesi sırasında Platform üyeleri/ziyaretçileri/kullanıcıları (hepsi birlikte “Veri Sahibi” olarak anılacaktır) tarafından <b>Kananonscum.com</b> ile paylaşılan, Veri Sahibi’nin Platform’u kullanımı sırasında ürettiği kişisel verilerin kullanımına ilişkin koşul ve şartları tespit etmektir.</p>
            <p>Hangi Veriler İşlenmektedir?
                Aşağıda <b>Kananonscum.com</b> tarafından işlenen ve Kanun uyarınca kişisel veri sayılan verilerin hangileri olduğu sıralanmıştır.
                Aksi açıkça belirtilmedikçe, işbu Politika kapsamında arz edilen hüküm ve koşullar kapsamında “kişisel veri” ifadesi aşağıda yer alan bilgileri kapsayacaktır.</p>
            <p>İletişim Bilgisi
               Kullanıcı Bilgisi
               Kullanıcı İşlem Bilgisi
               İşlem Güvenliği Bilgisi
               Sistem Bilgisi
               Kişisel Verilerin Korunması Kanunu’nun 3. ve 7. maddeleri dairesince, geri döndürülemeyecek şekilde anonim hale getirilen veriler, anılan kanun hükümleri uyarınca kişisel veri olarak kabul edilmeyecek ve bu verilere ilişkin işleme faaliyetleri işbu Politika hükümleri ile bağlı olmaksızın gerçekleştirecektir.</p>
            <p>Kişisel Veri İşleme Amaçları
                <b>Kananonscum.com"</b>, Veri Sahibi tarafından sağlanan kişisel verileri, üyelik kaydı ve hesabının oluşturulması ve buna ilişkin kayıtların tutulması, Veri Sahibi’nin Platform üzerinden sağlanan hizmetlerden faydalandırılması sistem hatalarının tespit edilerek performans takibinin yapılması ve Platform’un işleyişinin iyileştirilmesi, bakım ve destek hizmetleri ile yedekleme hizmetlerinin sunulması amaçları dahil olmak üzere <b>Kananonscum.com</b> tarafından sunulan hizmetlerden ilgili kişileri faydalandırmak için gerekli çalışmaların yapılması ve süreçlerinin yürütülmesi ile bu hizmetlerin ilgili kişilerin, kullanım ve ihtiyaçlarına göre özelleştirilerek ilgili kişilere önerilmesi ve tanıtılması için gerekli olan aktivitelerin planlanması ve icrası, <b>Kananonscum.com</b> tarafından yürütülen faaliyetlerin gerçekleştirilmesi için ilgili <b>Kananonscum.com</b> tarafından gerekli çalışmaların yapılması ve buna bağlı süreçlerinin yürütülmesi, <b>Kananonscum.com</b> ve iş ilişkisi içerisinde bulunduğu kişilerin hukuki, teknik ve ticari-iş güvenliğinin temini ile <b>Kananonscum.com</b> iş stratejilerinin planlanması ve icrası amaçlarıyla işlenebilecektir.</p>
            <p>Kişisel Verilerin Toplanma Yöntemi ve Hukuki Sebebi
                Kişisel veriler, Platform üzerinden ve elektronik ortamda toplanmaktadır.
                Yukarıda belirtilen hukuki sebeplerle toplanan kişisel veriler 6698 sayılı Kanun’un 5. ve 6. maddelerinde ve bu Gizlilik Politikası’nda belirtilen amaçlarla işlenebilmekte ve aktarılabilmektedir.
            </p>
            <p style="font-weight: bold">Kişisel Veri Sahibinin Hakları
                Kanun’un 11. maddesi uyarınca veri sahipleri,</p>
             <p>Kendileri ile ilgili kişisel veri işlenip işlenmediğini öğrenme, kişisel verileri işlenmişse buna ilişkin bilgi talep etme,
                 Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme, yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,
                 Kişisel verilerin eksik veya yanlış işlenmiş olması halinde bunların düzeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,
                 Kanun ve ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması halinde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,
                 İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme ve kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etme haklarına sahiptir.
                 Söz konusu hakların kullanımına ilişkin talepler, kişisel veri sahipleri tarafından www.<b>Kananonscum.com</b>.com adresinde yer alan 6698 sayılı Kanun Kapsamında hazırlanan Kişisel Verilerin İşlenmesi ve Korunmasına ilişkin Politika’da belirtilen yöntemlerle iletilebilecektir.
                 <b>Kananonscum.com</b>, söz konusu talepleri otuz gün içerisinde sonuçlandıracaktır.
                 <b>Kananonscum.com</b> taleplere ilişkin olarak Kişisel Verileri Koruma Kurulu tarafından belirlenen (varsa) ücret tarifesi üzerinden ücret talep etme hakkı saklıdır.</p>
            <p>Rıza ve Gizlilik Politikası’ndaki Değişiklikler
                <b>"Kananonscum.com</b>, Gizlilik Politikası (“Politika”) ile kullanıcılarına Çerez kullanımının kapsamı ve amaçları hakkında detaylı açıklama sunmayı ve Çerez tercihleri konusunda kullanıcılarını bilgilendirmeyi hedeflemiştir.
                Bu bakımdan, Platform’da yer alan Çerez bilgilendirme uyarısının kapatılması ve Site’nin kullanılmaya devam edilmesi halinde Çerez kullanımına rıza verildiği kabul edilmektedir.
                Kullanıcıların Çerez tercihlerini değiştirme imkânı her zaman saklıdır.</p>
           <p><b>Kananonscum.com</b>, Politika hükümlerini dilediği zaman değiştirebilir.
               Güncel Politika Platform’da yayınlandığı tarihte yürürlük kazanır.

               <b>Kananonscum.com</b>.com, Kullanıcılar tarafından kendisine elektronik ortamdan iletilen kişisel bilgileri, Gönüllü Bağışçılar ile yaptığı Sözleşme ile belirlenen amaçlar ve kapsam dışında üçüncü kişilere açıklamayacaktır.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                <button type="button" class="btn btn-primary" id="kabul_btn" data-dismiss="modal" onclick="kabul()">Kabul Ediyorum</button>
            </div>
        </div>
    </div>
</div>


</body>
<script>
    // For Demo Purpose [Changing input group text on focus]
    $(function () {
        $('input, select').on('focus', function () {
            $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
        });
        $('input, select').on('blur', function () {
            $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
        });
    });

</script>
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
@toastr_js
@toastr_render
</html>
