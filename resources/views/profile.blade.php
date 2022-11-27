@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>User Profile</h1>
                </div>
                <div class="card-body">
                    <img width="100" src="{{ asset(auth()->user()->photo) }}" alt="">
                    <h1>{{ auth()->user()->username }}</h1>
                    <h1>{{ auth()->user()->email }}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
