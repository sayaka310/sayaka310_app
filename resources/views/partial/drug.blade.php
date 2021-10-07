<div class="row">
    <div>
        <img src="{{ url($drug->img_url) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('drugs.show', $drug->id) }}">{{ $drug->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $drug->effect }}</div>
            <div>{{ $drug->regimen }}</div>
        </div>
    </div>
</div>
