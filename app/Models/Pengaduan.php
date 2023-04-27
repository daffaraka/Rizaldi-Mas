<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image', 'status', 'user_nik', 'user_id', 'type', 'secret', 'lokasi', 'tanggal_kejadian'
    ];

    protected $hidden = [

    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_nik', 'nik');
    }

    public function details() {
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }

    public function phones() {
        return $this->belongsTo(User::class);
    }

    public function tanggapans() {
    return $this->belongsTo(Pengaduan::class, 'id', 'id');
    }


    public function tanggapan() {
    return $this->hasOne(Tanggapan::class);
    }
    public function tanggapann()
    {
        return $this->hasMany(Tanggapan::class);
    }

    public function status() {
    return $this->belongsTo(Tanggapan::class, 'status_id','status');
    }

}
