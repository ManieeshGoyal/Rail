<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{ \Illuminate\Support\Str::plural($pageTitle) }}</h5>
            @if($hideAll == FALSE)
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ number_format($total) }} {{ $total > 1 ? \Illuminate\Support\Str::plural($pageTitle) : $pageTitle }}</span>
                    @if(!empty($searchModel))
                        <form class="ml-5">
                            <div class="input-group input-group-sm input-group-solid search-from-wrapper" style="max-width: 175px">
                                <input type="text" class="form-control search" name="search" placeholder="Search {{ \Illuminate\Support\Str::plural($pageTitle) }}..." data-search-model="{{ $searchModel }}" autocomplete="off"/>
                                <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                </div>
                            </div>
                            <div class="search-suggestions-wrapper">
                                <ul class="suggestions custom-scroll-bar"></ul>
                            </div>
                        </form>
                    @endif
                </div>
            @endif
        </div>
        @if($hideAll == FALSE)
            <div class="d-flex align-items-center">
                @if($newLink)
                    <a href="{{ route($route . 'create') }}" class="btn btn-light-primary font-weight-bold ml-2">Add {{ $pageTitle }}</a>
                @endif
            </div>
        @endif
    </div>
</div>