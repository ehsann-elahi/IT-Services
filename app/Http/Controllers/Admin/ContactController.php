<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Rinvex\Country\CountryLoader;
use App\Models\Contact;

use App\Http\Controllers\Controller;
class ContactController extends Controller
{
    public function index()
{
    
    $contacts = Contact::latest()->paginate(10); // 10 per page
    return view('admin.bookings', compact('contacts'));
}

public function destroy($id)
{
    Contact::findOrFail($id)->delete();
    return back()->with('success', 'Message deleted successfully!');
}

}
