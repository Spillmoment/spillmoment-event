<div class="card">
    <div class="card-header mb-2 text-dark bg-profile">
        <div class="clearfix">
            <h5 class="card-title mb-4">List Event {{ auth()->user()->name }}</h4>
        </div>
    </div>

    <table class="table table-striped table-bordered my-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Event</th>
                <th scope="col">Kategori</th>
                <th scope="col">Speaker</th>
                <th scope="col">Partner</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($event as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a class="text-dark text-decoration-none font-weight-bold"
                        href="{{ route('event.detail', $item->event->id) }}">{{ $item->event->title }}</a></td>
                <td>{{ $item->event->category->name }}</td>
                <td>{{ $item->event->speaker->name }}</td>
                <td>{{ $item->event->partner }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
