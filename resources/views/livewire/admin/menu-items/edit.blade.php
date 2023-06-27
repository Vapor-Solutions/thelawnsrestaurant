<div>
    <div>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card center">
                                <div class="card-header">
                                    <h4>Update Existing Menu Item</h4>
                                </div>
                                <div class="card-body ring-offset-2">
                                    <form>
                                        <div class="form-group">
                                            <label>Item Name : {{ $title }}</label>
                                            <input type="text" wire:model="title" class="form-control">
                                        </div>
                                        @error('title')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="form-group">
                                            <label>Choose the Category of your Menu Item</label>
                                            <select wire:model="category" class="form-control">
                                                <option>Choose a Menu Item Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="form-group">
                                            <label>Item Description : {{ $description }}</label>
                                            <input type="text" wire:model="description" class="form-control">
                                        </div>
                                        @error('description')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label>Item Price : {{ $price }}</label>
                                            <input type="number" wire:model="price" class="form-control">
                                        </div>
                                        @error('price')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label>Upload an Image of the Menu Item</label>
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
                                                <button class="btn btn-success" type="submit"
                                                    wire:click.prevent='updateMenuItems'>Update</button>
                                                <a href="#" class="btn btn-danger">Back to list</a>
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
