<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $fillable = ['name', 'description', 'file_path', 'status'];

    public function scopeBajo($query){
        return $query->where('status', 'Bajo');
    }
    public function scopeMedio($query){
        return $query->where('status', 'Medio');
    }
    public function scopeAlto($query){
        return $query->where('status', 'Alto');
    }

    
}
