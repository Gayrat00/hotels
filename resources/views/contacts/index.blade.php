@extends('layouts.app')

@section('title')
    Contacts
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="text-primary text-center mb-4 h1 ">Contacts</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Hotel</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Websites</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->hotel->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td><a href="{{ $contact->website }}" target="_blank">{{ $contact->website }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
