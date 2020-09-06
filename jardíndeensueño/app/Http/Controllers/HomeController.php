<?php

namespace App\Http\Controllers;

use App\Menu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Connection;


class HomeController extends Controller
{
    public function createView()
    {
        return view('users.create');
    }
    public function create(Request $request)
    {
        $data = $request->all();

         DB::table('menus')->insert([
            'baslangic' => $request->get('baslangic'),
            'anayemek' => $request->get('anayemek'),
            'tatli' => $request->get('tatli'),
             'photo'=> $request->get('photo'),
             'price'=>$request->get('price')

        ]);

        return 'Sipariş başarıyla kaydedildi!';

    }
    public function updateView($id)
    {
        $menu = Menu::where('id',$id)->get();
        $menu = $menu->first();

        return view('users.update',compact('menu'));
    }
    public function update(Request $request,$id)
    {
          Menu::where('id',$id)->update([
            'baslangic' => $request->get('baslangic'),
            'anayemek' => $request->get('anayemek'),
            'tatli' => $request->get('tatli'),
            'photo'=> $request->get('photo'),
            'price'=>$request->get('price'),
            'updated_at' => Carbon::now()
        ]);
        return 'Başarıyla Güncellendi';
    }

    public function indexView()
    {
        $menu = DB::table('menus')->where('deleted_at', '=', null)->get();

        return view('users.index', compact('menu'));

    }


    public function delete($id)
    {
        // DB::table('users')->where('id','=',$id)->delete(); // Hard delete ile veriyi kalıcı siler. TAVSİYE EDİLMEZ!
        DB::table('menus')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now()
        ]);
        return 'Başarıyla Silindi';
    }
}
