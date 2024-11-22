<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;


class PartnerController extends Controller
{
    public function create()
    {
        return view('registerPartner');
    }

    // Menangani data yang dikirim
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'business_name' => 'required|string|max:255',
            'restaurant_address' => 'required|string|max:255',
            'business_phone' => 'required|string|max:20',
            'email_address' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'contact_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:20',
            'contact_email' => 'required|email|max:255',
            'food_type' => 'required|string|max:255',
            'surplus_food' => 'required|string|max:255',
            'pickup_schedule' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        $restaurant = new Partner();
        $restaurant->business_name = $validatedData['business_name'];
        $restaurant->restaurant_address = $validatedData['restaurant_address'];
        $restaurant->business_phone = $validatedData['business_phone'];
        $restaurant->email_address = $validatedData['email_address'];
        $restaurant->website = $validatedData['website'];
        $restaurant->contact_name = $validatedData['contact_name'];
        $restaurant->position = $validatedData['position'];
        $restaurant->contact_phone = $validatedData['contact_phone'];
        $restaurant->contact_email = $validatedData['contact_email'];
        $restaurant->food_type = $validatedData['food_type'];
        $restaurant->surplus_food = $validatedData['surplus_food'];
        $restaurant->pickup_schedule = $validatedData['pickup_schedule'];
        $restaurant->save();

        // Redirect atau response
        return redirect()->back()->with('success', 'Registration successful!');
    }
}
