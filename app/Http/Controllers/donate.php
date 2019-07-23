<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donation;

class donate extends Controller
{
    public function donate()
    {
        $donor = new  donation();
        $donor->name = request('Name');
        $donor->district = request('district');
        $donor->Telephone_number = request('number');
        $donor->email = request('email');
        $donor->amount = request('amount');

        $donor->date = request('date');

        $donor->save();

        return redirect('tre')->with('success', 'MONEY REGISTERED');



        
    }

}
