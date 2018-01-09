<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <div class="">
                <a href="#">{{ $reply->owner->name }}</a> said {{ $reply->created_at->diffForHumans() }}
            </div>

            <div class="">
                <form class="" action="{{ url('/') }}/replies/{{ $reply->id }}/favorites" method="POST">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-default" {{ $reply->isFavorited() ? 'disabled' : '' }}>
                        {{ $reply->favorites()->count() }} {{ str_plural('Favorite', $reply->favorites()->count()) }}
                    </button>
                </form>
            </div>
        </div>

    </div>
    <div class="panel-body">
        {{ $reply->body }}
    </div>
</div>
