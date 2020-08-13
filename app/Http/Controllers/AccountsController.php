<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index()
    {
        $data = [];
        if(\Auth::check()){ // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザのアカウントの一覧を作成日時の降順で取得
            $accounts = $user->accounts()->orderBy('created_at','desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'accounts' => $accounts,
            ];
        }
        
        // Welcomeビューでそれらを表示
        return view('welcome',$data);
    }
    
    // getでaccounts/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        if(\Auth::check()){ // 認証済みの場合
            $account = new \App\Account;
            
            // アカウント作成ビューを表示
            return view('accounts.create',[
                'account' => $account,
            ]);
        }else{
            // トップページへリダイレクトされる
            return redirect('/');
        }
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'account_name' => 'required | max:50',
            'account_id' => 'required | max:50',
            'account_password' => 'required | max:50',            
        ]);
        
        // 認証済みユーザ（閲覧者）のアカウントとして作成（リクエストされた値をもとに作成）
        $request->user()->accounts()->create([
            'account_name' => $request->account_name,
            'account_id' => $request->account_id,
            'account_password' => $request->account_password,
        ]);
        
        // トップページへリダイレクトさせる
        return redirect('/');
    }
    
    public function destroy($id)
    {
        // idの値でアカウントを検索して取得
        $account = \App\Account::findOrFail($id);
        
        // 認証済みユーザ（閲覧者）がそのアカウントの所有者である場合は、アカウントを削除
        if(\Auth::id() === $account->user_id){
            $account->delete();
        }
        
        // トップページへリダイレクトさせる
        return redirect('/');
    }
    
    public function show($id)
    {
        // idの値でアカウントを検索して取得
        $account = \App\Account::findOrFail($id);
        
        // アカウント詳細ビューでそれを表示
        return view('accounts.show',[
            'account' => $account,
        ]);
    }
    
    // getでaccounts/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        
    }
    
    // putまたはpatchでaccounts/idにアクセスされた場合の「更新処理」
    public function update(Request $request,$id)
    {
        // idの値でアカウントを検索して取得
        $account = \App\Account::findOrFail($id);
        
        // アカウントを更新
        $account->account_name = $request->account_name;
        $account->account_id = $request->account_id;
        $account->account_password = $request->account_password;
        $account->save();
        
        // トップページへリダイレクトさせる
        return redirect('/');
    }
}
