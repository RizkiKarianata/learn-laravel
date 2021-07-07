<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SchedulesModel extends Model
{
    use HasFactory;
    public function allData() {
    	return DB::table('tb_schedules')
        ->join('tb_classes', 'tb_schedules.fk_classes', '=', 'tb_classes.id_classes')
        ->join('tb_lessons', 'tb_schedules.fk_lessons', '=', 'tb_lessons.id_lessons')
        ->join('tb_teachers', 'tb_schedules.fk_teachers', '=', 'tb_teachers.id_teachers')
        ->select('tb_schedules.*', 'tb_classes.name as classesName', 'tb_lessons.name as lessonsName', 'tb_teachers.name as teachersName')
        ->get();
    }
    public function detailData($id) {
    	return DB::table('tb_schedules')
        ->where('tb_schedules.id_schedules', $id)
        ->join('tb_classes', 'tb_schedules.fk_classes', '=', 'tb_classes.id_classes')
        ->join('tb_lessons', 'tb_schedules.fk_lessons', '=', 'tb_lessons.id_lessons')
        ->join('tb_teachers', 'tb_schedules.fk_teachers', '=', 'tb_teachers.id_teachers')
        ->select('tb_schedules.*', 'tb_classes.name as classesName', 'tb_lessons.name as lessonsName', 'tb_teachers.name as teachersName')
        ->first();
    }
    public function addData($data) {
    	return DB::table('tb_schedules')->insert($data);
    }
    public function updateData($id, $data) {
    	return DB::table('tb_schedules')->where('id_schedules', $id)->update($data);
    }
    public function deleteData($id) {
    	return DB::table('tb_schedules')->where('id_schedules', $id)->delete();
    }
}
