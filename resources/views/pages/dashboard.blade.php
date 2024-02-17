@extends('layouts.app')

@section('title', 'Dashboard')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Management</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#" id="addUserLink">Add User</a>
                        </li>
                        <li class="list-group-item"><a href="#">View Users</a></li>
                        <li class="list-group-item"><a href="#">Manage Roles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Role Assignment</h5>
                    <form action="{{ route('dashboard') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user">Select User:</label>
                            <select class="form-control" id="user" name="user">
                                @foreach ($users as $user)
                                    <option value="{{ $user }}">{{ $user }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="role">Select Role:</label>
                            <select class="form-control" id="role" name="role">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Assign Role</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
