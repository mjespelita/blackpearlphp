@extends('layouts.app')
@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #6B73FF 10%, #000DFF 100%);
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            background-color: white;
        }

        .card-title {
            font-weight: bold;
            color: #4B4B4B;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            border-radius: 30px;
            background: linear-gradient(135deg, #6B73FF 10%, #000DFF 100%);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #000DFF 10%, #6B73FF 100%);
        }

        span {
            color: rgb(208, 187, 0);
        }
    </style>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-lg">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Black<span>Pearl</span></h3>
                <h4 class="card-title text-center mb-4">Login</h4>
                <form action="/login-process" method="POST">
                    <div class="form-group pb-3">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group pb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block form-control">Login</button>
                </form>
                <p class="text-center mt-3">
                    <a href="#">Forgot your password?</a>
                </p>
                <p class="text-center">
                    <a href="/register">Create an account</a>
                </p>
            </div>
        </div>
    </div>
@endsection