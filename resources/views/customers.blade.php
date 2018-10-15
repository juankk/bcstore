@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th># of Orders</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $customers as $customer )
                <tr>
                    <td><a href="/customers/{{ $customer->getId() }}">{{ $customer->getFirstName() }} {{ $customer->getLastName() }}</a></td>
                    <td>{{ $customer->getTotalOrders() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
