<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Content extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'article', 'images',  'id_category', 'sub_category', 'caption', 'credit', 'trending'];
    
    // Inner Join dengan tabel kategori
    public function allData()
    {
        return Content::join('categories', 'contents.id_category', '=', 'categories.id_category')
        ->select('contents.*', 'category')
        ->orderby('contents.created_at', 'desc')
        ->simplepaginate(10);
    }

    // Postingan Terbaru
    public function latest()
    {
        return Content::join('categories', 'contents.id_category', '=', 'categories.id_category')->select('contents.*', 'category')
        ->orderby('contents.created_at', 'desc')
        ->get();
    }

    // Trending
    public function trending()
    {
        return Content::join('categories', 'contents.id_category', '=', 'categories.id_category')
        ->select('contents.*', 'category')
        ->where('trending', '1')
        ->orderby('contents.created_at', 'desc')
        ->take(10)
        ->get();
    }

    // Kategori
    public function categories()
    {
        return DB::table('categories')
        ->orderby('created_at', 'asc')
        ->get();
    }

    // Banner
    public function banner()
    {
        return Content::join('categories', 'contents.id_category', '=', 'categories.id_category')
        ->select('contents.*', 'category')
        ->orderby('contents.created_at', 'desc')
        ->paginate(3);
    }

    // Rekomendasi
    public function recommended() {
        return Content::join('categories', 'contents.id_category', '=', 'categories.id_category')
        ->select('contents.*', 'category')
        ->limit(7)
        ->inRandomOrder()
        ->get();
    }

    // Recent Post
    public function recent() {
        return Content::join('categories', 'contents.id_category', '=', 'categories.id_category')
        ->select('contents.*', 'category')
        ->orderby('contents.created_at', 'desc')
        ->take(10)
        ->get();
    } 

    // By Category
    // public function by_category() {
    //     return Content::join('categories', 'contents.id_category', '=', 'categories.id_category')
    //     ->where('categories.id_category', $item)
    //     ->orderby('created_at', 'desc')
    //     ->get();
    // }

    use HasFactory;
}