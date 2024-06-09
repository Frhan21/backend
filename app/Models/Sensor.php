<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
    protected $fillable = [
        'sample_id', 'uv_reading', 'v_reading'
    ];

    protected $table = "sensor_data";

    public function sample() {
        return $this->belongsTo(Sample::class, 'sample_id');
    }
}
