@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>アカウント追加</h1>
        <p>ようこそ、{{ Auth::user()->name }}さん</p>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::model($account,['route' => 'accounts.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('account_name','アカウント名') !!}
                    {!! Form::text('account_name',null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('account_id','ID') !!}
                    {!! Form::text('account_id',null,['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('account_password','パスワード') !!}
                    {!! Form::password('account_password',['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('追加する',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection