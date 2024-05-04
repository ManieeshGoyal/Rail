@if(!empty($searchResults->count()))
    @foreach($searchResults as $searchResult)
        <li>
            <a href="{{ route('dashboard.users.edit', $searchResult->id) }}">
                <div class="search-mg">
                    <span>{{ $searchResult->name[0] }}</span>
                </div>
                <div class="search-text">
                    <p>{{ $searchResult->name }}</p>
                </div>
            </a>
        </li>
    @endforeach
@endif