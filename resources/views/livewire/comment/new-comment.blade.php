<div>
    <div class="d-flex align-items-center">
        <img src="{{ asset('/images/' .  auth()->user()->channel->image)}}" class="rounded-img" style="height: 40px;">

        <input type="text" wire:model="body" class="my-2 comment-form-control" placeholder="Add a public comment...">
    </div>

    <div class="d-flex justify-content-end align-items-center">
        @if($body)
        <a href="" wire:click.prevent="resetForm"> Cancel</a>
        <a href="" wire:click.prevent="addComment" class="mx-2 btn btn-secondary"> COMMENT</a>
        @endif
    </div>
</div>