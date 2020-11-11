@extends('layouts.app')

@section('this_page_content')

    <h1>{{ $customer->userName }}さんの連絡先情報編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($customer, ['route' => ['customers.update', $customer->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('userName', '名前:') !!}
                    {!! Form::text('userName', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('address', '住所:') !!}
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('telephoneNumber', '電話番号:') !!}
                    {!! Form::text('telephoneNumber', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection