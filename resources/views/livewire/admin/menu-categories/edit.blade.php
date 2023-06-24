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
                                    <div class="form-group">
                                        <label wire:ignore>Category Name: {{ $menuCategory->title }}</label>
                                        <input type="text" wire:model="menuCategory.title" class="form-control">
                                    </div>
                                    @error('title')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label>Upload an image of the service</label>
                                        <input type="file" wire:model="new_image" name='image' class="form-control"
                                            placeholder="Image">
                                        @if ($new_image)
                                            <p>New image preview</p>
                                            <div class="row">
                                                <div class="col-3  mt-2 me-1 mb-2 ">
                                                    <img src="{{ $new_image->temporaryUrl() }}" height="200"
                                                        width="200">
                                                </div>
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-3  mt-2 me-1 mb-2 ">
                                                    <img src="{{ asset('images/admin/menu_category_images') }}/{{ $image }}"
                                                        height="200" width="200">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    @error('image_path')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="card-body" class="btn-text-right">
                                        <div class="buttons">
                                            <button class="btn btn-success" wire:click='save'>Save</button>
                                            <a href="{{ route('admin.menu-categories.index') }}"
                                                class="btn btn-danger">Back to List</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
