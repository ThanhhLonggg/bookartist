@extends('footer')
@section('main-content')
<div class="about_section layout_padding">
    <div class="container">
        <div class="about_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_2"><img src="{{ asset('images/' . $actor->Img) }}"></div>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('requests.store') }}" method="post">
                        @csrf
                        <h1 class="about_taital" style="padding-top: 0px;">{{ $actor->Name }} </h1>
                        <input type="hidden" class="form-control" id="actor_Name" name="actor_Name" value="{{ $actor->Name }}">
                        <input type="hidden" class="form-control" id="actor_Product" name="actor_Product" value="{{ $actor->Product }}">
                        <input type="hidden" class="form-control" id="actor_id" name="actor_id" value="{{ $actor->id }}">
                        <p class="about_text">List of performances: {{ $actor->Product }}</p>
                        <p class="about_text">Sex: {{ $actor->Sex }}</p>
                        <p class="about_text">Birth Date: {{ $actor->BirthDate }}</p>
                        <p class="about_text">Price: {{ $actor->Price }}</p>
                        <input type="hidden" class="form-control" id="actor_Price" name="actor_Price" value="{{ $actor->Price }}">
                        <p class="about_text">Description: {{ $actor->Description }}</p>
                        <div class="readmore_bt">
                            <button type="submit" class="button" id="addBtn" style="width: 100%; float: left; font-size: 18px; color: #ffffff; background-color: #7c2c0c; border: 1px solid #b48569; padding: 8px 5px; text-align: center; font-weight: 500;">
                                Book
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends ('header')
