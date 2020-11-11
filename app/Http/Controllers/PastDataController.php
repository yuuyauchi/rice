<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class PastDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        
        
        //後で一対多の関係を作るのでif文を入れておく
        if (\Auth::check()){ 
        //顧客一覧をidの降順で取得
        $customers = Customer::orderBy('id','desc')->paginate(10);
        
        $data = [
            'customers' => $customers,
            ];
        }
        //顧客一覧ビューで顧客を表示
        return view('pastdata.index',$data);
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
        $customer = Customer::findOrFail($id);
        
        //後で一対多の関係を作るのでif文を入れておく
        if (\Auth::check()) {
        return view('pastdata.show',[
                'customer' => $customer,    
            ]);
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        
        //後で一対多の関係を作るのでif文を入れておく
        if (\Auth::check()) {
            return view('pastdata.edit',[
                'customer' => $customer,    
            ]);
        }else{
            return redirect('/');
        }
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
        $customer = Customer::findOrFail($id);
        $customer->usageTimesEver = $request->usageTimesEver;
        $customer->usageAmountEver = $request->usageAmountEver;
        $customer->harvestAmountPreYear = $request->harvestAmountPreYear;
        $customer->usageAmountThisYear = $request->usageAmountThisYear;
        $customer->usageAreaThisYear = $request->usageAreaThisYear;
        $customer->climate = $request->climate;
        $customer->riceVariety = $request->riceVariety;
        $customer->save();
        return redirect('/pastdata');
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
