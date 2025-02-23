@extends('layouts/layout')

@section('title', 'MOBILSTORE.SK - Admin Panel')

@section('content')


<section class="adminbutony">
    <a href="{{ route('addproduct') }}"><button class="adminlinkbuton">Pridať produkt</button></a>
    <a href="{{ route('removeproducts') }}"><button class="adminlinkbuton">Odstrániť produkt</button></a>
</section>

<section id="admin-panel">
    <h1 class="admin-heading">ADMIN PANEL</h1>

    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Meno</th>
                <th>E-mail</th>
                <th>Rola</th>
                <th>Akcie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{ $user->is_admin ? 'Admin' : 'Zákazník' }}
                    </td>
                    <td>
                        {{-- Kontrola pre mazanie používateľa --}}
                        @if(!$user->is_admin || auth()->id() === $user->id) 
                            {{-- Admin nemôže odstrániť admina, ale môže odstrániť bežného používateľa --}}
                            @if(auth()->id() !== $user->id) 
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Odstrániť</button>
                                </form>
                            @endif
                        @endif

                        {{-- Tlačidlo na nastavenie/odobratie admin práv --}}
                        @if(auth()->id() !== $user->id) {{-- Admin si nemôže sám sebe odobrať admina --}}
                        <form action="{{ route('users.toggleAdmin', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
            @method('PUT')
            <button type="submit" class="adminsetbtn-{{ $user->is_admin ? 'warning' : 'success' }}">
                {{ $user->is_admin ? 'Odobrať admin' : 'Nastaviť ako admin' }}
            </button>
        </form>
    @endif
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
