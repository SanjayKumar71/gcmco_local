@if (count($breadcrumbs))
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb d-flex align-items-center ">
                    @foreach ($breadcrumbs as $breadcrumb)

                        @if ($breadcrumb->url && !$loop->last)
                            <li class="breadcrumb-item">
                                @if ($loop->first)
                                    <i class="text-black fe fe-home"></i>
                                @endif
                                <a class="text-dark" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                                <i class="text-black fe fe-arrow-right"></i>
                            </li>
                        @else
                            <li class="active">
                                @if ($loop->first)
                                    <i class="text-black fe fe-home"></i>
                                @endif
                                {{ $breadcrumb->title }}
                            </li>
                        @endif

                    @endforeach
                </ul>
            </nav>
        </div>
    </div>

@endif
