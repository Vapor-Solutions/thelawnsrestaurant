<div>
    <div>
        <div>
            <div>
                <div class="main-content">
                    <section class="section">
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="card center">
                                        <div class="card-header">
                                            <h4>Create a New Table Reservation</h4>
                                        </div>
                                        <div class="card-body ring-offset-2">
                                            <form>
                                                <div class="form-group">
                                                    <label wire:ignore>Customer Name</label>
                                                    <input type="text" wire:model="name" class="form-control"
                                                        readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Customer Email:</label>
                                                    <input type="text" wire:model="email" class="form-control" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Customer Phone Number:</label>
                                                    <input type="text" wire:model="phone_number" class="form-control" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Resevation Date :</label>
                                                    <div class="input-group date" id="reservationdatetime"
                                                        data-target-input="nearest">
                                                        <input type="date" class="form-control datetimepicker-input"
                                                            data-target="#reservationdatetime"
                                                            wire:model='reservation_date' />
                                                        <div class="input-group-append"
                                                            data-target="#reservationdatetime"
                                                            data-toggle="datetimepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('reservation_date')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror

                                                <div class="form-group">
                                                    <label>Reservation Time :</label>
                                                    <input type="time" wire:model="reservation_time"
                                                        class="form-control">
                                                </div>
                                                @error('reservation_time')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="form-group">
                                                    <label>Table Capacity</label>
                                                    <input type="number" wire:model="pax" class="form-control"
                                                        min="1" max="20">
                                                </div>
                                                @error('pax')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="card-body" class="btn-text-right">
                                                    <div class="buttons">
                                                        <button class="btn btn-success" type="submit"
                                                            wire:click='editTableReservation'>Save</button>
                                                        <a href="{{ route('admin.table-reservations.index') }}" class="btn btn-danger">Back to list</a>
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
    </div>

    {{-- @push('scripts')
        <script>
            $(document).ready(function() {
                $('#select2').select2();
                $('#select2').on('change', function(e) {
                    var data = $('#select2').select2("val");
                    @this.set('client', data);
                });
            });
        </script>
    @endpush --}}

</div>
