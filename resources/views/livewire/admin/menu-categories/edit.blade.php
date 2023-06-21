<div>
    <div>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card center">
                                <div class="card-header">
                                    <h4>Update Existing Menu Category</h4>
                                </div>
                                <div class="card-body ring-offset-2">
                                    <form >
                                        <div class="form-group">
                                            <label>Category Name: {{ $title }}</label>
                                            <input type="text" wire:model="title" class="form-control">
                                        </div>
                                        @error('title')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label>Upload an image of the service</label>
                                            <input type="file" wire:model="new_image" name='image' class="form-control"
                                                placeholder="Image">
                                                @if ($new_image)
                                                    <div class="row">
                                                        <div class="col-3  mt-2 me-1 mb-2 ">
                                                            <img src="{{ $new_image->temporaryUrl() }}" height="200"
                                                                width="200">
                                                        </div>
                                                    </div>
                                                @endif
                                        </div>
                                        @error('image_path')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="card-body" class="btn-text-right">
                                            <div class="buttons">
                                                <button class="btn btn-success" type="submit" wire:click='updateMenuCategory' >Save</button>
                                                <a href="#" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
