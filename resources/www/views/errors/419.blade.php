@extends(Helper::subdomain() . '::errors.illustrated-layout')

@section('code', '419')
@section('title', __('Page Expired'))

@section('image', Helper::autover('/svg/{subdomain}/403.svg'))

@section('message', __($exception->getMessage() ?: 'Sorry, your session has expired. Please refresh and try again.'))
