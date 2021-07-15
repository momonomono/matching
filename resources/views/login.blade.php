@extends ('layouts.layout')

@section('title','ログイン')

@section('body')
    <div>
        <login-component 
            :csrf = "{{ json_encode(csrf_token()) }}"
            :err-msg = "{{ $errors }}"
        ></login-component>
    </div>
@endsection