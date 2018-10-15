@extends('layouts.app')

@section('title', $customer->getFirstName() . "'s Order History")

@section('content')

        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th># of Products</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $customer->getOrders() as $order )
                    <tr>
                        <td>{{ $order->getDate() }}</td>
                        <td>{{ $order->getTotalProducts() }}</td>
                        <td>${{ $order->getTotal() }}</td>
                    </tr>
            @endforeach
                <tr>
                    <td colspan="2">Lifetime Value</td>
                    <td>${{ $lifeTimeValue }}</td>
                </tr>
            </tbody>
        </table>
@endsection
