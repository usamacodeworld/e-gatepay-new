@extends('general.api-docs.layout')

@section('title', 'E-Gatepay API Documentation')
@section('description', 'Complete API documentation for E-Gatepay payment gateway integration with code examples for multiple platforms')
@section('content')
<style>
    .card-header{
        background: #e2402c !important;
        color: white !important;
    }

    .copy-btn, .api-navbar, .scroll-top-btn{
        background: #e2402c !important;

    }

    .btn-primary{
        background: #e2402c !important;
    }
</style>

@include('general.api-docs.sections.overview')
@include('general.api-docs.sections.authentication')
@include('general.api-docs.sections.quickstart')
@include('general.api-docs.sections.endpoints')
@include('general.api-docs.sections.webhooks')
@include('general.api-docs.sections.examples')
@include('general.api-docs.sections.woocommerce')
{{--@include('general.api-docs.sections.sandbox-guide')--}}
@include('general.api-docs.sections.testing')
@include('general.api-docs.sections.support')

@endsection
