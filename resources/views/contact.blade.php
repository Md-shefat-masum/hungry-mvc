@extends('layouts.website')

@section('website_content')
    <h1>contact page</h1>

    @if (session()->has('success'))
        <p style="color: green;"> {{ session()->get('success') }} </p>
    @endif

    <form action="/contact-submit" method="POST">
        @csrf
        <label for="">full name</label>
        <input type="text" name="fullname">
        <br>
        <label for="">description</label>
        <input type="text" name="description">
        <br>
        <button>submit</button>
    </form>

    <table border="1">
        <tr>
            <td>full name</td>
            <td>message</td>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
    </table>
@endsection

