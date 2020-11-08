@extends('layouts.app')

@section('this_page_content')

    <h1>顧客リスト新規追加ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($customer, ['route' => 'customers.store']) !!}

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

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection