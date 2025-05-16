<div>
    @include('includes.recursive', ['comments' => $video->comments()->latestFirst()->get()])
</div>