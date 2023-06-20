<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

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
                                                        <a href="{{ route('admin.customers.edit', ['id' => $customer->id]) }}"
                                                            class="btn btn-primary"><i
                                                                class="material-icons">update</i></a>
                                                        <a href="" class="btn btn-danger"
                                                            wire:click.prevent='deleteCustomer({{ $customer->id }})'><i
                                                                class="material-icons">delete</i></a>

                                                        <!--sweet alert-->
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
