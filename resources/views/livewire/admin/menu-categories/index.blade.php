<div>
    <div class="main-content" wire:ignore.self>
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Menu Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="">
                                                    Number
                                                </th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $counter = 1;
                                            @endphp
                                            @foreach ($menuCategories as $key => $menuCategory)
                                                <tr>
                                                    <td>{{ $menuCategories->firstItem() + $key }}</td>
                                                    <td>{{ $menuCategory->title }}</td>
                                                    <td>
                                                        <img src="{{ asset('images/admin/menu_category_images') }}/{{  $menuCategory->image_path}}"
                                                            height="100" width="100">
                                                    </td>
                                                    <td>
                                                        {{-- <div class="d-flex flex-row justify-content-center"> --}}
                                                            <a href="{{ route('admin.menu-categories.edit', $menuCategory->id) }}"
                                                                class="btn btn-dark flex-col mx-2">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <button
                                                                onclick="confirm('Are you Sure you want to delete this Menu Category?')||event.stopImmediatePropagation()"
                                                                wire:click="deleteMenuCategory({{ $menuCategory->id }})"
                                                                class="btn btn-danger flex-col mx-2">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @if (count($menuCategories))
                                        {{ $menuCategories->links() }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
