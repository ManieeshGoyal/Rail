@if(!empty($searchResults->count()))
    @foreach($searchResults as $searchResult)
        <li>
            <a href="{{ route('dashboard.products.edit', $searchResult->id) }}">
                <div class="search-mg">
                    @if(is_null($searchResult->images->first()) == FALSE)
                        <img src="{{ asset('/storage/' . $searchResult->images->first()->path) }}">
                    @else
                        <span>{{ $searchResult->name[0] }}</span>
                    @endif
                </div>
                <div class="search-text">
                    <p>{{ $searchResult->name }}</p>
                </div>
            </a>
        </li>
    @endforeach
@endif