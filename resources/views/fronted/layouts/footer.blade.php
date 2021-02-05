<!--Footer-->
<footer class="footer-area">
    <div class="footer section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Site Haritası</h4>
                    <ul>
                        <li><a href="{{route('home')}}">Anasayfa</a></li>
                        <li><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                        <li><a href="{{route('anonsList')}}">Anonslar</a></li>

                        <li><a href="{{route('iletisim')}}">İletişim</a></li>
                        @if(auth::user())

                        @else
                            <li><a href="{{route('kayit')}}">Kayıt/Giriş</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Biz Kimmiyiz</h4>
                    <p>Bir avuç kan ile neler yapılabileceğinin farkında mısınız?
                        Kananonscum.com kan bağışında bulunmak isteyen kişilerin veya acil kan ihtiyacı olan kişilerin isteklerini karşılamak üzere hazırlanmış ÜCRETSİZ Bir sosyal sorumluluk projesi olarak hayata geçmiştir.
                        Hiçbir devlet veya özel kuruluş ile bağlantımız yoktur.
                        Uygulama tarafından veya uygulama sahibi gönüllüler tarafından şahsınıza ait (kan grubu hariç) bilgiler kesinlikle üçüncü şahıslar ile paylaşılmaz.
                        Uygulama size ait lokasyon bilgilerini bazı durumlarda kayıt altına alabilir. Lokasyon bilgilerini kayıt altına almamızdaki neden, kan bağışında bulunan kişi veya kişileri, kan ihtiyacı olan kişi veya kişilere mümkün olan en kısa zamanda ulaştırmaktır.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    Copyright &copy; {{now()->year}} Kananonscum.com
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"> <i class="ti-twitter"></i> </a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-skype"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('fronted/js/jquery-1.12.1.min.js')}}"></script>

<script src="{{asset('fronted/js/popper.min.js')}}"></script>

<script src="{{asset('fronted/js/bootstrap.min.js')}}"></script>

<script src="{{asset('fronted/js/jquery.magnific-popup.js')}}"></script>

<script src="{{asset('fronted/js/swiper.min.js')}}"></script>
<script src="{{asset('fronted/js/masonry.pkgd.js')}}"></script>

<script src="{{asset('fronted/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('fronted/js/slick.min.js')}}"></script>
<script src="{{asset('fronted/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('fronted/js/waypoints.min.js')}}"></script>

<script src="{{asset('fronted/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('fronted/js/jquery.form.js')}}"></script>
<script src="{{asset('fronted/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('fronted/js/mail-script.js')}}"></script>
<script src="{{asset('fronted/js/contact.js')}}"></script>

<script src="{{asset('fronted/js/custom.js')}}"></script>
<!--
<script async="" src="../../gtag/js.js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
-->
@toastr_js
@toastr_render
</body>
</html>

