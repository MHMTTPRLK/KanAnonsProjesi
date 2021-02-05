<!-- Banner-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1> Kan Bağışı Hayat Kurtarır</h1>
                        <p>Yılda bir veya iki kez yapılacak olan kan bağışı birçok insana yaşam umudu olabilir.
                            Her gün çeşitli kazalar, yaralanmalar ve operasyonlar gerçekleşmektedir.
                            Bu noktada, kan ihtiyacı hayati önem taşır.
                            Kan bağışının olmadığı bir toplumda, her gün binlerce kişi hayatını kaybedebilir.
                            Bu sebep ile, düzenli kan bağışında bulunmak insanların hayatını kurtarır.
                            Kan bağışı, bir sosyal sorumluluk olup, bir gün herkesin kana ihtiyaç duyacağı da bir gerçektir.
                        </p>

                        @if($sayi==1)

                        @else
                            <a href="{{route('gonullu-ol')}}" style="font-size: 17px;" class="btn_2">Gönüllü Olmak İstermisiniz</a>
                        @endif




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
