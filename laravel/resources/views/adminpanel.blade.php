@extends('layouts/layout')

@section('title', 'MOBILSTORE.SK - Admin Panel')

@section('content')

<section id="admin-panel">
    <h1 class="admin-heading">ADMIN PANEL</h1>

    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Meno</th>
                <th>Email</th>
                <th>Akcie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="#" class="btn-danger" onclick="deleteUser({{ $user->id }})">Odstrániť</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection


@section('custom-js')
<script>
    function deleteUser(userId) {
        if (confirm("Are you sure you want to delete this user?")) {
            alert("User with ID " + userId + " deleted.");
        }
    }
</script>
@endsection
