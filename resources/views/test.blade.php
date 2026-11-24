<form action="#" method="POST">
    @csrf

    <div class="form-group">
        <label>Write a comment</label>

        <textarea name="content" class="form-control"
            placeholder="Write your comment...">{{ old('content') }}</textarea>

        @error('content')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-2">
        Send Comment
    </button>
</form>