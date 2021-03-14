@extends('layouts.app',['pageTitle' => __('Post Show')])

@section('content')

            <div class="col-md-12">

                <div class="card">
                    @component('layouts.parts.breadcrumb')
                        @slot('title')
                            {{ __('Post Show') }}
                        @endslot
                        @slot('subTitle')
                            {{ __('Post') }}
                        @endslot
                    @endcomponent

                    <div class="card-body">

                        <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="material-icons">keyboard_backspace</i> Back</button></a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>

                                    </tr>
                                    <tr><th> Title </th><td> {{ $post->title }} </td></tr><tr><th> Content </th><td> {{ $post->content }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
