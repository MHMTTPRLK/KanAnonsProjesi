<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<section class="register-section classes-page spad">
    <div class="container">
        <div class="classes-page-text">
            <div class="row">
                <div class="col-lg-8">
                    <div class="register-text">
                        <form method="post" action="" class="register-form" enctype="multipart/form-data">

                            <div class="col-lg-6">
                                <label for="country">Şehir</label>
                                <select class="form-control" id="city-dropdown" required name="city_id">
                                    <option value="">Şehir seçiniz</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city->id}}">
                                            {{$city->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label for="district">İlçe</label>
                                <select class="form-control" id="district-dropdown" required name="district_id">
                                    <option value=""></option>
                                </select>
                                <br />
                            </div>
                    </div>
                </div>

                <button type="submit" class="register-btn"> {{ __('Başvur') }} </button>
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
</section>
<!-- Register Section End -->

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
