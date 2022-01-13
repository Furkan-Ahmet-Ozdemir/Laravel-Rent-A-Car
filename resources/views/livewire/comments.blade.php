<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form action="{{route("user_comment")}}" wire:submit.prevent="store" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    @error('comment')<span class="text-danger">{{$message}}</span>@enderror
                    <label class="text-custom-black fw-500 fs-14">Comment</label>
                    <textarea rows="4"  wire:model="comment" class="form-control form-control-custom"
                              placeholder="Comment"></textarea>
                    <div class="rating" >
                        @error('rate')<span class="text-danger">{{$message}}</span>@enderror

                        <input type="radio"  wire:model="rate" value="5" id="5"><label for="5">☆</label>
                        <input type="radio"  wire:model="rate" value="4" id="4"><label for="4">☆</label>
                        <input type="radio"  wire:model="rate" value="3" id="3"><label for="3">☆</label>
                        <input type="radio"  wire:model="rate" value="2" id="2"><label for="2">☆</label>
                        <input type="radio"  wire:model="rate" value="1" id="1"><label for="1">☆</label>
                        {{--                                                                            <label style="color: #0b0b0b;margin-right: 75px;font-size:xx-large" > Rating </label>--}}
                    </div>
                </div>

                @auth
                    <button type="submit" class="btn-first btn-submit">Save Comment</button>
                @else
                    <a href="{{route('login')}}" class="btn btn-primary">For Submit Review, Please Login</a>

                @endauth
            </div>
        </div>
    </form>
</div>
