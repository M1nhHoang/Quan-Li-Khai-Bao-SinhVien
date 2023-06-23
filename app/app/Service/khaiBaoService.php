<?php
namespace App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SinhVien;
use App\TotNghiep;
use App\CongViec;
class khaiBaoService
{
    public function Save(Request $req) {
        try {
            DB::beginTransaction();
            //lưu sinh viên
            $sinhVien = new SinhVien;
            $sinhVien->soCMND = $req->soCMND;
            $sinhVien->hoTen = $req->hoTen;
            $sinhVien->Email = $req->Email;
            $sinhVien->soDt = $req->soDt;
            $sinhVien->diaChi = $req->diaChi;
            $sinhVien->save();

            //lưu thông tin tốt nghiệp
            $totNghiep = new TotNghiep;
            $totNghiep->soCMND = $req->soCMND;
            $totNghiep->maTruong = $req->maTruong;
            $totNghiep->maNganh = $req->maNganh;
            $totNghiep->heTN = $req->heTN;
            $totNghiep->ngayTN = $req->ngayTN;
            $totNghiep->loaiTN = $req->loaiTN;
            $totNghiep->save();

            //lưu thông tin công việc
            $congViec = new CongViec;
            $congViec->soCMND = $req->soCMND;
            $congViec->maNganh = $req->maNganh;
            $congViec->tenCongTy = $req->tenCty;
            $congViec->ngayVaoCongTy = $req->ngayVaoCty;
            $congViec->save();

            DB::commit();
        }
        catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }
}
