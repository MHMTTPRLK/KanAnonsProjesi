<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <link rel="icon" href="{{asset('fronted/img/favicon1.png')}} ">
    <link rel="stylesheet" href="{{asset('fronted/login.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="container bg-white pb-5">
    <div class="row d-flex justify-content-start align-items-center mt-sm-5">
        <div class="col-lg-5 col-10">

            <div class="pb-5"> <img src="{{asset('fronted/img/kanbagis3.jpg')}}" alt=""> </div>
        </div>
        <div class="col-lg-4 offset-lg-2 col-md-6 offset-md-3">

            @if (count($errors)>0)
                <div class="alert alert-danger">

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
            @endif

            <div class="mt-3 mt-md-5">

                <form class="pt-4" action="{{ route('login') }}"  method="post">
                    @csrf
                    <div class="d-flex flex-column pb-3"> <label for="email">Email Adresiniz</label> <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="emailId" class="border-bottom border-primary"> </div>
                    <div class="d-flex flex-column pb-3"> <label for="password">Şifreniz</label> <input type="password"  name="password"  autocomplete="current-password" id="pwd" class="border-bottom border-primary"> </div>
                    <div class="d-flex jusity-content-end pb-4">
                        <div class="ml-auto"> <a href="{{route('forget-password')}}" class="text-danger text-decoration-none">Şifremi Unuttum ?</a> </div>
                    </div>
                    <input type="submit" value="Giriş Yap" class="btn btn-primary btn-block mb-3">

                    <div class="register mt-5">
                        <p>Hesabınız Yok Mu? <a href="{{route('kayit')}}">Hemen Kaydolun</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
