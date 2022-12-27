    @if(count($graduates) > 0)
        @foreach($graduates as $graduate)
            <div class="listas-group-item">
                {{-- <a href="{{ url('member/'.$graduate->id) }}">
                    {{ $graduate->name }} {{ $graduate->qoute }}
                </a> --}}
            </div>
        @endforeach
    @else
        <div class="list-group-item">No Results Found</div>
    @endif