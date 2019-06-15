<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    protected $table = 'akses';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama', 'nilai_akses', 'deskripsi', 'harga'
    ];

    public function user(){
        return $this->belongsToMany('App\User', 'user_akses', 'id_akses', 'username')->withPivot('status', 'waktu_berakhir');
    }

}
