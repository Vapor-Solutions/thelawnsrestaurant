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
                                            <div wire:ignore>
                                                <select class="form-control" id="select2">
                                                    <option value="">Select Customer</option>
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer }}">{{ $customer->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Resevation Date :</label>
                                                <div class="input-group date" id="reservationdatetime"
                                                    data-target-input="nearest">
                                                    <input type="date" class="form-control datetimepicker-input"
                                                        data-target="#reservationdatetime"
                                                        wire:model='reservation_date' />
                                                    <div class="input-group-append" data-target="#reservationdatetime"
                                                        data-toggle="datetimepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Reservation Time :</label>
                                                <input type="time" wire:model="reservation_time"
                                                    class="form-control">
                                            </div>
                                            @error('description')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                            <label>Table Capacity</label>
                                            <input type="text" wire:model="pax" class="form-control" max="10">
                                    </div>
                                    @error('description')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="card-body" class="btn-text-right">
                                        <div class="buttons">
                                            <button class="btn btn-success" type="submit"
                                                wire:click.prevent='createTableReservation'>Save</button>
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
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#select2').select2();
            $('#select2').on('change', function(e) {
                var data = $('#select2').select2("val");
                @this.set('client', data);
            });
        });
    </script>
@endpush
