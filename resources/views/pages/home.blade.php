@extends('layouts.app')

@section('title', "Virtual Wallet")
    
@section('content')

<div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <div class="jumbotron">
          <h1 class="display-4">Welcome to Virtual Wallet</h1>
          <p class="lead">Manage your finances efficiently with our virtual wallet platform.</p>
          <hr class="my-4">
          <p>Sign in or create an account to get started.</p>
          <a class="btn btn-primary btn-lg mr-3" href="{{route('login')}}" role="button">Login</a>
          <a class="btn btn-success btn-lg" href="{{route('register')}}" role="button">Register</a>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-8 offset-md-2">
        <div class="reviews-section">
          <h2 class="text-center mb-4">What Users Are Saying</h2>
          <div class="card-deck">
            <div class="card">
              <div class="card-body">
                <p class="card-text">"Virtual Wallet helped me keep track of my expenses easily. Highly recommend!"</p>
              </div>
              <div class="card-footer text-muted text-center">
                - John Doe
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <p class="card-text">"I love the simplicity of Virtual Wallet. It's perfect for managing my budget."</p>
              </div>
              <div class="card-footer text-muted text-center">
                - Jane Smith
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <p class="card-text">"The interface is intuitive and the features are just what I needed. Great job!"</p>
              </div>
              <div class="card-footer text-muted text-center">
                - Michael Johnson
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection