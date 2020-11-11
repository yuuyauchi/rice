@extends('layouts.app')

@section('this_page_content')

@section('content_header')

    <h1>{{ $customer->userName }} さんの詳細ページ</h1>
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>住所</th>
                    <th>電話番号</th>
                </tr>
            </thead>
            <tr>
                <td>{{ $customer->userName }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->telephoneNumber }}</td>
            </tr>
        </table>
        
    {{--顧客情報の編集画面に推移するボタン--}}
    {!! link_to_route('customers.edit', '顧客情報を編集', ['customer' => $customer->id], ['class' => 'btn btn-primary']) !!}

    {{--顧客情報を削除するボタン--}}
    {!! Form::model($customer, ['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    @stop

@endsection