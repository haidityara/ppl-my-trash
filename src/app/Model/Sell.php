<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $table = 'sells';

    public function getHistoryOrder($user_id)
    {
        $data = Sell::with(['getCategory'])
            ->where('user_id', $user_id)
            ->orderBy('id','desc')
            ->paginate('10');
        return $data;
    }

    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function getCategory(){
        return $this->belongsTo(TrashCategory::class,'trash_category_id');
    }
}
