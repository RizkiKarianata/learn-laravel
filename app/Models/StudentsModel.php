<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentsModel extends Model
{
	use HasFactory;
	public function allData() {
		return DB::table('tb_students')->get();
	}
	public function detailData($id) {
		return DB::table('tb_students')->where('id_students', $id)->first();
	}
	public function addData($data) {
		return DB::table('tb_students')->insert($data);
	}
	public function updateData($id, $data) {
		return DB::table('tb_students')->where('id_students', $id)->update($data);
	}
	public function deleteData($id) {
		return DB::table('tb_students')->where('id_students', $id)->delete();
	}
}
