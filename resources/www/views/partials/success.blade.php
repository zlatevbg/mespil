@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="{{ __('Close') }}"><span aria-hidden="true">&times;</span></button>
        <ul class="list-unstyled mb-0">
            @foreach (Arr::wrap(session('success')) as $s)
                <li>{{ $s }}</li>
            @endforeach
        </ul>
    </div>
@endif
