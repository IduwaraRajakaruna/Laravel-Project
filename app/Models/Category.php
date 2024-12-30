<?php 

//namespace App\Models;

//use Illuminate\Database\Eloquent\Model;

//class Category extends Model
//{
//    use HasFactory;

//    protected $fillable = [
//       'category_name',
        
//    ];
//}


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
    ];
}

