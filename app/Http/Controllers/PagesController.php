<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Content;
use App\Models\Photo;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->Content = new Content();
    }

    // Laman Admin
    public function admin()
    {
        $count_users = User::count();
        $count_contents = Content::count();
        $count_photos = Photo::count();
        $count_ads = Ad::count();
        $data = [
            'trending' => $this->Content->trending(),
            'recent' => $this->Content->recent(),
        ];
        return view('admin.index', $data, compact('count_users', 'count_contents', 'count_ads', 'count_photos'));
    } // End laman Admin

    // Untuk Laman Publik
    public function index()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'banner' => $this->Content->banner(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('index', $data);
    }

    public function categories($item)
    {
        $by_category = Content::join('categories', 'contents.id_category', '=', 'categories.id_category')->where('contents.id_category', $item)->orderby('contents.created_at', 'desc')->get();
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.categories', $data, compact('by_category', 'item'));
    }
    
    public function article(Content $content)
    {
        $baca_juga = Content::join('categories', 'contents.id_category', '=', 'categories.id_category')->where('contents.id_category', $content->id_category)->orderby('contents.created_at', 'desc')->take(2)->get();
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.article', $data, compact('content', 'baca_juga'));
    }

    // Laman Error
    public function laman_kosong()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.laman_kosong', $data);
    }

    public function pms()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.pms', $data);
    }

    public function ppa()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.ppa', $data);
    }

    public function kkp()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.kkp', $data);
    }

    public function iklanmore()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.iklanmore', $data);
    }

    public function pkp()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.pkp', $data);
    }

    public function bantuan()
    {
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];
        return view('content-views.bantuan', $data);
    }

    // Query Search
    public function caripublic(Request $request)
    {
        //get the general information about the website
        $website = Content::query()->firstOrFail();

        $key = trim($request->get('q'));

        $posts = Content::query()
            ->where('title', 'like', "%{$key}%")
            //->orWhere('title', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        //get all the categories
        $categories = DB::table('categories')->get();

        //get the recent 5 posts
        $recent_posts = Content::query()
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        $data = [
            'latest' => $this->Content->latest(),
            'trending' => $this->Content->trending(),
            'categories' => $this->Content->categories(),
            'recommended' => $this->Content->recommended(),
            'recent' => $this->Content->recent(),
        ];

        return view('content-views.search', $data,
        [
            'website' => $website,
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'recent_posts' => $recent_posts
        ]);
    }
}