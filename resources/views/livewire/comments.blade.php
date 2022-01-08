<div>
    <form action="{{route("user_comment")}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="text-custom-black fw-500 fs-14">Comment</label>
                    <textarea rows="4" name="comment" class="form-control form-control-custom"
                              placeholder="Comment"></textarea>
                    <div class="rating" >
                        <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        {{--                                                                            <label style="color: #0b0b0b;margin-right: 75px;font-size:xx-large" > Rating </label>--}}
                    </div>
                </div>
                <button type="submit" class="btn-first btn-submit">Leave Comment</button>
            </div>
        </div>
    </form>
</div>
