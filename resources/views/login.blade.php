@extends ('layouts.layout')

@section('title','ログイン')

@section('body')
    <div>
        <login-component 
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></login-component>
    </div>
@endsection