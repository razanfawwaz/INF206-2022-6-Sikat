<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'users_id', 'Nama', 'NomorHP', 'UnitLayanan', 'DeskripsiSingkatKejadian', 'AlamatKejadian', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
