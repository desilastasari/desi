<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $fillable = ['petugas_id', 'peminjams_id', 'pjmn_tgl', 'pjmn_tgl_kembali'];
    public $timestamp = true;
}
