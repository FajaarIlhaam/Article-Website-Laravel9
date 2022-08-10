@extends('layout/isUser')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Input Artikel Baru</h6>
    </div>
    <div class="card-body"> 
        <div class="form-style-2">
            <div class="form-style-2-heading">Silahkan Tambahkan Artikel baru</div>
            <form action={{ route('article_add_action') }} method="POST">
                @csrf
            <label for="field1"><span>Title <span class="required">*</span></span><input type="text" class="input-field @error('title') is-invalid @enderror" name="title" value="" />
                @error('title')
                <div class="invalid-feedback text-center" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            </label>
            <label for="field4"><span>Tag</span><select name="tags" class="select-field">
            <option value="berita">Berita</option>
            <option value="tutorial">Tutorial</option>
            <option value="olahraga">Olahraga</option>
            </select></label>
            <label for="field5"><span>Description<span class="required">*</span></span><textarea name="description" class="textarea-field @error('description') is-invalid @enderror"></textarea>
                @error('description')
                <div class="invalid-feedback text-center" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            </label>
            <label><span> </span><input type="submit" value="Tambah" /></label>
            <label><span> </span><a href=""value="Tambah"></a></label>
            </form>
            </div>
    </div>
</div>
