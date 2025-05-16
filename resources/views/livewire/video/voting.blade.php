<div>
    <div class="d-flex gray-text">
        <div class="d-flex align-items-center">
            <span class="material-icons @if($likeActive) text-primary @else gray-text @endif"
                style="font-size:2rem;cursor: pointer;" wire:click.prevent=" like">thumb_up</span>
            <span class="mx-2">{{$likes}}</span>
        </div>

        <div class="d-flex align-items-center">
            <span class="material-icons @if($dislikeActive) text-primary @else gray-text @endif"" style="
                font-size:2rem;cursor: pointer;" wire:click.prevent="
                dislike">thumb_down</span>
            <span class="mx-2">{{$dislikes}}</span>
        </div>
    </div>
</div>