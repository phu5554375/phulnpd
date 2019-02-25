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

        $id=$request->id;

        $request->session()->put('background',$id);

        if($request->session()->get('images')!==null){
            $image=$request->session()->get('images');


            return view('frontend.editor',['images'=>$image,'id'=>$id]);
        }

        return view('frontend.editor',['id'=>$id]);

    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function template()
    {
        return view('frontend.template');
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

        $bg=$request->session()->get('background');

        $loichuc=$request->session()->get('loichuc');

        $loichuc=implode("-",$loichuc);

        $email = new TblOrder;

        $email->email = $request->email;
        $email->image = $image;
        $email->congratu = $loichuc;
        $email->background = $bg;
        $email->save();
        return [
            'err'=>false,
             'msg'=>'Thành công'
            ];              
    }

    public function test(Request $request)
    {
       return $request->session()->get('loichuc');

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

public function loichuc(Request $request) {
   $data=$request->loichuc;
   $request->session()->put('loichuc',$data);
   

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
}
}
