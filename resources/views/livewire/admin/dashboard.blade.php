<div>
    <x-slot name="header">
        <h5>Dashboard</h5>
    </x-slot>

    <div class="col-md-4 col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Maintenance Mode</h5>
                        <h6 class="text-{{ env('MAINTENANCE_MODE') ? 'success' : 'danger' }}">
                            {{ env('MAINTENANCE_MODE') ? 'ON' : 'OFF' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column mb-md-5 mb-2">
                            <button wire:click='maintenance_switch'
                                onclick="confirm('Are you sure you want switch to maintenance mode?') || event.stopImmediatePropagation()"
                                class="btn btn-{{ env('MAINTENANCE_MODE') ? 'danger' : 'success' }}">
                                Switch {{ env('MAINTENANCE_MODE') ? 'Off' : 'On' }}
                            </button>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date (Currently: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('D jS \of M, Y h:i A') }}; )</label>
                                <input wire:model='date' type="datetime-local" name="date" id="date"
                                    class="form-control"
                                    placeholder="Enter the date and time you expect for it to end"
                                    aria-describedby="helpId">
                                    @error('date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <button wire:click='change_end_maintenance' class="btn btn-primary">Change the End
                                Date</button>
                        </div>
                    </div>
                </div>
            </div>
</div>
