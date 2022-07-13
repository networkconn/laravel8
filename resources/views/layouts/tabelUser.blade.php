<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">
            <i class="fa fa-users" aria-hidden="true"></i>
            All User {{ $user->count() }}
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <th>
                        Nama User
                    </th>
                    <th>
                        Lisensi
                    </th>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>1 Month</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>