<div class="kf-h-social">
    @if (env('FACEBOOK_URL'))
        <a href="{{ env('FACEBOOK_URL') }}" target="blank"><i class="fab fa-facebook-f"></i></a>
    @endif
    @if (env('INSTAGRAM_URL'))
        <a href="{{ env('INSTAGRAM_URL') }}" target="blank"><i class="fab fa-instagram"></i></a>
    @endif
    @if (env('TWITTER_URL'))
        <a href="{{ env('TWITTER_URL') }}" target="blank"><i class="fab fa-twitter"></i></a>
    @endif
    @if (env('YOUTUBE_URL'))
        <a href="{{ env('YOUTUBE_URL') }}" target="blank"><i class="fab fa-youtube"></i></a>
    @endif

</div>
