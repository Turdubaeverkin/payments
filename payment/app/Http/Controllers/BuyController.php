<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Customer;
use Illuminate\Http\Request;

function valid_credit($s) {

    $s = strrev(preg_replace('/[^\d]/','',$s));

    $sum = 0;
    for ($i = 0, $j = strlen($s); $i < $j; $i++) {

        if (($i % 2) == 0) {
            $val = $s[$i];
        } else {
             $val = $s[$i] * 2;
            if ($val > 9)  $val -= 9;
        }
        $sum += $val;
    }

    return (($sum % 10) == 0);
}



class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $this->validate($request, [
            'name'=>['required'],
            'email'=>['required', 'email'],
            'product'=>['required'],
            'price'=>['required', 'numeric'],
//            'nomer'=>['reguired']
        ]);
        if (! valid_credit($request->nomer)) {
            return "false";
        }
        else{
            Customer::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'order_name'=>$request->product,
                'order_price'=>$request->price,
                'nomer'=>$request->nomer,
                ]);
        }
        return "OK";
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
