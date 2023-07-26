<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    
    public function getStudent(){
        $result = DB::table('students')
        ->orderBy('created_at', 'desc') // Sắp xếp theo trường created_at theo thứ tự giảm dần (mới nhất đầu tiên)
            ->get();
        return $result;
    }

    public function addStudent($data){
        $result = DB::table('students')->insert($data);
        return $result;
    }
    public function deleteStudent($id){
        $result = DB::table('students')->where('id', $id)->delete();
        return $result;
    }
}
