<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClassesModel extends Model
{
    use HasFactory;
    public function allData() {
    	return DB::table('tb_classes')->get();
    }
    public function detailData($id) {
    	return DB::table('tb_classes')->where('id_classes', $id)->first();
    }
    public function addData($data) {
    	return DB::table('tb_classes')->insert($data);
    }
    public function updateData($id, $data) {
    	return DB::table('tb_classes')->where('id_classes', $id)->update($data);
    }
    public function deleteData($id) {
    	return DB::table('tb_classes')->where('id_classes', $id)->delete();
    }
}
