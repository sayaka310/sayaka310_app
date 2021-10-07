@extends('layouts.main')

@section('title', 'おくすり登録')

@section('content')
    <h1>おくすり登録</h1>
    <form action="{{ route('drugs.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">薬剤名</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="component">成分名</label>
            <input type="text" name="component" id="component" value="{{ old('component') }}">
        </div>
        <div>
            <label for="category_id">薬剤カテゴリー</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="regimen">用法・容量</label>
            <input type="text" name="regimen" id="regimen" value="{{ old('regimen') }}">
        </div>
        <div>
            <label for="effect">効能・効果</label>
            <textarea name="effect" id="effect" cols="30" rows="2">{{ old('effect') }}</textarea>
        </div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
    <a href="{{ route('drugs.index') }}">一覧へ戻る</a><br>
@endsection
