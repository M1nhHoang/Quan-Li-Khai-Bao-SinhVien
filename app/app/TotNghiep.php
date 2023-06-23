<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotNghiep extends Model
{
    protected $table = "tbTot_Nghiep";

//    protected $primaryKey = ["soCMND", "maTruong", "maNganh"];

    public $timestamps = false;

    public function sinhVien() {
        return $this->belongsTo("App\SinhVien", "soCMND", "soCMND");
    }

    public function nganh() {
        return $this->belongsTo("App\Nganh", "maNganh", "maNganh");
    }

    public function truong() {
        return $this->belongsTo("App\Truong", "maTruong", "maTruong");
    }
}
