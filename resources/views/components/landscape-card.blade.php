<div class="item mb-10">
    <div class="row">
        <div class="col-md-6 img">
            <img src="{{ $post->media }}" alt="{{ $post->media }}">
        </div>
        <div class="col-md-6 main-bg px-3 valign">
            <div class="full-width">
                <span class="date fz-12 ls1 text-u opacity-7 mb-15">
                    <i class="far fa-calendar-alt fz-14 mr-10"></i>
                    {{ $post->created_at->format('F j, Y') }}
                </span>
                <h6>
                    <a href="{{ route('blogs.details', $post->slug) }}" class="text-ellipsis-1">
                        {{ $post->title }}
                    </a>
                </h6>
                <p class="text-ellipsis-3" style="font-size: 14px">
                    {{ $post->excerpt }}
                </p>
                <div class="fz-12 ls1 text-u opacity-7 d-flex justify-content-between align-items-center mr-30 mt-50 pt-20">
                    <a href="{{ route('blogs.details', $post->slug) }}"><i class="far fa-user fz-14 mr-10"></i> By
                        {{ $post->user ? $post->user->name : '' }}
                    </a>
                    <a class="butn px-4 py-2 butn-bord radius-30" href="{{ route('blogs.details', $post->slug) }}">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
