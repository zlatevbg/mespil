@extends(Helper::subdomain() . '::errors.illustrated-layout')

@section('code', '401')
@section('title', __('Unauthorized'))

@section('image', Helper::autover('/svg/{subdomain}/403.svg'))

@section('message', __($exception->getMessage() ?: 'Sorry, you are not authorized to access this page.'))
