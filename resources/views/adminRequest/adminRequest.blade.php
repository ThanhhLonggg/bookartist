@extends('headeradmin')
@section('main-content-admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top:50px;">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Request Artist Management</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Artist ID</th>
                      <th>Artist Name</th>
                      <th>Img</th>
                      <th>Price</th>
                      <th>User ID</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($requests as $request)
                      <tr>
                        <td>{{$request->id}}</td>
                        <td>{{$request->artists_id}}</td>
                        <td>{{$request->Name}}</td>
                        <td><img style="height:300px" src="{{ asset('images/' . $request->Img) }}" alt=""></td>
                        <td>{{$request->Price}}</td>
                        <td>{{$request->users_id}}</td>
                        <td>{{$request->Time}}</td>
                        <td>
                          <form action="{{ route('requests.destroy', $request->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            <button type="submit" class="btn btn-success"onclick="return confirm('Are you sure you want to accept this request?')">Accept</button>
                          </form>
                          <form action="{{ route('requests.destroy', $request->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want decline this request?');">Decline</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@extends('footeradmin')
