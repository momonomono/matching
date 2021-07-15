@extends ('layouts.layout')

@section('title','ユーザー登録')

@section('body')
    <div>
        <signup-component 
            :csrf = "{{ json_encode(csrf_token()) }}"
            :err-msg = "{{ $errors }}"
        ></signup-component>
    </div>
@endsection