<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DefaultModel extends Model
{
    use HasFactory;
    public function getData() {
    	return DB::table('tb_classes')->orderBy('name', 'asc')->get();
    }
}
