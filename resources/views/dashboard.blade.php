@extends('layouts.app',['pageTitle' => __('Dashboard')])
@section('content')



<div class="card">
        @component('layouts.parts.breadcrumb')
            @slot('title')
                {{ __(' Dashboard') }}
            @endslot
            @slot('subTitle')
                {{ __(' Sub Titel') }}
            @endslot
        @endcomponent

        <div class="card-body">
            <div id="typography">
                <div class="card-title">
                    <h2>Typography</h2>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>

@endsection
