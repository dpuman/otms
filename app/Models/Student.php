<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static $student,$message;

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        if($request->mobile)
        {
            self::$student->mobile = $request->mobile;
        }
        else
        {
            self::$student->mobile = '0000000000';
        }

        if($request->password)
        {
            self::$student->password = bcrypt($request->password);
        }
        else
        {
            self::$student->password = bcrypt($request->mobile);
        }
        self::$student->save();
        return self::$student;

    }

    public function enrolls(){
        return $this->hasMany(Enroll::class);
    }

    public static function updateStatus($id){
        self::$student = Student::find($id);
        if(self::$student->status == 1){
            self::$student->status = 0;
            self::$message = 'Student status info inactive successfully';
        }
        else{
            self::$student->status = 1;
            self::$message = 'Student status info active successfully';
        }

        self::$student->save();
        return self::$message;
    }
}
