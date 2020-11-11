@extends('layouts.app')

@section('this_page_content')

    <h1>{{ $customer->userName }}さんの過去データ編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($customer, ['route' => ['pastdata.update', $customer->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('usageTimesEver', '今までの利用回数:') !!}
                    {!! Form::text('usageTimesEver', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('usageAmountEver', '今までの利用量:') !!}
                    {!! Form::text('usageAmountEver', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('harvestAmountPreYear', '前年度の収穫:') !!}
                    {!! Form::text('harvestAmountPreYear', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('usageAmountThisYear', '今年の利用量:') !!}
                    {!! Form::text('usageAmountThisYear', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('usageAreaThisYear', '今年の利用面積:') !!}
                    {!! Form::text('usageAreaThisYear', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('climate', '天候:') !!}
                    {!! Form::text('climate', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('riceVariety', 'お米の品種:') !!}
                    {!! Form::text('riceVariety', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection