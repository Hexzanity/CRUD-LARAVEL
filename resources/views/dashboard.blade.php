<!DOCTYPE html>
<html>
<head>
    <title>Nike Admin</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo-documentation.css') }}">
        <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
@extends('style')
<body>
<aside class="sidebar">
  <div class="sidebar-brand">
    Admin Dashboard
  </div>
  <nav>
    <ul>
<li class="{{ request()->is('/') || request()->routeIs('charts.index') ? 'active' : '' }}"><a href="{{ route('charts.index') }}">Charts</a></li>
<li class="{{ request()->routeIs('categories.index') ? 'active' : '' }}"><a href="{{ route('categories.index') }}">Categories</a></li>
<li class="{{ request()->routeIs('clients.index') ? 'active' : '' }}"><a href="{{ route('clients.index') }}">Clients</a></li>
<li class="{{ request()->routeIs('orders.index') ? 'active' : '' }}"><a href="{{ route('orders.index') }}">Orders</a></li>
<li class="{{ request()->routeIs('products.index') ? 'active' : '' }}"><a href="{{ route('products.index') }}">Products</a></li>
<li class="{{ request()->routeIs('suppliers.index') ? 'active' : '' }}"><a href="{{ route('suppliers.index') }}">Suppliers</a></li>

<li class="logout-link">
    <a href="{{ route('logout') }}" class="btn btn-danger btn-fill">
        Log Out
    </a>
</li>

    </ul>
  </nav>
</aside>

<div class="content">
    @yield('content')
</div>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
