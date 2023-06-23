<div>
    <div class="main-content" wire:ignore.self>
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Customers</h4>
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
                                                <th>Testimonial</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $counter = 1;
                                            @endphp
                                            @foreach ($customers as $key => $customer)
                                                <tr>
                                                    <td> {{ $customers->firstItem() + $key }} </td>
                                                    <td>{{ $customer->name }}</td>
                                                    <td>{{ $customer->testimonials ? $customer->testimonials->description : 'No testimonial' }}
                                                    </td>
                                                    <td>
                                                        {{-- <div class="d-flex flex-row justify-content-center"> --}}
                                                            <a href="{{ route('admin.customers.edit', $customer->id) }}"
                                                                class="btn btn-dark flex-col mx-2">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <button
                                                                onclick="confirm('Are you Sure you want to delete this Customer?')||event.stopImmediatePropagation()"
                                                                wire:click="deleteCustomer({{ $customer->id }})"
                                                                class="btn btn-danger flex-col mx-2">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @if (count($customers))
                                        {{ $customers->links() }}
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
