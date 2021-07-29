<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    if ($request->angka % 3 == 0 ) {
        if ($request->angka % 5 == 0 ) {
             foreach (range (1, $request->perulangan) as $number) {
                  if ($number % 3 != 0 && $number % 5 != 0) {
                        echo "<h2> Pasar 20 Belanja Pangan </h2>";
                       
                        if ($number >= 8) break;
                    }
                if ($number % 3 == 0)  echo "<h2> Belanja Pangan  </h2>";
                if ($number % 5 == 0) echo "<h2> Pasar 20  </h2>";
           }
        }
        else{
             foreach (range (1, $request->perulangan) as $number) {
              echo "<h2> Pasar 20  </h2>";
           }
        }
          
    }
    else if ($request->angka % 5 == 0 ) {
        if ($request->angka % 3 == 0 ) {
             foreach (range (1, $request->perulangan) as $number) {
                 $nmbr = $number % 3 != 0 && $number % 5 != 0;
                  if ($nmbr) {
                        echo "<h2> Pasar 20 Belanja Pangan </h2>";
                       
                        if ($nmbr >= 5) break;
                    }
                if ($number % 3 == 0)  echo "<h2> Belanja Pangan  </h2>";
                if ($number % 5 == 0) echo "<h2> Pasar 20  </h2>";
           }
        }
        else{
             foreach (range (1, $request->perulangan) as $number) {
              echo "<h2> Belanja Pangan  </h2>";
           }
        }
          
    }
    else{
        echo "<h2> Inputan bukan kelipatan 3 atau 5  </h2>";
    }
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
