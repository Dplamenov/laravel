<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    private static function isLogged(Request $request){
        if($request->session()->get('islogged') != true){
            return false;
        }
        return true;
    }

    public function index(Request $request)
    {

        if($request->session()->get('islogged') == true){
            return view('logged');
        }else{
            return view('login');
        }
    }

    public function login(Request $request){
        $request_post = $request->post();
        $username = $request_post['username'];
        $password = $request_post['password'];

        $count = DB::select('SELECT COUNT(*) as count FROM `admin` WHERE `username` = ? and `password` = ?',[$username,$password])[0]->count;
        if($count == 1){
            $request->session()->put('islogged',true);
            return redirect('admin');
        }else{
            return view('error',['error' => 'No such that admin at database']);
        }

    }

    public function logout(Request $request){
        $request->session()->put('islogged',false);
        return redirect('admin');
    }

    public function viewPage(Request $request){
        if(self::isLogged($request) == false){
            return redirect('admin');
        }
        $pages = new Models\Page();
        $pages = $pages->getAllPage();
        if(count($pages) == 0){
            return view('allpage',['pages' => 'No page']);
        }
        return view('allpage',['pages' => $pages]);
    }

    public function deletePage(Request $request, int $id){
        if(self::isLogged($request) == false){
            return redirect('admin');
        }
        DB::delete('DELETE FROM `pages` WHERE `page_id` = ?',[$id]);
        return redirect(url('admin/page'));
    }

}
