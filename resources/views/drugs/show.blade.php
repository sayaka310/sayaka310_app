@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    @include('partial.drug')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>薬剤名</th>
                <td>{{ $drug->name }}</td>
            </tr>
            <tr>
                <th>成分名</th>
                <td>{{ $drug->component }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $drug->category->name }}</td>
            </tr>
            <tr>
                <th>用法・容量</th>
                <td>{{ $drug->regimen }}</td>
            </tr>
            <tr>
                <th>効能・効果</th>
                <td>{{ $drug->effect }}</td>
            </tr>
        </tbody>
    </table>
        <a href="{{ route('drugs.edit', $drug) }}">おくすり修正</a><br>
        <a href="{{ route('drugs.index') }}">戻る</a>
@endsection
