<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function monthly() {


        return view('admin.search.monthly');
    }


     public function getmonthly(Request $request) {


       if ($request->filter == 'Supplier') {
           
    $start_date = \Carbon\Carbon::parse($request->date_from)
                             ->toDateTimeString();

       $end_date = \Carbon\Carbon::parse($request->date_to)
                             ->toDateTimeString();
       $trans =  Transaction::whereBetween('created_at',[$start_date,$end_date])->where('s_b', $request->filter)->orderBy('created_at', 'desc')->paginate(20);

       }else {

            $start_date = \Carbon\Carbon::parse($request->date_from)
                             ->toDateTimeString();

       $end_date = \Carbon\Carbon::parse($request->date_to)
                             ->toDateTimeString();

       $trans =  Transaction::where('created_at',[$start_date,$end_date])->where('s_b', $request->filter)->orderBy('created_at', 'desc')->paginate(20);

       }


       $count = $trans->count();
       $sum = $trans->sum('amount');

       if ($count > 0) {
                  $avg = $trans->sum('avgtime') / $trans->count();
       }else{
        $avg = 1;
       }
       $total_hitted = $trans->where('rule_hitted', '!=', null)->count();
       $total_amount_hitted = $trans->where('rule_hitted', '!=', null)->sum('amount');
       $total_clear = $trans->where('rule_hitted', '=', null)->count();
       $total_amount_clear = $trans->where('rule_hitted', '=', null)->sum('amount');


         return view('admin.search.getmonthly', compact('trans', 'count', 'sum', 'avg', 'total_hitted', 'total_amount_hitted', 'total_clear', 'total_amount_clear'));
    }



    public function search(Request $request) {

$search = $request->record;

if ($request->filter == 'cs_no') {
    
    $trans = transaction::query()->where('customer_no', 'LIKE', "%{$search}%")->orderBy('created_at', 'desc')->paginate(20);

}elseif ($request->filter == 's_code') {
    
    $trans = transaction::query()->where('s_b_code', 'LIKE', "%{$search}%")->where('s_b' , 'Supplier')->orderBy('created_at', 'desc')->paginate(20);
}elseif ($request->filter == 'b_code') {
    
    $trans = transaction::query()->where('s_b_code', 'LIKE', "%{$search}%")->where('s_b' , 'Buyer')->orderBy('created_at', 'desc')->paginate(20);

}else {
    $trans = 'no data founds';
}



 return view('admin.search', compact('trans', 'search'));
    }


    public function index()
    {

        $transactions = Transaction::orderBy('created_at', 'desc')->paginate(20);
                return view('admin.transactions.index', compact('transactions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.transactions.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'customer_no' => ' required',
            'account_no' => 'required',
            'account_name' => 'required',
            'facility_type' => 'required',
            'legal_form' => 'required',
            's_b_code' => 'required',
            's_b' => 'required',
            's_b_name' => 'required',
            'cr_s_b' => 'required',
            'type_sb' => 'required',
            'date_trs' => 'required',
            'sent_time' => 'required',
            'amount' => 'required',
            'reply_time' => 'required',
            'officer' => 'required',
            'sender' => 'required',
            'justification' => 'required',
            'disbursement_type' => 'required',
           ], ['customer_no'=> 'The Customer Number is Required', 'account_no' => 'Account Numer is Required', 'account_name' => 'The account Name is Required', 'facility_type' => 'Facility Type is Required', 'legal_form' => 'Legal Form is Required', 's_b_code'=> 'S/B Code is Required' , 's_b' => 'This Field is Required', 's_b_name' => 'Supplier/ Buyer name is Required', 'cr_s_b' => 'Commerical Reigster required', 'type_sb' => 'the Type is Required', 'date_trs' => ' the date is Required', 'sent_time' => 'The sent time is Required' , 'reply_time' => 'The Reply time is Required', 'amount' =>'The amount is Required', 'officer' => 'The officer is Required' , 'sender' => 'the sender is reuqired' , 'justification' => 'justification is required', 'disbursement_type' => 'disbursement type is required'],
           );

        $transaction =  new Transaction;
        $transaction->customer_no = $request->customer_no;
        $transaction->account_name = $request->account_name;
        $transaction->account_no = $request->account_no;
        $transaction->facility_type = $request->facility_type;
        $transaction->legal_form = $request->legal_form;
        $transaction->s_b = $request->s_b;
        $transaction->s_b_name = $request->s_b_name;
        $transaction->maturity_date = $request->maturity_date;
        $transaction->tenor = $request->tenor;
        $transaction->drawdown_amount = $request->drawdown_amount;
        $transaction->s_b_code = $request->s_b_code;
        $transaction->cr_s_b = $request->cr_s_b;
        $transaction->type_sb = $request->type_sb;
        $transaction->date_trs = $request->date_trs;
        $transaction->amount = $request->amount;
        $transaction->sent_time = $request->sent_time;
        $transaction->reply_time = $request->reply_time;
        $to = \Carbon\Carbon::createFromFormat('H:s:i', $request->sent_time);
        $from = \Carbon\Carbon::createFromFormat('H:s:i', $request->reply_time);
        $transaction->avgtime = $to->diffInMinutes($from);



        $transaction->sender = $request->sender;
        $transaction->officer = $request->officer;
        $transaction->rule_hitted = $request->rule_hitted;
        $transaction->justification = $request->justification;
        $transaction->disbursement_type = $request->disbursement_type;
        $transaction->save();


return redirect()->route('transactions.index')->with('record',  'Record added Successfully');
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

         $transaction = Transaction::find($id); 


        return view('admin.transactions.edit', compact('transaction'));

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
        


        $request->validate([
            'customer_no' => ' required',
            'account_no' => 'required',
            'account_name' => 'required',
            'facility_type' => 'required',
            'legal_form' => 'required',
            's_b_code' => 'required',
            's_b' => 'required',
            's_b_name' => 'required',
            'cr_s_b' => 'required',
            'type_sb' => 'required',
            'date_trs' => 'required',
            'sent_time' => 'required',
            'amount' => 'required',
            'reply_time' => 'required',
            'officer' => 'required',
            'sender' => 'required',
            'justification' => 'required',
            'disbursement_type' => 'required',
           ], ['customer_no'=> 'The Customer Number is Required', 'account_no' => 'Account Numer is Required', 'account_name' => 'The account Name is Required', 'facility_type' => 'Facility Type is Required', 'legal_form' => 'Legal Form is Required', 's_b_code'=> 'S/B Code is Required' , 's_b' => 'This Field is Required', 's_b_name' => 'Supplier/ Buyer name is Required', 'cr_s_b' => 'Commerical Reigster required', 'type_sb' => 'the Type is Required', 'date_trs' => ' the date is Required', 'sent_time' => 'The sent time is Required' , 'reply_time' => 'The Reply time is Required', 'amount' =>'The amount is Required', 'officer' => 'The officer is Required' , 'sender' => 'the sender is reuqired' , 'justification' => 'justification is required', 'disbursement_type' => 'disbursement type is required'],
           );

        $transaction =  Transaction::find($id);
        $transaction->customer_no = $request->customer_no;
        $transaction->account_name = $request->account_name;
        $transaction->account_no = $request->account_no;
        $transaction->facility_type = $request->facility_type;
        $transaction->legal_form = $request->legal_form;
        $transaction->s_b = $request->s_b;
        $transaction->s_b_name = $request->s_b_name;
        $transaction->maturity_date = $request->maturity_date;
        $transaction->tenor = $request->tenor;
        $transaction->drawdown_amount = $request->drawdown_amount;
        $transaction->s_b_code = $request->s_b_code;
        $transaction->cr_s_b = $request->cr_s_b;
        $transaction->type_sb = $request->type_sb;
        $transaction->date_trs = $request->date_trs;
        $transaction->amount = $request->amount;
        $transaction->sent_time = $request->sent_time;
        $transaction->reply_time = $request->reply_time;
        $to = \Carbon\Carbon::createFromFormat('H:s', $request->sent_time);
        $from = \Carbon\Carbon::createFromFormat('H:s', $request->reply_time);
        $transaction->avgtime = $to->diffInMinutes($from);



        $transaction->sender = $request->sender;
        $transaction->officer = $request->officer;
        $transaction->rule_hitted = $request->rule_hitted;
        $transaction->justification = $request->justification;
        $transaction->disbursement_type = $request->disbursement_type;
        $transaction->save();


return redirect()->route('transactions.index')->with('record',  'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
   
        return back()->with('delete', '1 Record has been deleted');
    }
}
