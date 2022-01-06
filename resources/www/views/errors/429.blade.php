@extends(Helper::subdomain() . '::errors.illustrated-layout')

@section('code', '429')
@section('title', __('Too Many Requests'))

@section('image', Helper::autover('/svg/{subdomain}/403.svg'))

@section('message', __($exception->getMessage() ?: 'Sorry, you are making too many requests to our servers.'))
