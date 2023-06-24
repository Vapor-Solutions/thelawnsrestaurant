<div>
    <div>
        <div class="main-content" wire:ignore.self>
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Customer Room Reservations</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th class="">
                                                        Number
                                                    </th>
                                                    <th>Customer Name</th>
                                                    <th>Room Type</th>
                                                    <th>Room Capacity</th>
                                                    <th>Room Number</th>
                                                    <th>Rate</th>
                                                    <th>Check In Date</th>
                                                    <th>Check Out Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $counter = 1;
                                                @endphp
                                                @foreach ($room_reservations as $key =>  $room_reservation)
                                                    <tr>
                                                        <td>{{ $counter++ }}</td>
                                                        {{-- <td> {{ $room_reservations->firstItem() + $key}} </td> --}}
                                                        <td>{{ $room_reservation->roomCustomerReservations->name}}</td>
                                                        <td></td>
                                                        <td>{{ $room_reservation->pax}}</td>
                                                        <td>{{ $room_reservation->roomReservation->room_number}}</td>
                                                        <td>{{ $room_reservation->rate }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($room_reservation->check_in)->format('d/m/y') }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($room_reservation->check_out)->format('d/m/y') }}</td>
                                                        <td>
                                                                <a href="{{ route('admin.table-reservations.edit', $room_reservation->id) }}"
                                                                    class="btn btn-dark flex-col mx-2">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <button
                                                                    onclick="confirm('Are you Sure you want to delete this Table Reservation?')||event.stopImmediatePropagation()"
                                                                    wire:click="deleteTableReservation({{ $room_reservation->id }})"
                                                                    class="btn btn-danger flex-col mx-2">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if (count($room_reservations))
                                            {{ $room_reservations->links() }}
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
</div>
