@extends('footer')
@section('main-content')
<div class="design_section layout_padding">
    <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="design_taital">List Artist</h1>
                    <div class="design_section_2">
                        <form action="" method="GET"> <!-- chức năng tìm kiếm chưa hoàn thiện -->
                            <input type="text" name="search" placeholder="Search by artist name">
                            <button type="submit">Search</button>
                          </form>
                        <div class="row">
                            @foreach($artists as $artist)
                            <div class="col-md-4" style="padding:15px;">
                                <div class="box_main">
                                    <p class="chair_text">{{$artist->Name}}</p>
                                    <div class="image_3">
                                        <img src="{{ asset('images/' . $artist->Img) }}" style="height:200px; overflow: hidden; object-fit: cover;">
                                    </div>
                                    <p class="chair_text">Price: {{$artist->Price}}</p>
                                    <div class="buy_bt"><a href="{{ route('artists.show', $artist->id) }}">Detail</a></div>
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
