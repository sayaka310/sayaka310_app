@extends('layouts.main')

@section('title', 'おくすり修正')

@section('content')
    <h1>おくすり修正</h1>
    @include('partial.drug')
    <form action="/drugs/{{ $drug->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label for="name">薬剤名</label>
            <input type="text" name="name" id="name" value="{{ old('name', $drug->name) }}">
        </div>
        <div>
            <label for="component">成分名</label>
            <input type="text" name="component" id="component" value="{{ old('component', $drug->component) }}">
        </div>
        <div>
            <label for="category_id">薬剤カテゴリー</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected  @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="regimen">用法・容量</label>
            <input type="text" name="regimen" id="regimen" value="{{ old('regimen', $drug->regimen) }}">
        </div>
        <div>
            <label for="effect">効能・効果</label>
            <textarea name="effect" id="effect" cols="30" rows="2">{{ old('effect', $drug->effect) }}</textarea>
        </div>
        <div>
            <input type="submit" value="更新">
        </div>
    </form>
    <a href="{{ route('drugs.index') }}">一覧へ戻る</a><br>
    <form action="{{ route('drugs.destroy', $drug) }}" method="post" name="form1" style="display: inline">
        @csrf
        @method('delete')
        <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
    </form>
@endsection
