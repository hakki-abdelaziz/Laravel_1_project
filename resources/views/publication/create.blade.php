
<x-master title="Create Publication">
    <div class="container">
        <h1>Create a New Publication</h1>
        <form action="{{ route('publication.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5">{{ old('body') }}</textarea>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Publication</button>
        </form>
    </div>
</x-master>
