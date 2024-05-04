<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto text-center" id="kt_brand">
        <a href="{{ route('index') }}" target="_blank" class="mt-5">
            <img alt="Logo" src="{{ asset('/assets/images/new-JindalRail.gif') }}" width="98%" style="background:#fff;"/>
        </a>
    </div>
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">

                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('index') }}" class="menu-link" target="_blank">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"/>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"/>
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Visit Website</span>
                    </a>
                </li>
                @if(auth()->user()->role_id != 0)
                    <li class="menu-item {{ request()->routeIs('dashboard.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('dashboard.index') }}" class="menu-link">
                            <span class="svg-icon menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
                                        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                    @php
                    $careers = ['dashboard/career-management/job-posting', 'dashboard/career-management/job-posting/create', 
                                'dashboard/career-management/job-posting/*/edit', 'dashboard/career-management/candidate'];
                        $i= 0;
                        $career_checklist = '';
                        foreach($careers as $page){
                            $career_checklist .= request()->is($page);
                            (++$i>1)? ' || ':'';
                        }
                    
                    @endphp
                    @canany(['create-job-posting', 'read-job-posting', 'update-job-posting', 'delete-job-posting','create-seo', 'read-seo', 'update-seo', 'delete-seo'])
                    <li class="menu-item menu-item-submenu {{ ($career_checklist) ? 'menu-item-open' : '' }} " aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="menu-text">Career Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu" kt-hidden-height="200">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                @php
                                $careers = ['dashboard/career-management/job-posting', 'dashboard/career-management/job-posting/create', 'dashboard/career-management/job-posting/*/edit'];
                                    $i= 0;
                                    $career_checklist = '';
                                    foreach($careers as $page){
                                        $career_checklist .= request()->is($page);
                                        (++$i>1)? ' || ':'';
                                    }
                                
                                @endphp
                                @canany(['create-job-posting', 'read-job-posting', 'update-job-posting', 'delete-job-posting'])
                                <li class="menu-item menu-item-submenu {{ ($career_checklist) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                                        <i class="menu-bullet menu-bullet-line">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Job Postings</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu" kt-hidden-height="240">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            @canany(['read-job-posting', 'update-job-posting', 'delete-job-posting'])
                                            <li class="menu-item {{ (request()->is('dashboard/career-management/job-posting')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                <a href="{{ route('dashboard.career-management.job-posting.index') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">List Job Postings</span>
                                                </a>
                                            </li>
                                            @endcanany
                                            @canany(['create-job-posting'])
                                            <li class="menu-item {{ (request()->is('dashboard/career-management/job-posting/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                <a href="{{ route('dashboard.career-management.job-posting.create') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Add Job Posting</span>
                                                </a>
                                            </li>
                                            @endcanany
                                        </ul>
                                    </div>
                                </li>
                                @endcanany
                                @canany(['read-candidates', 'update-candidates', 'delete-candidates'])
                                <li class="menu-item {{ (request()->is('dashboard/career-management/candidate')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{ route('dashboard.career-management.candidate.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Candidate List</span>
                                    </a>
                                </li>
                                @endcanany
                            </ul>
                        </div>
                    </li>
                    @endcanany
                    @canany(['create-blog', 'read-blog', 'update-blog', 'delete-blog','create-blog-categories', 'read-blog-categories', 'update-blog-categories', 'delete-blog-categories'])
                        @php
                        $bloggings = ['dashboard/blogging/blog', 'dashboard/blogging/blog/create', 'dashboard/blogging/blog/*/edit', 'dashboard/blogging/blog-category', 'dashboard/blogging/blog-category/create', 'dashboard/blogging/blog-category/*/edit'];
                            $i= 0;
                            $bloggings_checklist = '';
                            foreach($bloggings as $page){
                                $bloggings_checklist .= request()->is($page);
                                (++$i>1)? ' || ':'';
                            }
                        
                        @endphp
                        <li class="menu-item menu-item-submenu {{ ($bloggings_checklist) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
                                            <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="menu-text">Blogging</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu" kt-hidden-height="200">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    @canany(['create-blog', 'read-blog', 'update-blog', 'delete-blog'])
                                    <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/blogging/blog') || request()->is('dashboard/blogging/blog/create') || request()->is('dashboard/blogging/blog/*/edit')) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Blogs</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu" kt-hidden-height="240">
                                            <i class="menu-arrow"></i>
                                            <ul class="menu-subnav">
                                                @canany(['read-blog', 'update-blog', 'delete-blog', 'restore-blog'])
                                                <li class="menu-item {{ (request()->is('dashboard/blogging/blog')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.blogging.blog.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">List Blogs</span>
                                                    </a>
                                                </li>
                                                @endcanany
                                                @canany(['create-blog'])
                                                <li class="menu-item {{ (request()->is('dashboard/blogging/blog/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.blogging.blog.create') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Add Blog</span>
                                                    </a>
                                                </li>
                                                @endcanany
                                            </ul>
                                        </div>
                                    </li>
                                    @endcanany
                                    @canany(['create-blog-categories', 'read-blog-categories', 'update-blog-categories', 'delete-blog-categories'])
                                    <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/blogging/blog-category') || request()->is('dashboard/blogging/blog-category/create') || request()->is('dashboard/blogging/blog-category/*/edit')) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Blog Categories</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu" kt-hidden-height="240">
                                            <i class="menu-arrow"></i>
                                            <ul class="menu-subnav">
                                                @canany(['read-blog-categories', 'update-blog-categories', 'delete-blog-categories', 'restore-blog-categories'])
                                                <li class="menu-item {{ (request()->is('dashboard/blogging/blog-category')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.blogging.blog-category.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">List Blog Categories</span>
                                                    </a>
                                                </li>
                                                @endcanany
                                                @canany(['create-blog-categories'])
                                                <li class="menu-item {{ (request()->is('dashboard/blogging/blog-category/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.blogging.blog-category.create') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Add Blog Category</span>
                                                    </a>
                                                </li>
                                                @endcanany
                                            </ul>
                                        </div>
                                    </li>
                                    @endcanany
                                </ul>
                            </div>
                        </li>
                    @endcanany
                    @canany(['update-management-firm','read-management-firm','update-slider','read-slider',
                                'create-success-timeline', 'read-success-timeline', 'update-success-timeline', 'delete-success-timeline',
                                'create-gallery', 'read-gallery', 'update-gallery', 'delete-gallery',
                                'create-testimonials', 'read-testimonials', 'update-testimonials', 'delete-testimonials',
                                'create-environment-compliance', 'read-environment-compliance', 'update-environment-compliance', 'delete-environment-compliance',
                                'create-esteemed-guests', 'read-esteemed-guests', 'update-esteemed-guests', 'delete-esteemed-guests',
                                'create-investor-relation', 'read-investor-relation', 'update-investor-relation', 'delete-investor-relation',
                                'create-balance-sheet', 'read-balance-sheet', 'update-balance-sheet', 'delete-balance-sheet',])
                        @php
                        $pages = ['dashboard/pages/homepage', 'dashboard/pages/home-slider', 
                                    'dashboard/pages/home-success-timeline', 'dashboard/pages/home-success-timeline/create', 
                                    'dashboard/pages/home-success-timeline/*/edit', 'dashboard/pages/home-our-gallery', 
                                    'dashboard/pages/home-our-gallery/create', 'dashboard/pages/home-our-gallery/*/edit', 
                                    'dashboard/pages/home-testimonial', 'dashboard/pages/home-testimonial/create', 
                                    'dashboard/pages/home-testimonial/*/edit',
                                    'dashboard/pages/environmentcompliancepage', 'dashboard/pages/environmentcompliancepage/create', 
                                    'dashboard/pages/environmentcompliancepage/*/edit',
                                    'dashboard/pages/esteemed-guests', 'dashboard/pages/esteemed-guests/create', 
                                    'dashboard/pages/esteemed-guests/*/edit',
                                    'dashboard/pages/balancesheet', 'dashboard/pages/balancesheet/create', 
                                    'dashboard/pages/balancesheet/*/edit',
                                    'dashboard/pages/investor-relation', 'dashboard/pages/investor-relation/create', 
                                    'dashboard/pages/investor-relation/*/edit'];
                            $i= 0;
                            $new_pages_checklist = '';
                            foreach($pages as $page){
                                $new_pages_checklist .= request()->is($page);
                                (++$i>1)? ' || ':'';
                            }
                        
                        @endphp
                        <li class="menu-item menu-item-submenu {{ ($new_pages_checklist) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="menu-text">Pages</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu" kt-hidden-height="">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                     @canany(['update-management-firm','read-management-firm','update-slider','read-slider',
                                                'create-success-timeline', 'read-success-timeline', 'update-success-timeline', 'delete-success-timeline',
                                                'create-gallery', 'read-gallery', 'update-gallery', 'delete-gallery',
                                                'create-testimonials', 'read-testimonials', 'update-testimonials', 'delete-testimonials',])
                                        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/pages/homepage') || request()->is('dashboard/pages/home-slider') || request()->is('dashboard/pages/home-success-timeline')
                                    || request()->is('dashboard/pages/home-success-timeline/create')
                                    || request()->is('dashboard/pages/home-our-gallery')
                                    || request()->is('dashboard/pages/home-our-gallery/create')
                                    || request()->is('dashboard/pages/home-testimonial')
                                    || request()->is('dashboard/pages/home-testimonial/create')
                                    ) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Home</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu" kt-hidden-height="240">
                                            <i class="menu-arrow"></i>
                                            <ul class="menu-subnav">
                                                <li class="menu-item {{ (request()->is('dashboard/pages/homepage')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.pages.homepage.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Management Firm & Popup</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item {{ (request()->is('dashboard/pages/home-slider')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.pages.home-slider.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Slider</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item {{ (request()->is('dashboard/pages/home-success-timeline')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.pages.home-success-timeline.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Success Timeline</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item {{ (request()->is('dashboard/pages/home-our-gallery')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.pages.home-our-gallery.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Our Gallery</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item {{ (request()->is('dashboard/pages/home-testimonial')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.pages.home-testimonial.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Testimonials</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endcanany
                                    @canany(['create-environment-compliance', 'read-environment-compliance', 'update-environment-compliance', 'delete-environment-compliance'])
                                        <li class="menu-item menu-item-submenu {{ ( request()->is('dashboard/pages/environmentcompliancepage')
                                        || request()->is('dashboard/pages/environmentcompliancepage/create')
                                        || request()->is('dashboard/pages/environmentcompliancepage/*/edit')
                                        ) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover" style="display:none;">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Environment Compliance</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu" kt-hidden-height="240">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    @canany(['read-environment-compliance', 'update-environment-compliance', 'delete-environment-compliance'])
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/environmentcompliancepage')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.environmentcompliancepage.index') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">List Compliance</span>
                                                        </a>
                                                    </li>
                                                    @endcanany
                                                    @canany(['create-environment-compliance'])
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/environmentcompliancepage/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.environmentcompliancepage.create') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Add Compliance</span>
                                                        </a>
                                                    </li>
                                                    @endcanany
                                                </ul>
                                            </div>
                                        </li>
                                    @endcanany
                                    @canany(['create-esteemed-guests', 'read-esteemed-guests', 'update-esteemed-guests', 'delete-esteemed-guests'])
                                        <li class="menu-item menu-item-submenu {{ ( request()->is('dashboard/pages/esteemed-guests')
                                    || request()->is('dashboard/pages/esteemed-guests/create')
                                    || request()->is('dashboard/pages/esteemed-guests/*/edit')
                                    ) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover" style="display:none;">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Esteemed Guests</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu" kt-hidden-height="240">
                                            <i class="menu-arrow"></i>
                                            <ul class="menu-subnav">
                                                @canany(['read-esteemed-guests', 'update-esteemed-guests', 'delete-esteemed-guests'])
                                                <li class="menu-item {{ (request()->is('dashboard/pages/esteemed-guests')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.pages.esteemed-guests.index') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">List Esteemed Guests</span>
                                                    </a>
                                                </li>
                                                @endcanany
                                                @canany(['create-esteemed-guests'])
                                                <li class="menu-item {{ (request()->is('dashboard/pages/esteemed-guests/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('dashboard.pages.esteemed-guests.create') }}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Add Esteemed Guests</span>
                                                    </a>
                                                </li>
                                                @endcanany
                                            </ul>
                                        </div>
                                    </li>
                                    @endcanany
                                    @canany(['create-balance-sheet', 'read-balance-sheet', 'update-balance-sheet', 'delete-balance-sheet'])
                                       <li class="menu-item menu-item-submenu {{ ( request()->is('dashboard/pages/balancesheet')
                                        || request()->is('dashboard/pages/balancesheet/create')
                                        || request()->is('dashboard/pages/balancesheet/*/edit')
                                        ) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover" style="display:none;">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Balance Sheet</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu" kt-hidden-height="240">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    @canany(['read-balance-sheet', 'update-balance-sheet', 'delete-balance-sheet'])
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/balancesheet')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.balancesheet.index') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">List Balance Sheet</span>
                                                        </a>
                                                    </li>
                                                    @endcanany
                                                    @canany(['create-balance-sheet'])
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/balancesheet/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.balancesheet.create') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Add Balance Sheet</span>
                                                        </a>
                                                    </li>
                                                    @endcanany
                                                </ul>
                                            </div>
                                        </li>
                                    @endcanany
                                    @canany(['create-investor-relation', 'read-investor-relation', 'update-investor-relation', 'delete-investor-relation'])
                                        <li class="menu-item menu-item-submenu {{ ( request()->is('dashboard/pages/investor-relation')
                                        || request()->is('dashboard/pages/investor-relation/create')
                                        || request()->is('dashboard/pages/investor-relation/*/edit')
                                        ) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Wagon Manufacturing</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu" kt-hidden-height="240">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/investor-relation-year')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.investor-relation-year.index') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Year List</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/tabs')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.investor-relation-tab.index') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Client Type</span>
                                                        </a>
                                                    </li>
                                                    @canany(['read-investor-relation', 'update-investor-relation', 'delete-investor-relation'])
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/investor-relation')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.investor-relation.index') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">List Wagon</span>
                                                        </a>
                                                    </li>
                                                    @endcanany
                                                    @canany(['create-investor-relation'])
                                                    <li class="menu-item {{ (request()->is('dashboard/pages/investor-relation/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                        <a href="{{ route('dashboard.pages.investor-relation.create') }}" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Upload Wagon CSV</span>
                                                        </a>
                                                    </li>
                                                    @endcanany
                                                </ul>
                                            </div>
                                        </li>
                                    @endcanany
                                </ul>
                            </div>
                        </li>
                    @endcanany
                    
                    @canany(['create-hfcm', 'read-hfcm', 'update-hfcm', 'delete-hfcm'])
                        @php
                        $code_managers = ['dashboard/header-footer-code-manager', 'dashboard/header-footer-code-manager/create','dashboard/header-footer-code-manager/*/edit'];
                            $i= 0;
                            $code_managers_checklist = '';
                            foreach($code_managers as $page){
                                $code_managers_checklist .= request()->is($page);
                                (++$i>1)? ' || ':'';
                            }
                        
                        @endphp
                        
                        <li class="menu-item menu-item-submenu {{ ($code_managers_checklist) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z" fill="#000000" fill-rule="nonzero"/>
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) " x="11" y="4" width="2" height="16" rx="1"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="menu-text">Header Footer Code Manager</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu" kt-hidden-height="">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    @canany(['read-hfcm', 'update-hfcm', 'delete-hfcm'])
                                    <li class="menu-item {{ (request()->is('dashboard/header-footer-code-manager')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a href="{{ route('dashboard.header-footer-code-manager.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">List HFCM</span>
                                        </a>
                                    </li>
                                    @endcanany
                                    @canany(['create-hfcm'])
                                    <li class="menu-item {{ (request()->is('dashboard/header-footer-code-manager/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a href="{{ route('dashboard.header-footer-code-manager.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Add HFCM</span>
                                        </a>
                                    </li>
                                    @endcanany
                                </ul>
                            </div>
                        </li>
                    @endcanany
                    @canany(['create-seo', 'read-seo', 'update-seo', 'delete-seo'])
                    <li class="menu-item {{ (request()->is('dashboard/seo')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('dashboard.seo.index') }}" class="menu-link">
                            <span class="svg-icon menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"></path>
                                        <path d="M8.7295372,14.6839411 C8.35180695,15.0868534 7.71897114,15.1072675 7.31605887,14.7295372 C6.9131466,14.3518069 6.89273254,13.7189711 7.2704628,13.3160589 L11.0204628,9.31605887 C11.3857725,8.92639521 11.9928179,8.89260288 12.3991193,9.23931335 L15.358855,11.7649545 L19.2151172,6.88035571 C19.5573373,6.44687693 20.1861655,6.37289714 20.6196443,6.71511723 C21.0531231,7.05733733 21.1271029,7.68616551 20.7848828,8.11964429 L16.2848828,13.8196443 C15.9333973,14.2648593 15.2823707,14.3288915 14.8508807,13.9606866 L11.8268294,11.3801628 L8.7295372,14.6839411 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="menu-text">SEO Settings</span>
                        </a>
                    </li>
                    @endcanany
                    <li class="menu-item {{ (request()->is('dashboard/contact')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('dashboard.contact.index') }}" class="menu-link">
                            <span class="svg-icon menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="menu-text">Contact From Enquiry</span>
                        </a>
                    </li> 
                    @php
                    $roles_permissions = ['dashboard/user-management/users', 'dashboard/user-management/users/create','dashboard/user-management/users/*/edit', 'dashboard/user-management/roles', 'dashboard/user-management/roles/create','dashboard/user-management/roles/*/edit'];
                        $i= 0;
                        $role_permission_checklist = '';
                        foreach($roles_permissions as $page){
                            $role_permission_checklist .= request()->is($page);
                            (++$i>1)? ' || ':'';
                        }
                    
                    @endphp
                    
                    @canany(['create-user', 'read-user', 'update-user', 'delete-user','create-role-permissions', 'read-role-permissions', 'update-role-permissions', 'delete-role-permissions'])
                        <li class="menu-item menu-item-submenu {{ ($role_permission_checklist) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
                                        <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="menu-text">User Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu" kt-hidden-height="200">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                @canany(['create-user', 'read-user', 'update-user', 'delete-user'])
                                <li class="menu-item menu-item-submenu  {{ ( request()->is('dashboard/user-management/users') || request()->is('dashboard/user-management/users/create') || request()->is('dashboard/user-management/users/*/edit') ) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                                        <i class="menu-bullet menu-bullet-line">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">User</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu" kt-hidden-height="240">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            @canany(['read-user', 'update-user', 'delete-user'])
                                            <li class="menu-item {{ (request()->is('dashboard/user-management/users')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                <a href="{{ route('dashboard.user-management.users.index') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">List User</span>
                                                </a>
                                            </li>
                                            @endcanany
                                            @canany(['create-user'])
                                            <li class="menu-item {{ (request()->is('dashboard/user-management/users/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                <a href="{{ route('dashboard.user-management.users.create') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Add User</span>
                                                </a>
                                            </li>
                                            @endcanany
                                        </ul>
                                    </div>
                                </li>
                                @endcanany
                                @canany(['create-role-permissions', 'read-role-permissions', 'update-role-permissions', 'delete-role-permissions'])
                                <li class="menu-item menu-item-submenu   {{ ( request()->is('dashboard/user-management/roles') || request()->is('dashboard/user-management/roles/create') || request()->is('dashboard/user-management/roles/*/edit') ) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                                        <i class="menu-bullet menu-bullet-line">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Roles & Permissions</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu" kt-hidden-height="240">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            @canany(['read-role-permissions', 'update-role-permissions', 'delete-role-permissions'])
                                            <li class="menu-item {{ (request()->is('dashboard/user-management/roles')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                <a href="{{ route('dashboard.user-management.roles.index') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">List Roles</span>
                                                </a>
                                            </li>
                                            @endcanany
                                            @canany(['create-role-permissions'])
                                            <li class="menu-item {{ (request()->is('dashboard/user-management/roles/create')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                                <a href="{{ route('dashboard.user-management.roles.create') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Add Roles</span>
                                                </a>
                                            </li>
                                            @endcanany
                                        </ul>
                                    </div>
                                </li>
                                @endcanany
                            </ul>
                        </div>
                    </li>
                    @endcanany
                @endif
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect opacity="0.300000012" x="0" y="0" width="24" height="24"/>
                                    <polygon fill="#000000" fill-rule="nonzero" opacity="0.3" points="7 4.89473684 7 21 5 21 5 3 11 3 11 4.89473684"/>
                                    <path d="M10.1782982,2.24743315 L18.1782982,3.6970464 C18.6540619,3.78325557 19,4.19751166 19,4.68102291 L19,19.3190064 C19,19.8025177 18.6540619,20.2167738 18.1782982,20.3029829 L10.1782982,21.7525962 C9.63486295,21.8510675 9.11449486,21.4903531 9.0160235,20.9469179 C9.00536265,20.8880837 9,20.8284119 9,20.7686197 L9,3.23140966 C9,2.67912491 9.44771525,2.23140966 10,2.23140966 C10.0597922,2.23140966 10.119464,2.2367723 10.1782982,2.24743315 Z M11.9166667,12.9060229 C12.6070226,12.9060229 13.1666667,12.2975724 13.1666667,11.5470105 C13.1666667,10.7964487 12.6070226,10.1879981 11.9166667,10.1879981 C11.2263107,10.1879981 10.6666667,10.7964487 10.6666667,11.5470105 C10.6666667,12.2975724 11.2263107,12.9060229 11.9166667,12.9060229 Z" fill="#000000"/>
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>