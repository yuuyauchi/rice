@extends('layouts.app')

@section('this_page_content')

@section('content_header')

    <h1>顧客毎の過去データ</h1>
    
    @if (count ($customers) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>今までの利用回数</th>
                    <th>今までの利用量</th>
                    <th>前年度の収穫</th>
                    <th>今年の利用量</th>
                    <th>今年の利用面積</th>
                    <th>天候</th>
                    <th>お米の品種</th>
                </tr>
            </thead>

            @foreach ($customers as $customer)
            <tr>
                <td>{!! link_to_route('pastdata.show', $customer->userName, ['pastdatum' => $customer->id]) !!}</td>
                <td>{{ $customer->usageTimesEver }}</td>
                <td>{{ $customer->usageAmountEver }}</td>
                <td>{{ $customer->harvestAmountPreYear }}</td>
                <td>{{ $customer->usageAmountThisYear }}</td>
                <td>{{ $customer->usageAreaThisYear }}</td>
                <td>{{ $customer->climate }}</td>
                <td>{{ $customer->riceVariety }}</td>
            </tr>
            @endforeach
        </table>
        {{ $customers->links() }}
        @endif
    @stop
@endsection