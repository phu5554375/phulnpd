<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblIntro;
class IntrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDanhSach()
    {
        $introl = TblIntro::all();
        return view('admin.introl.danhsach',['introls' =>$introl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        return view('admin.introl.add');
    }
    public function postAdd(request $request)
    {
        $this->validate($request,
        [
        'Ten' => 'required|min:5|max:30'
            ],
            [
        'Ten.required'=>'Bạn chưa nhập tên thể loại',
        'Ten.min'=>'Ten thể loại phải có độ dài từ 5 đến 30 ký tự',
        'Ten.max'=>'Ten thể loại phải có độ dài từ 5 đến 30 ký tự',
         ]); 

        $introl = new TblIntro;
        $introl -> Ten = $request -> Ten;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
