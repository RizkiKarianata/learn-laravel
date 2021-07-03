<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LessonsModel extends Model
{
    use HasFactory;
    public function allData() {
    	return DB::table('tb_lessons')->get();
    }
    public function detailData($id) {
    	return DB::table('tb_lessons')->where('id_lessons', $id)->first();
    }
    public function addData($data) {
    	return DB::table('tb_lessons')->insert($data);
    }
    public function updateData($id, $data) {
    	return DB::table('tb_lessons')->where('id_lessons', $id)->update($data);
    }
    public function deleteData($id) {
    	return DB::table('tb_lessons')->where('id_lessons', $id)->delete();
    }
}
