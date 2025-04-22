<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Display a listing of the members
    public function index()
    {
        $members = Member::all(); // Fetch all members
        return view('members.index', compact('members'));
    }

    // Show the form to create a new member
    public function create()
    {
        return view('members.create');
    }

    // Store a newly created member in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|date',
        ]);

        // Create and save the member
        Member::create($request->all());

        // Redirect with success message
        return redirect()->route('members.index')->with('success', 'Member added successfully');
    }

    // Show the form to edit an existing member
    public function edit($id)
    {
        $member = Member::findOrFail($id); // Find the member by ID
        return view('members.edit', compact('member'));
    }

    // Update the specified member in the database
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id); // Find the member by ID

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|date',
        ]);

        // Update member with new data
        $member->update($request->all());

        // Redirect with success message
        return redirect()->route('members.index')->with('success', 'Member updated successfully');
    }

    // Delete a member from the database
    public function destroy($id)
    {
        $member = Member::findOrFail($id); // Find the member by ID
        $member->delete(); // Delete the member

        // Redirect with success message
        return redirect()->route('members.index')->with('success', 'Member deleted successfully');
    }
}
