<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TrashCategory extends Model
{
    protected $table = 'trash_categories';

    public function getAllTrashCategories()
    {
        return TrashCategory::all();
    }
}
