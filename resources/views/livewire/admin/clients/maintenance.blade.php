<div>
    <x-slot name="header">
        <h5>
            Contacts from Maintenance
        </h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Maintenance Mode Contacts</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover  ">
                    <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($maintenance_contacts as $contact)
                            <tr>
                                <td scope="row">{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ Carbon\Carbon::parse($contact->created_at)->format('h:i:sA jS F, Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $maintenance_contacts->links() }}
                    </tfoot>
                </table>

            </div>
            <div class="card-footer">
                {{ $maintenance_contacts->links() }}
            </div>
        </div>
    </div>
</div>
