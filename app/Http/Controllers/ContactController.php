<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Thank you for reaching out! Your message has been received and we will get back to you shortly.');
    }

    // Fungsi untuk menghapus data donor
    public function destroy($id)
    {
        // Mencari data partner berdasarkan ID
        $donor = Contact::findOrFail($id);
        $donor->delete();

        $secretToken = 'secure_admin_token123';

        // Redirect ke halaman daftar partner dengan pesan sukses
        return redirect()->route('admin.dashboard', ['admin_token' => $secretToken])->with('success', 'Contact deleted successfully!');
    }

}
