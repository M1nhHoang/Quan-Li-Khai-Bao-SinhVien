<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\TotNghiep;
use App\Nganh;
use App\Truong;
use App\Service\khaiBaoService;
use PharIo\Manifest\Email;

class SinhVienController extends Controller
{
    public function __construct(khaiBaoService $khaiBaoService)
    {
        $this->khaiBaoService = $khaiBaoService;
    }

    public function index()
    {
        $truongs = Truong::all();
        $nganhs = Nganh::all();

        return view('khaibao', compact('truongs', 'nganhs'));
    }

    public function submit(Request $request)
    {
        $e = $this->khaiBaoService->Save($request);

        return redirect('/khaibao')->with('status', is_null($e)?'Form đã gửi thành công!':'Lỗi: '.$e->getMessage());
    }
}
