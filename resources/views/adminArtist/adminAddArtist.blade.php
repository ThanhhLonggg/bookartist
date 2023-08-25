@extends('headeradmin')
@section('main-content-admin')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <form action="{{ route('artists.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" value="">
                </div>
                <div class="form-group">
                    <label for="Product">Featured music products</label>
                    <input type="text" class="form-control" id="Product" name="Product" value="">
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
                    <input type="text" class="form-control" id="BirthDate" name="BirthDate" value="">
                </div>
                <div class="form-group">
                    <label for="Img">Image</label>
                    <input type="file" class="form-control-file" id="Img" name="Img">
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="text" class="form-control" id="Price" name="Price" value="">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea class="form-control" id="Description" name="Description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </section>
</div>
@endsection
@extends('footeradmin')
