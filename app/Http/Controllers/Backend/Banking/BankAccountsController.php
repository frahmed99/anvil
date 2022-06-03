<?php

namespace App\Http\Controllers\Backend\Banking;

use App\Models\BankAccounts;
use App\Http\Requests\StoreBankAccountsRequest;
use App\Http\Requests\UpdateBankAccountsRequest;
use App\Http\Controllers\Controller;

class BankAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = BankAccounts::all();
        return view('Backend.Banking.index', $data);
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
     * @param  \App\Http\Requests\StoreBankAccountsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankAccountsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankAccounts  $bankAccounts
     * @return \Illuminate\Http\Response
     */
    public function show(BankAccounts $bankAccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankAccounts  $bankAccounts
     * @return \Illuminate\Http\Response
     */
    public function edit(BankAccounts $bankAccounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankAccountsRequest  $request
     * @param  \App\Models\BankAccounts  $bankAccounts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankAccountsRequest $request, BankAccounts $bankAccounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankAccounts  $bankAccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankAccounts $bankAccounts)
    {
        //
    }
}
