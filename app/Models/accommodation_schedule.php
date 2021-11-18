<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accommodation_schedule extends Model
{
    use HasFactory;
    public static function readDates() {
        return  self::join("rooms","rooms.id","accommodation_schedules.room_id")
                ->selectRaw("accommodation_schedules.date_from as date_from")
                ->selectRaw("accommodation_schedules.date_to as date_to")
                ->selectRaw("rooms.id as id")
                ->selectRaw("rooms.max_tenants as max_tenants")
                ->orderBy("accommodation_schedules.date_from")->get();
    }
    public static function ifExist($dateFrom,$dateTo,$idRoom) {
        return  self::join("rooms","rooms.id","accommodation_schedules.room_id")
                ->selectRaw("rooms.max_tenants as max_tenants")
                ->selectRaw("accommodation_schedules.date_from as date_from")
                ->selectRaw("accommodation_schedules.date_to as date_to")
                ->where("accommodation_schedules.date_to",">",$dateFrom)
                ->where("accommodation_schedules.date_from","<",$dateTo)
                //->where("rooms.id",$idRoom)
                ->orderBy("accommodation_schedules.date_from")->get();   
    }
}
