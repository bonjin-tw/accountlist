@if (count($accounts) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>アカウント名</th>
                <th>ID</th>
                <th>パスワード</th>
                <th>詳細</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($accounts as $account)
            <tr>
                <td>{{ $account->account_name }}</td>
                <td>{{ $account->account_id }}</td>
                <td>{{ $account->account_password }}</td>
                <td>
                    @if(Auth::id() == $account->user_id)
                        {!! Form::open(['route' => ['accounts.show',$account->id],'method' => 'get']) !!}
                            {!! Form::submit('詳細を表示',['class' => 'btn btn-primary btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- ページネーションのリンク --}}
    {{ $accounts->links() }}
@endif