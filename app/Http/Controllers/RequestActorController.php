<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\RequestActor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestActorController extends Controller
{
    public function store(Request $request)
    {   
        // Check if user is authenticated
        if (Auth::check()) {
            // User is authenticated, so we can access their information
            $user = Auth::user();
            
            // Lấy thông tin diễn viên từ form
            $actorId = $request->input('actor_id');
            $actorName = $request->input('actor_FirstName');
            $actorProduct = $request->input('actor_Product');
            $actorPrice = $request->input('actor_Price');
            $actor = Actor::find($actorId);

            // Thêm thông tin diễn viên vào cơ sở dữ liệu
            $requestModel = new \App\Models\RequestActor(); // Use fully qualified namespace for your custom RequestActor model
            $requestModel->users_id = $user->id; // Thêm id của người dùng đã đăng nhập
            $requestModel->actors_id = $actorId;
            $requestModel->FirstName = $actorName;
            $requestModel->Product = $actorProduct;
            $requestModel->Price = $actorPrice;
            $requestModel->save();
            
            // Chuyển hướng đến trang hiển thị danh sách diễn viên
            return redirect('/home')->with('success', 'Added successfully.');
        } else {
            // User is not authenticated, handle accordingly (e.g. redirect to login page)
            return redirect('/login')->with('error', 'Please login to add.');
        }
    }
    public function index()
    {
        $requests = RequestActor::all();
        return view('adminRequest/adminRequestActor', ['requestactors' => $requests]);
    }
    public function destroy($id)
    {
        $request = RequestActor::find($id);
        $request->delete();
        return redirect('/admin/requestactor')->with('success', 'request deleted successfully.');
    }

}
