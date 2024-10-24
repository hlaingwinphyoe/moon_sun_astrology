<div class="item mb-10">
    <div class="row">
        <div class="col-md-6 img">
            <img src="{{ $post->media }}" alt="{{ $post->media }}">
        </div>
        <div class="col-md-6 main-bg ps-3 pe-2 valign">
            <div class="full-width">
                <span class="date fz-12 ls1 text-u opacity-7 mb-15">
                    {{ $post->created_at->format('F j, Y') }}
                </span>
                <h6>
                    <a href="{{ route('blogs.details', $post->slug) }}" class="text-ellipsis-1">
                        {{ $post->title }}
                    </a>
                </h6>
                <p>
                    {!! Str::limit($post->excerpt, 60) !!}
                </p>
                <div class="mt-15">
                    <a class="butn px-4 py-2 butn-bord radius-30" href="{{ route('blogs.details', $post->slug) }}">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
