<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Simply Create a Model With cmd || php artisan make:model ModelName || 
// Always Try to name Models in Singular and tables in Plural If Possibel
// Eg Table-> Users || Model->User or Table-> Students || Model->Student


class Student extends Model
{
    //Simply Create a protected variable You can use public as well but protected is recommend for sql DB
    // create a var || $table = "yourTableName";
    //You can Also Create any function and call this to the controller as well remember to always use path before;

   protected $table="college_students"; 

   function fun()
   {
    echo "This is the Fun Function From the Student Controller";
   }
   //
}
