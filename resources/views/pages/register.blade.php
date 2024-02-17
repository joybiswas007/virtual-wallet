@extends('layouts.app')

@section('title', "Register")


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('home') }}"><u>Back to Home</u></a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <button type="reset" class="btn btn-danger btn-block">Clear</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                    Already have an account? <a href="{{ route('login') }}">Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
