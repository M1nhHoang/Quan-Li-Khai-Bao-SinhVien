<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = "tbSinhVien";

    protected $primaryKey = "soCMND";

    public $timestamps = false;
    public function totNghiep() {
        return $this->hasMany("App\TotNghiep", "soCMND", "soCMND");
    }

    public function congViec() {
        return $this->hasMany("App\CongViec", "soCMND", "soCMND");
    }
}
