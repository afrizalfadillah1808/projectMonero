<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class AdminDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.discounts.index', [
            'title' => 'Dashboard',
            'discounts' => Discount::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.discounts.create', [
            'title' => 'Dashboard',
            'discounts' => Discount::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlahDiscount' => 'required',
            'kodeDiscount' => 'required',
            'keteranganDiscount' => 'required',
            'waktuDiscount' => 'required'
        ]);

        Discount::create($validatedData);

        return redirect('/dashboard/discounts')->with('success', 'Discount has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        return view('dashboard.discounts.edit', [
            'title' => 'Dashboard',
            'discount' => $discount
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        $rules = [
            'jumlahDiscount' => 'required',
            'kodeDiscount' => 'required',
            'keteranganDiscount' => 'required',
            'waktuDiscount' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $discount->update($validatedData);

        return redirect('/dashboard/discounts')->with('success', 'Discount has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect('/dashboard/discounts')->with('success', 'Discount has been Deleted');
    }
}
