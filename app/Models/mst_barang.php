<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mst_barang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mst_barangs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'image',
        'id_category',
        'status',
    ];
    
    /**
     * Get the user that owns the mst_barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(mst_category_barang::class);
    }
}
