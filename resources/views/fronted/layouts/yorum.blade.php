<!--Yorumlar-->
<section class="review_part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="client_review_part owl-carousel">
                @foreach($comments as $comment)
                    <div class="client_review_single">

                        <div class="client_review_text">
                            <p>{{$comment->comment}}</p>
                        </div>
                        <h4>{{$comment->fullname}}</h4>
                    </div>

                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="regervation_part">
    <div class="container">
        <div class="row align-items-center regervation_content">
            <div class="col-lg-7 col-md-6">
                <div class="regervation_part_iner">
                    <form action="{{route('yorum')}}" method="post"  id="myform">
                        @csrf
                        <h2>Değerlendirme Formu</h2>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Ad Soyad" name="fullname">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputPassword4" placeholder="Email Adresiniz" name="email">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="Textarea" rows="4" placeholder="Yorumunuz" name="comment"></textarea>
                            </div>
                        </div>
                        <div class="regerv_btn">
                            <a  style ="color: white; "onclick="document.getElementById('myform').submit()" class="regerv_btn_iner">Yorumu Paylaş</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="reservation_img">
                    <img src="{{asset('fronted/img/reservation.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

