<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeachersModel extends Model
{
    use HasFactory;
   public function allData() {
    	return DB::table('tb_teachers')->get();
    }
    public function detailData($id) {
    	return DB::table('tb_teachers')->where('id_teachers', $id)->first();
    }
    public function addData($data) {
    	return DB::table('tb_teachers')->insert($data);
    }
    public function updateData($id, $data) {
    	return DB::table('tb_teachers')->where('id_teachers', $id)->update($data);
    }
    public function deleteData($id) {
    	return DB::table('tb_teachers')->where('id_teachers', $id)->delete();
    }
}
