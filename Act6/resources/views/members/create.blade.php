@extends('layouts.layout')

@section('content')
<h2>Add New Member</h2>

<form action="{{ route('members.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br><br>

    <label for="gender">Gender:</label>
    <input type="text" id="gender" name="gender" required><br><br>

    <label for="dob">DOB:</label>
    <input type="date" id="dob" name="dob" required><br><br>

    <button type="submit">Add Member</button>
</form>
@endsection
