<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bagian
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian query()
 * @mixin \Eloquent
 * @property-read \App\Models\Kegiatan $kegiatan
 * @property int $id
 * @property string $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereUpdatedAt($value)
 * @property-read int|null $kegiatan_count
 */
class Bagian extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
}
