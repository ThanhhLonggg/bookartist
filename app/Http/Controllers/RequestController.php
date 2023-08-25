<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RequestController extends Controller
{
    public function store(Request $request)
    {   
        // Check if user is authenticated
        if (Auth::check()) {
            // User is authenticated, so we can access their information
            $user = Auth::user();
            
            // Lấy thông tin nghệ sĩ từ form
            $artistId = $request->input('artist_id');
            $artist = Artist::find($artistId);

            // Thêm thông tin nghệ sĩ vào cơ sở dữ liệu
            $requestModel = new \App\Models\Request(); // Use fully qualified namespace for your custom Request model
            $requestModel->users_id = $user->id; // Thêm id của người dùng đã đăng nhập
            $requestModel->artists_id = $artistId;
            $requestModel->Name = $artist ->Name;
            $requestModel->Img = $artist->Img;
            $requestModel->Price = $artist->Price;
            // Lấy thời gian hiện tại theo múi giờ UTC
            $nowUTC = Carbon::now();
        
            // Thiết lập múi giờ cho thời gian theo múi giờ Việt Nam (GMT+7)
            $nowVietnam = $nowUTC->setTimezone('Asia/Ho_Chi_Minh');
        
            // Gán thời gian cho trường Time
            $requestModel->Time = $nowVietnam; // Thêm thời gian thực khi người dùng bấm vào nút Book
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
        return view('adminRequest/adminRequest', ['requests' => $requests]);
    }
    public function destroy($id)
    {
        $request = ModelsRequest::find($id);
        $request->delete();
        return redirect('/admin/request')->with('success', 'request deleted successfully.');
    }

}
