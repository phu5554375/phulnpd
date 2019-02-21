<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TblIntro;
use App\Models\TblOrder;
use Auth;
class HomeController extends Controller
{

    public function index()
    {
        $data= TblIntro::all();
        return view("frontend.index", ["tbl_intros"=>$data]);
        
    }

    public function editor(Request $request)
    {
        // if($request->session()->get('images')!==null){
        //     $image=$request->session()->get('images');
        //     return view('frontend.editor',['images'=>$image]);
        // }
        return view('frontend.editor');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function fqa()
    {
        return view('frontend.fqa');
    }
    public function policy()
    {
        return view('frontend.policy');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
    public function email(Request $request)
    {
        $image=$request->session()->get('images');
        $image=implode("-",$image);
        $email = new TblOrder;

        $email->email = $request->email;
        $email->image = $image;

        $email->save();

        return redirect()->back();
    }

    public function test(Request $request)
    {
       return $request->session()->get('images');

    }

    public function login()
    {
        return view('admin.user.login');
    }
    public function getLogout() {
        Auth::logout();
        return redirect(\URL::previous());
    }
    public function listintrol()
    {
        return view('admin.introl.danhsach');
    }
    public function getIndex() {
        return view('admin.layouts.index');
    }

    public function imagesUploadPost(Request $request)

    {

        $sesion=$request->session()->get('images');
        if($files=$request->file('images')){

         foreach($files as $file){
            $name=$file->getClientOriginalName();
            $imageName = time().$name;
            $file->move(public_path('images'), $imageName);
            $images[]=$imageName;

        }
        $request->session()->put('images',$images);



    }
    return redirect()->back();

           //  request()->validate([

           //    'uploadFile' => 'required',

           // ]);


            // foreach ($request->file('uploadFile') as $key => $value) {

            //     $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

            //     $value->move(public_path('images'), $imageName);

            // }




    }
}
