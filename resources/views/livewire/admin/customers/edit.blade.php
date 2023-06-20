<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input type="text" wire:model.defer='name'>

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Name {{ $name }}</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email"
                                            wire:model='name'>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                            wire:model='email'>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Phone</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email"
                                            wire:model='phone_number'>
                                        @error('phone_number')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Address</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email"
                                            wire:model='address'>
                                        @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary" wire:click.prevent='updateCustomer'>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
