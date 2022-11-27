@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>User Profile</h1>
                    <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos sint aliquam quod doloribus nobis consequuntur eligendi hic error odit magni saepe suscipit cumque iure incidunt quidem ipsum, labore officiis cum!</h2>
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
