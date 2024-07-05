<!-- resources/views/publications/edit.blade.php -->
<x-master title="Edit Publication">
    <div class="container">
        <h1>Edit Publication</h1>
        <form action="{{ route('publications.update', $publication->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $publication->title) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body">{{ old('body', $publication->body) }}</textarea>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($publication->image)
                    <img src="{{ asset('storage/' . $publication->image) }}" alt="Current img" width="100">
                @endif
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Publication</button>
        </form>
    </div>
</x-master>
