@extends('layouts.layout')

@section('content')
<h2>Edit Member</h2>

<form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf
    @method('PATCH')
    
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $member->name) }}" required>
    </div>

    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address', $member->address) }}" required>
    </div>

    <div>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Male" {{ old('gender', $member->gender) == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('gender', $member->gender) == 'Female' ? 'selected' : '' }}>Female</option>
        </select>
    </div>

    <div>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="{{ old('dob', $member->dob) }}" required>
    </div>

    <div>
        <button type="submit">Update Member</button>
    </div>
</form>
@endsection
