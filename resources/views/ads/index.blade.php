@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection
@section('sidebar')
    @include('layouts.sidebar')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
@section('title')
    All ADs
@endsection
@section('bage-header')
    All ADs
@endsection
@section('content')
    @include('layouts.sessions')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('ads.create') }}" class="btn btn-primary">Create New AD</a>
                </div>
                <div class="card-body">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="file-datatable"
                                        class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">Ad Link</th>
                                                <th class="border-bottom-0">Image</th>
                                                <th class="border-bottom-0">State</th>
                                                <th class="border-bottom-0">Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (App\Models\Ad::all() as $ad)
                                                <tr>
                                                    <td>{{ $ad->ad_link }}</td>
                                                    <td>{{ $ad->image }}</td>
                                                    <td>{{ $ad->active }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                @if ($ad->active == 1)
                                                                <form action="{{ route('ad.deactivate', $ad->id) }}" method="POST">
                                                                        @csrf
                                                                        <button class="btn text-success">De-Activated</button>
                                                                    </form>
                                                                @else
                                                                <li>
                                                                    <form action="{{ route('ad.activate', $ad->id) }}" method="POST">
                                                                        @csrf
                                                                        <button class="btn text-success">Activated</button>
                                                                    </form>
                                                                </li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
