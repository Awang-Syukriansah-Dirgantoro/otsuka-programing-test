<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_category_barang extends Model
{
    use HasFactory;
    protected $table = 'mst_category_barangs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
    ];

    /**
     * Get all of the comments for the mst_category_barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barang(): HasMany
    {
        return $this->hasMany(mst_barang::class);
    }
}
