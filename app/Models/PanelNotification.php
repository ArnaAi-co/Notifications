<?php


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelNotification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'order', 'title', 'description', 'status'];

    const TYPES = [
        'primary', 'success', 'danger', 'warning', 'info', 'dark'
    ];
    const ORDERS = [
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,

    ];
    const STATUSES = [
        1 => 'Enable', 0 => 'Disable'
    ];
}
