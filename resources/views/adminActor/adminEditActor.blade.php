@extends('headeradmin')
@section('main-content-admin')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <form action="{{ route('actors.update', $actor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $actor->Name }}">
            </div>
            <div class="form-group">
                <label for="Product">List of performances</label>
                <input type="text" class="form-control" id="Product" name="Product" value="{{ $actor->Product}}">
            </div>
            <div class="form-group">
                <label for="Sex">Sex</label>
                <select class="form-control" id="Sex" name="Sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="BirthDate">Birth Date</label>
                <input type="text" class="form-control" id="BirthDate" name="BirthDate" value="{{ $actor->BirthDate}}">
            </div>
            <div class="form-group">
                <label for="Img">Image</label>
                <input type="file" class="form-control-file" id="Img" name="Img">
                <img style="height: 100px;" src="{{ asset('images/' . $actor->Img) }}" alt="Current Image">
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" class="form-control" id="Price" name="Price" value="{{ $actor->Price}}">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea class="form-control" id="Description" name="Description" rows="3">{{ $actor->Description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</section>
</div>

@endsection
@extends('footeradmin')