<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalModel extends Model
{
    use HasFactory;

    public static function format_currency($value)
    {
        $value = 'Rp' . number_format($value, 0, ',', '.');
        return $value;
    }

    public static function format_date($date)
    {
        $date = date('d M Y', strtotime($date));

        return $date;
    }
}
