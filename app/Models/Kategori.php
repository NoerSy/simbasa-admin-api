<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $nm_kategori
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property JenisSampah[] $jenisSampahs
 */
class Kategori extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kategori';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nm_kategori', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jenisSampahs()
    {
        return $this->hasMany('App\Models\JenisSampah');
    }
}
