<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
   
    public function lawDepartment(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
