@extends('layouts.app',['pageTitle' => __('Add Post')])

@section('content')

            <div class="col-md-12">
                <div class="card">

                    @component('layouts.parts.breadcrumb')
                        @slot('title')
                            {{ __('Create New Post') }}
                        @endslot
                        @slot('subTitle')
                            {{ __('Post') }}
                        @endslot
                    @endcomponent

                    <div class="card-body">
                        <a href="{{ url('/admin/posts') }}"  title="Back"><button class="btn btn-warning btn-sm"><i class="material-icons">keyboard_backspace</i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/posts') }}" accept-charset="UTF-8" class="form-horizontal disableonsubmit" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.posts.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
