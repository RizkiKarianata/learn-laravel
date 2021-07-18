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
    public function getStudent() {
    	return DB::table('tb_students')->count();
    }
    public function getTeacher() {
    	return DB::table('tb_teachers')->count();
    }
    public function getSchedule() {
    	return DB::table('tb_schedules')->count();
    }
    public function getClass() {
    	return DB::table('tb_classes')->count();
    }
    public function addDataStudent($data) {
        return DB::table('tb_students')->insert($data);
    }
    public function addDataUser($data) {
        return DB::table('tb_users')->insert($data);
    }
    public function updateDataStudent($id, $data) {
        return DB::table('tb_students')->where('nis', $id)->update($data);
    }
    public function updateDataUser($id, $data) {
        return DB::table('tb_users')->where('username', $id)->update($data);
    }
}
