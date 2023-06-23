<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nganh extends Model
{
    protected $table = "tbNganh";

    protected $primaryKey = "maNganh";

    public $timestamps = false;

    public function totNghiep() {
        return $this->hasMany("App\TotNghiep", "maNganh", "maNganh");
    }

    public function congViec() {
        return $this->hasMany("App\CongViec", "maNganh", "maNganh");
    }
}
