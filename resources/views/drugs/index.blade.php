@extends('layouts.main')

@section('title', '一覧画面')

@section('content')
    @if ($drugs)
        <ul>
            @foreach ($drugs as $drug)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.drug')
                </li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-center">
            {{ $drugs->links() }}
        </div>
    @endif
@endsection
