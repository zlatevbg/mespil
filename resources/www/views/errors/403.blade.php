@extends(Helper::subdomain() . '::errors.illustrated-layout')

@section('code', '403')
@section('title', __('Forbidden'))

@section('image', Helper::autover('/svg/{subdomain}/403.svg'))

@section('message', __($exception->getMessage() ?: 'Sorry, you are forbidden from accessing this page.'))
