@extends(Helper::subdomain() . '::errors.illustrated-layout')

@section('code', '404')
@section('title', __('Page Not Found'))

@section('image', Helper::autover('/svg/{subdomain}/404.svg'))

@section('message', __($exception->getMessage() ?: 'Sorry, the page you are looking for could not be found.'))
