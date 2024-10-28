{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>You're logged in!</p>

    <h2>Navigation</h2>
    <ul>
        <li><a href="{{ route('products.index') }}">Manage Products</a></li>
        <li><a href="{{ route('categories.index') }}">Manage Categories</a></li>
        <li><a href="{{ route('orders.index') }}">Manage Orders</a></li>
        <li><a href="{{ route('users.index') }}">Manage Users</a></li>
    </ul>
</div>
@endsection
