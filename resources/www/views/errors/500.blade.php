@extends(Helper::subdomain() . '::errors.illustrated-layout')

@section('code', '500')
@section('title', __('Error'))

@section('image', Helper::autover('/svg/{subdomain}/500.svg'))

@section('message', __($exception->getMessage() ?: 'Whoops, something went wrong on our servers.'))
