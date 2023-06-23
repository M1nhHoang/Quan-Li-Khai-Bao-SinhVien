<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\CongViec;

class quanLyTotNghiepController extends Controller
{
    public function form1(Request $request) {
        if (is_null($request->sreachContent)) {
            $dsSinhVien = SinhVien::all();
        }
        else {
            $dsSinhVien = SinhVien::where('hoTen', 'like', '%'.$request->sreachContent.'%')->get();
        }

        return view('form1', compact('dsSinhVien'));
    }

    public function form2(Request $request) {
        $list = CongViec::select('tbCong_Viec.*')
            ->leftJoin('tbSinhVien', 'tbSinhVien.soCMND', '=', 'tbCong_Viec.soCMND')
            ->leftJoin('tbTot_Nghiep', 'tbTot_Nghiep.soCMND', '=', 'tbSinhVien.soCMND');

        if ($request->lookFor == 'SoCMND') {
            $list = $list->where('tbCong_Viec.soCMND', 'like', '%'.$request->sreachContent.'%');
        }
        elseif ($request->lookFor == 'HoTen') {
            $list = $list->where('tbSinhVien.hoTen', 'like', '%'.$request->sreachContent.'%');
        }
        elseif ($request->lookFor == 'MaNganh') {
            $list = $list->where('tbTot_Nghiep.maNganh', 'like', '%'.$request->sreachContent.'%');
        }
        elseif ($request->lookFor == 'MaTruong') {
            $list = $list->where('tbTot_Nghiep.maTruong', 'like', '%'.$request->sreachContent.'%');
        }
        elseif ($request->lookFor == 'TenCongTy') {
            $list = $list->where('tbCong_Viec.tenCongTy', 'like', '%'.$request->sreachContent.'%');
        }
        $list = $list->get();
        return view('form2', compact('list'));
    }
}
