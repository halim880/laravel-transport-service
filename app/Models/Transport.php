<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFormatedDateAttribute(){
        return Carbon::parse($this->date)->format("d M Y");
    }

    public function getCreatedAttribute(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }
    public function getUpdatedAttribute(){
        return Carbon::parse($this->updated_at)->format("h:i a");
    }
}
