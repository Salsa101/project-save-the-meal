<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Donor;
use App\Models\Volunteer;

class AdminController extends Controller
{
    public function dashboard()
    {
        $partners = Partner::all();
        $donors = Donor::all();
        $contacts = Contact::all();
        $volunteers = Volunteer::all();
        $beneficiaries = Beneficiary::all();

        return view('admin', compact('partners', 'donors', 'contacts', 'volunteers', 'beneficiaries'));
    }
}
