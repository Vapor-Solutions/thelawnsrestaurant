<div>

    <div class="container-fluid">
        <div class="card my-5">
            <div class="card-header">
                <h5>List of Users</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-striped
                table-hover
                table-bordered">
                    <thead class="">
                        <caption></caption>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($users as $user)
                            <tr class="" >
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->title }}</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-center">
                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                            class="btn btn-dark flex-col mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button
                                            onclick="confirm('Are you Sure you want to delete this User?')||event.stopImmediatePropagation()"
                                            wire:click="delete({{ $user->id }})"
                                            class="btn btn-danger flex-col mx-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>
