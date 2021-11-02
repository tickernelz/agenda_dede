<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Kegiatan
 *
 * @property int $id
 * @property string $bagian
 * @property string $tanggaldari
 * @property string $tanggalsampai
 * @property string $kegiatan
 * @property string $keterangan
 * @property string|null $tempat
 * @property string $kecamatan
 * @property string $kota
 * @property string $provinsi
 * @property string|null $berkas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereBerkas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereKegiatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereTanggaldari($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereTanggalsampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereTempat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read int|null $bagian_count
 * @property int $bagian_id
 * @method static \Illuminate\Database\Eloquent\Builder|Kegiatan whereBagianId($value)
 */
class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }
}
