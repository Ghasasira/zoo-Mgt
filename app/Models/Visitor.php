<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'arrival_time',
        'departure_time',
        'ticket_no',
        'ticket_id'
    ];

    public function getTicketName()
    {
            return self::join('tickets', 'visitors.ticket_id', '=', 'tickets.id')->select('tickets.ticket_name')->first()->ticket_name;
    }
}
