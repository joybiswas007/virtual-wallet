@extends('layouts.app')

@section('title', 'Login')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('home') }}"><u>Back to Home</u></a>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email" required autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="Reset" class="btn btn-danger">Clear</button>
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                   Don't have an account? <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
