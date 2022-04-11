<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalModal extends Model
{
    use HasFactory;

    public function format_currency($value)
    {
        $value = number_format($value, 0, '.', ',');
        return $value;
    }

    public function format_date($date)
    {
        $date = date('d M Y', strtotime($date));

        return $date;
    }
}
