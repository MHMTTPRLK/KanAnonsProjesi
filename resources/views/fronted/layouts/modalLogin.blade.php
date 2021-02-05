<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>

            </div>
            <div class="modal-body">

                <p>İşlem yapabilmek için üye girişi yapmalısınız... </p>
                @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{route('modal-login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"  name ="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                    <a  href="{{route('kayit')}}" type="submit" class="btn btn-primary">Kayıt ol</a>
                </form>

            </div>
        </div>
    </div>

</div>
</body>
</html>
