<form action="{{ route('comics.destroy', $comic->id) }}" method="post"
    onsubmit="return confirm('You want to delete {{ $comic->title }}?')" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
</form>
