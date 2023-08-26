<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\RequestActor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
            $actor = Actor::find($actorId);

            // Thêm thông tin diễn viên vào cơ sở dữ liệu
            $requestModel = new \App\Models\RequestActor(); // Use fully qualified namespace for your custom RequestActor model
            $requestModel->users_id = $user->id; // Thêm id của người dùng đã đăng nhập
            $requestModel->actors_id = $actorId;
            $requestModel->Name = $actor->Name;
            $requestModel->Img = $actor->Img;
            $requestModel->Price = $actor->Price;
             // Lấy thời gian hiện tại theo múi giờ UTC
             $nowUTC = Carbon::now();
        
             // Thiết lập múi giờ cho thời gian theo múi giờ Việt Nam (GMT+7)
             $nowVietnam = $nowUTC->setTimezone('Asia/Ho_Chi_Minh');
         
             // Gán thời gian cho trường Time
             $requestModel->Time = $nowVietnam; // Thêm thời gian thực khi người dùng bấm vào nút Book
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
