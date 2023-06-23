<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truong extends Model
{
    protected $table = "tbTruong";
    protected $primaryKey = "maTruong";

    public $timestamps = false;

    public function totNghiep() {
        return $this->hasMany("App\TotNghiep", "maTruong", "maTruong");
    }
}
