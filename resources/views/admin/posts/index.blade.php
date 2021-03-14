@extends('layouts.app',['pageTitle' => __('List of Post')])

@section('content')

            <div class="col-md-12">
                <div class="card">

                    @component('layouts.parts.breadcrumb')
                        @slot('title')
                            {{ __('List of Posts') }}
                        @endslot
                        @slot('subTitle')
                            {{ __('Posts') }}
                        @endslot
                    @endcomponent

                    <div class="card-body">
                        <a href="{{ url('/admin/posts/create') }}" class="btn btn-success btn-sm" title="Add New Post">
                            <i class="material-icons"> add </i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/posts') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="material-icons">search</i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title</th><th>Content</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->content }}</td>
                                        <td>
                                            <a href="{{ url('/admin/posts/' . $item->id) }}" rel="tooltip" title="View Post" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">visibility</i>
                                            <div class="ripple-container"></div>
                                            </a>
                                            <a href="{{ url('/admin/posts/' . $item->id . '/edit') }}" rel="tooltip" title="Edit Post" class="btn btn-warning btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div>
                                            </a>
                                            <form method="POST" id="deleteButton{{ $item->id }}" action="{{ url('/admin/posts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" rel="tooltip" title="" onclick="sweetalertDelete('{{ $item->id }}')"  class="btn btn-danger btn-link btn-sm" data-original-title="Remove Post">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>

@endsection
