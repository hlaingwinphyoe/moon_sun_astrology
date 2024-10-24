<div class="item">
    <div class="img">
        <img style="height: 200px; object-fit:cover" src="{{ $post->media }}" alt="{{ $post->media }}">
        <a href="{{ route('blogs.details', $post->slug) }}" class="main-colorbg3">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                    fill="currentColor"></path>
            </svg>
        </a>
    </div>
    <div class="cont" style="margin-top: 15px">
        <h6>
            <a href="{{ route('blogs.details', $post->slug) }}" class="text-ellipsis-1">
                {{ $post->title }}
            </a>
        </h6>
        <p class="text-ellipsis-2" style="font-size: 14px">{{ $post->excerpt }}</p>
        <div class="info mt-20 mb-20 pt-20 bord-thin-top">
            <span class="by">
                <a href="{{ route('blogs.details', $post->slug) }}"><i class="far fa-user fz-14 mr-7"></i>
                    By
                    {{ $post->user ? $post->user->name : '' }}
                </a>
            </span>
            <span class="dot main-colorbg3"></span>
            <span class="date">
                <a href="{{ route('blogs.details', $post->slug) }}"><i class="far fa-calendar-alt fz-14 mr-7"></i>
                    {{ $post->created_at->format('F j, Y') }}
                </a>
            </span>
        </div>
    </div>
</div>
