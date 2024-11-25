<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Donor;

class AdminController extends Controller
{
    public function dashboard()
    {
        $partners = Partner::all();
        $donors = Donor::all();
        $contacts = Contact::all();

        return view('admin', compact('partners', 'donors', 'contacts'));
    }
}
