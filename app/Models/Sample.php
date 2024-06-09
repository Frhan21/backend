<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
        'average_intensity','average_voltage','absorbance'
    ];

    protected $table = 'sample';

    public function sensor_data() {
        return $this->hasMany(Sensor::class, 'sample_id');
    }
}
