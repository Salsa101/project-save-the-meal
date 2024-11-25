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

        $request->validate([
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

        Partner::create($request->all());

        // Redirect atau response
        return redirect()->back()->with('success', 'Registration successful!');
    }

    // Fungsi untuk menghapus data partner
    public function destroy($id)
    {
        // Mencari data partner berdasarkan ID
        $partner = Partner::findOrFail($id);
        $partner->delete();

        $secretToken = 'secure_admin_token123';

        // Redirect ke halaman daftar partner dengan pesan sukses
        return redirect()->route('admin.dashboard', ['admin_token' => $secretToken])->with('success', 'Partner deleted successfully!');
    }
}
