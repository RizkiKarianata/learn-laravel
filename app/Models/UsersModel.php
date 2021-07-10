<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersModel extends Model
{
    use HasFactory;
    public function allData() {
    	return DB::table('tb_users')->where('level', 'Admin')->get();
    }
    public function detailData($id) {
    	return DB::table('tb_users')->where('id_users', $id)->first();
    }
    public function addData($data) {
    	return DB::table('tb_users')->insert($data);
    }
    public function updateData($id, $data) {
    	return DB::table('tb_users')->where('id_users', $id)->update($data);
    }
    public function updateData2($id, $data) {
        return DB::table('tb_users')->where('username', $id)->update($data);
    }
    public function deleteData($id) {
    	return DB::table('tb_users')->where('id_users', $id)->delete();
    }
    public function deleteData2($id) {
        return DB::table('tb_users')->where('username', $id)->delete();
    }
}
