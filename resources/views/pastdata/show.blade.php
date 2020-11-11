@extends('layouts.app')

@section('this_page_content')

@section('content_header')

    <h1>{{ $customer->userName }} さんの詳細ページ</h1>
    
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
            <tr>
                <td>{{ $customer->userName }}</td>
                <td>{{ $customer->usageTimesEver }}</td>
                <td>{{ $customer->usageAmountEver }}</td>
                <td>{{ $customer->harvestAmountPreYear }}</td>
                <td>{{ $customer->usageAmountThisYear }}</td>
                <td>{{ $customer->usageAreaThisYear }}</td>
                <td>{{ $customer->climate }}</td>
                <td>{{ $customer->riceVariety }}</td>
            </tr>
        </table>
        
    {{--顧客情報の編集画面に推移するボタン--}}
    {!! link_to_route('pastdata.edit', '顧客の過去データを編集', ['pastdatum' => $customer->id], ['class' => 'btn btn-primary']) !!}
    @stop

@endsection