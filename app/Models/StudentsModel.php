<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentsModel extends Model
{
	use HasFactory;
	public function allData() {
		return DB::table('tb_students')
        ->join('tb_classes', 'tb_students.fk_classes', '=', 'tb_classes.id_classes')
        ->select('tb_students.*', 'tb_classes.name as classesName')
		->get();
	}
	public function detailData($id) {
        return DB::table('tb_students')
        ->where('id_students', $id)
        ->join('tb_classes', 'tb_students.fk_classes', '=', 'tb_classes.id_classes')
        ->select('tb_students.*', 'tb_classes.name as classesName')
        ->first();
	}
	public function addData($data) {
		return DB::table('tb_students')->insert($data);
	}
	public function updateData($id, $data) {
		return DB::table('tb_students')->where('id_students', $id)->update($data);
	}
	public function deleteData($id) {
		return DB::table('tb_students')->where('nis', $id)->delete();
	}
}
