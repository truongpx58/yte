<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bacSi;
use App\benhNhan;
use Auth;
use App\benhDTD;
use App\benhTHA;
use App\Http\Requests\BenhDTDRequest;
use App\Http\Requests\BenhTHARequest;
class UserController extends Controller
{
    public function getBenhdtd() {
        return view('users.benhdtd');
    }

    public function postBenhdtd(BenhDTDRequest $request) {

        $x = new benhDTD;
        $x->ngay = $request->ngay;
        $x->huyetAp = $request->huyetAp;
        $x->canNang = $request->canNang;
        $x->chieuCao = $request->chieuCao;
        $x->duongHuyet = $request->duongHuyet;
        $x->tinhTrang = $request->tinhTrang;
        $x->tl = $request->tl;
        $x->r = $request->r;
        $x->an = $request->an;
        $x->save();
        return redirect('bn');
    }

    public function getBenhtha() {
        return view('users.benhtha');
    }

    public function postBenhtha(BenhTHARequest $request) {

        $x = new benhTHA;
        $x->ngay = $request->ngay;
        $x->huyetAp = $request->huyetAp;
        $x->canNang = $request->canNang;
        $x->chieuCao = $request->chieuCao;
        $x->tinhTrang = $request->tinhTrang;
        $x->tl = $request->tl;
        $x->r = $request->r;
        $x->an = $request->an;
        $x->vd = $request->vd;
        $x->save();
        return redirect('bn');
    }

    
    public function getDoctorList() {
    	$data = bacSi::select('id','hoTen')->get()->toArray();
    	//print_r($data);
    	return view('users.doctorList', ['data'=>$data]);
    }

    public function getDoctorDetail($id) {
    	$id = Auth::user()->id;
    	//$user_detail = User::find($id);
        $data = bacSi::select('hoTen','ngheNghiep','chuyenNganh','sdt')->where('id','=',$id)->get();
    	
    	// $hoTen = bacSi::select('hoTen')->get();
    	// $ngheNghiep = bacSi::select('ngheNghiep')->get();
    	// $chuyenNganh = bacSi::select('chuyenNganh')->get();
    	// $sdt = bacSi::select('sdt')->get();
    	// $data = [];
    	// $data['hoTen'] = $hoTen;
    	// $data['ngheNghiep'] = $ngheNghiep;
    	// $data['chuyenNganh'] = $chuyenNganh;
    	// $data['sdt'] = $sdt;
    	return view('users.doctorDetail',['data'=>$data]);

    }

    //BAC SI XEM DANH SACH BENH NHAN DA DANG KY MINH
    public function getBenhNhanList($id){
        $id = Auth::user()->id;
        $data = benhNhan::select('id','hoTen')->get()->toArray();

        return view('users.patientList',['data'=>$data]);
    }

}
