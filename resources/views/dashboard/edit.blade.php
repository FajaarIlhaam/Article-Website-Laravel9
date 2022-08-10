 @extends('layout/isUser')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Artikel</h6>
    </div>
    <div class="card-body"> 
        <div class="form-style-2">
            <div class="form-style-2-heading">Edit Artikel Baru</div>
            <form action={{ route('article_update_action', $tampil->id) }} method="POST">
                @method('put')
                @csrf
            <label for="field1"><span>Title <span class="required">*</span></span><input type="text" class="input-field" name="title" value="{{ $tampil->title }}" /></label>
            <label for="field4"><span>Tag</span><select name="tags" class="select-field" value="{{ $tampil->tags }}">
            <option value="berita" {{ $tampil->tags == 'berita' ? 'selected' : '' }}>Berita</option>
            <option value="tutorial" {{ $tampil->tags == 'tutorial' ? 'selected' : '' }}>Tutorial</option>
            <option value="olahraga" {{ $tampil->tags == 'olahraga' ? 'selected' : '' }}>Olahraga</option>
            </select></label>
            <label for="field5"><span>Description</span><textarea name="description" class="textarea-field">{{ $tampil->description }}</textarea></label>
            <label><span> </span><input type="submit" value="Edit" /></label>
            
            </form>
            </div>
    </div>
</div>
