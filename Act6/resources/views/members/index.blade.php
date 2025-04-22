@extends('layouts.layout')

@section('content')
<h2>Member List</h2>
<a href="{{ route('members.create') }}">Add New Member</a>

@if (session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Actions</th>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ $member->name }}</td>
        <td>{{ $member->address }}</td>
        <td>{{ $member->gender }}</td>
        <td>{{ $member->dob }}</td>
        <td>
            <!-- Edit Link -->
            <a href="{{ route('members.edit', $member->id) }}">Edit</a>

            <!-- Delete Form -->
            <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this member?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
