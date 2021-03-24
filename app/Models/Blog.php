<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','des','detail','category','public','position','data_public'];
    protected $casts = [
        'position' => 'array',
        'data_public'=> 'date:m-d-Y'
    ];
    public function searchBlog($title){
       
        $data = Blog::where('title', 'like', "%{$title}%")->get();
        return $data;
    }
}
