@extends('fronted.layouts.master')
@section('title','Bize Ulaşın')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Bize Ulaşın</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section section_padding">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <p class="contact-title">Lütfen Eksiksiz Dolduralım.</p>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{route('iletisim-gec')}}" method="POST" >
                       @csrf
                        <div class="row">
                            <div class="col-sm-12" >
                                <div class="form-group">
                                    <input style="font-weight: bold; color: black; border-color: black;" class="form-control" name="fullname" id="name" type="text" onfocus="this.placeholder = ''"  placeholder='Adını Soyadınız'  required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input  class="form-control"   style="font-weight: bold; color: black; border-color: black;" name="email" id="email" type="email" onfocus="this.placeholder = ''"  placeholder='Email Adresiniz' REQUIRED>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <select  id="inputState" class="form-select" name="topic">
                                        <option>Genel</option>
                                        <option> Bilgi</option>
                                        <option >İstek</option>

                                    </select>
                                    <br><br>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <textarea   style="font-weight: bold; color: black; border-color: black;"  class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''"  placeholder='Mesajınız' required> </textarea>
                                </div>
                            </div>



                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">Gönder</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">

                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:+905396467730">0539 646 00 00</a></h3>

                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a  class="__cf_email__" data-cfemail="ed9e989d9d829f99ad8e8281829f81848fc38e8280">mhmttparlak@gmail.com</a></h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

