@extends('layouts.app')

@section('this_page_content')

@section('content_header')

    <h1>顧客リスト</h1>
    
    @if (count ($customers) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>住所</th>
                    <th>電話番号</th>
                </tr>
            </thead>
            @foreach ($customers as $customer)
            <tr>
                <td>{!! link_to_route('customers.show', $customer->userName, ['customer' => $customer->id]) !!}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->telephoneNumber }}</td>    
            </tr>
            @endforeach
        </table>
        {{ $customers->links() }}
        @endif
        {!! link_to_route('customers.create', '新規顧客を追加する', [], ['class' => 'btn btn-primary']) !!}
    @stop
@endsection