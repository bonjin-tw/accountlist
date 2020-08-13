@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>アカウント詳細</h1>
        <p>ようこそ、{{ Auth::user()->name }}さん</p>
    </div>
    
    @if(Auth::id() == $account->user_id)
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                {{-- アカウント更新ボタンのフォーム --}}
                {!! Form::model($account,['route' => ['accounts.update',$account->id],'method' => 'put']) !!}
                
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
                        {!! Form::text('account_password',null,['class' => 'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('更新する',['class' => 'btn btn-primary']) !!}
                    
                {!! Form::close() !!}
                
                {{-- アカウント削除ボタンのフォーム --}}
                {!! Form::open(['route' => ['accounts.destroy',$account->id],'method' => 'delete']) !!}
                    {!! Form::submit('削除する',['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @endif
@endsection