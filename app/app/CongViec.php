<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongViec extends Model
{
    protected $table = "tbCong_Viec";

    public $timestamps = false;

    public function nganh() {
        return $this->belongsTo("App\Nganh", "maNganh", "maNganh");
    }

    public function sinhVien() {
        return $this->belongsTo("App\SinhVien", "soCMND", "soCMND");
    }
}
