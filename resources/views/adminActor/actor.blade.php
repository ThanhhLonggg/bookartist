@extends('footer')
@section('main-content')
<div class="design_section layout_padding">
    <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="design_taital">List Actor</h1>
                    <div class="design_section_2">
                        <div class="row">
                            @foreach($actors as $actor)
                            <div class="col-md-4" style="padding:15px;">
                                <div class="box_main">
                                    <p class="chair_text">{{$actor->Name}}</p>
                                    <div class="image_3">
                                        <img src="{{ asset('images/' . $actor->Img) }}" style="height:200px; overflow: hidden; object-fit: cover;">
                                    </div>
                                    <p class="chair_text">Price: {{$actor->Price}}</p>
                                    <div class="buy_bt"><a href="{{ route('actors.show', $actor->id) }}">Detail</a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('header')
