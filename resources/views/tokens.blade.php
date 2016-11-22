@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Tokens
@endsection


@section('main-content')
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens>
@endsection
