@extends('back.layouts.master')
@section('title','Gönüllüler')
@section('content')
   <div class="page-wrapper">
  <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title"></h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
     <div class="container-fluid">
        <div class="row">
           <div class="col-12">
                    <div class="card">
                        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Yorum Sahibi</th>
                        <th>Email</th>
                        <th>Durum</th>
                        <th>Yorum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($comments as  $comment)
                        <tr>

                            <td>{{$comment->fullname}}</td>
                            <td>{{$comment->email}}</td>

                            <td>
                                <input class="switch"  comment-id="{{$comment->id}}" width="100px" type="checkbox" data-on="Aktif" data-off="Pasif" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" @if($comment->status==1) checked @endif>
                            </td>
                            <td>{{$comment->comment}}</td>
                            <td>
                                <a comment-id="{{$comment->id}}" title="Yorum İncele" class="btn btn-sm btn-primary show-click"><i class="fa fa-eye  text-white"></i></a>
                                <a category-id="{{$comment->id}}" category-name="{{$comment->fullname}}"     title="Kategori Sil" class="btn btn-sm btn-danger remove-click"><i class="fa fa-times  text-white"></i></a>
                            </td>
                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
                    </div>
             </div>
         </div>
     </div>
      </div>
   <div id="show-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLongTitle">Gönüllü Bilgileri</h5>

               </div>
               <div class="modal-body">
                   <form  method="post" >
                       @csrf
                       <div class="form-group">
                           <label>Yorum Sahibi </label>
                           <input  id="fullname" type="text" class="form-control" name="fullname" readonly/>
                           <input  id="comment-id" type="hidden"  name="id" />

                       </div>
                       <div class="form-group">
                           <label>Email</label>
                           <input  id="email" type="text" class="form-control" name="email" readonly/>


                       </div>
                       <div class="form-group">
                           <label>Yorum</label>
                           <textarea id="yorum"  class="form-control" name="yorum" readonly></textarea>

                       </div>
                       <div class="form-group">
                           <button type="button" class="btn btn-danger " data-dismiss="modal">Kapat</button>
                       </div>

                   </form>
               </div>
           </div>
       </div>
   </div>
</div>


   <script src="{{asset('back/assets/libs/jquery/dist/jquery.min.js')}}"></script>
   <script src="{{asset('back/dist/js/jquery-ui.min.js')}}"></script>
   <script>
       $(function () {
           //show-click
           $('.show-click').click(function () {
               id = $(this)[0].getAttribute('comment-id');
               $.ajax({
                   type: 'GET',
                   url: '{{route('admin.comment-getData')}}',
                   data: {id: id},

                   success: function (data) {
                       console.log(data);
                       $('#fullname').val(data.fullname);
                       $('#email').val(data.email);
                       $('#yorum').val(data.comment);
                       $('#show-Modal').modal();
                   }

               });
           });

       })
   </script>
   <script>
       $(function() {
           $('.switch').change(function() {
               id= $(this)[0].getAttribute('comment-id');
               statu=$(this).prop('checked');
               alert('Durum Değişti');
               $.get("{{route('admin.comment-switch')}}", {id:id,statu:statu},function(data, status){
                   console.log(data);
               });
           })
       })
   </script>

@endsection
@section('css')
            <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection



