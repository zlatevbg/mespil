@extends(Helper::subdomain() . '::errors.illustrated-layout')

@section('code', '503')
@section('title', __('Service Unavailable'))

@section('image', Helper::autover('/svg/{subdomain}/503.svg'))

@section('message', __($exception->getMessage() ?: 'Sorry, we are doing some maintenance. Please check back soon.'))
