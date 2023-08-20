<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Actor;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RequestController extends Controller
{
    public function store(Request $request)
    {   
        // Check if user is authenticated
        if (Auth::check()) {
            // User is authenticated, so we can access their information
            $user = Auth::user();
            
            // Lấy thông tin nghệ sĩ từ form
            $actorId = $request->input('actor_id');
            $actorFisrtName = $request->input('actor_FirstName');
            $actorLastName = $request->input('actor_LastName');
            $actorPrice = $request->input('actor_Price');
            $actor = Artist::find($actorId);
            // Thêm thông tin nghệ sĩ vào cơ sở dữ liệu
            $requestModel = new \App\Models\Request(); // Use fully qualified namespace for your custom Request model
            $requestModel->users_id = $user->id; // Thêm id của người dùng đã đăng nhập
            $requestModel->actors_id = $actorId;
            $requestModel->FirstName = $actorFisrtName;
            $requestModel->LastName = $actorLastName;
            $requestModel->Price = $actorPrice;
            $requestModel->save();
            
            // Chuyển hướng đến trang hiển thị danh sách nghệ sĩ
            return redirect('/home')->with('success', 'Added successfully.');
        } else {
            // User is not authenticated, handle accordingly (e.g. redirect to login page)
            return redirect('/login')->with('error', 'Please login to add.');
        }
    }
    public function index()
    {
        $requests = ModelsRequest::all();
        return view('adminRequestActor', ['requests' => $requests]);
    }
    public function destroy($id)
    {
        $request = ModelsRequest::find($id);
        $request->delete();
        return redirect('/admin/request')->with('success', 'request deleted successfully.');
    }

}
