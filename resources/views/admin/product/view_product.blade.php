@include('layouts.header')
<div class="mobile-search">
    <form action="/" class="search-form">
        <img src="{{ url('img/svg/search.svg') }}" alt="search" class="svg">
        <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
    </form>
</div>
<div class="mobile-author-actions"></div>
<header class="header-top">
    @include('layouts.nav')
</header>
<main class="main-content">
    @include('layouts.sidebar')
    <div class="contents">

        {{-- ------ BredCrumb --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">View Product</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"
                                                class="text-primary"><i
                                                    class="uil uil-estate text-primary"></i>Dashboard</a></li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">View
                                            Products</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ------ BredCrumb --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-add global-shadow px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">

                        <div class="project-top-wrapper d-flex justify-content-between flex-wrap mb-25 mt-n10">
                            <div class="d-flex align-items-center flex-wrap justify-content-center">
                                <div class="project-search order-search  global-shadow mt-10">
                                    <form action="{{ url('admin/products/view-product') }}" method="GET"
                                        class="order-search__form">
                                        @csrf
                                        <img src="img/svg/search.svg" alt="search" class="svg text-primary">
                                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                            name="keyword" placeholder="Filter by keyword" aria-label="Search">
                                    </form>

                                </div>

                                <div class="project-category d-flex align-items-center ms-md-30 mt-xxl-10 mt-15">
                                    <p class="fs-14 color-gray text-capitalize mb-10 mb-md-0  me-10">Status :</p>
                                    <div class="project-tap order-project-tap global-shadow">
                                        <ul class="nav px-1" id="ap-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="ap-overview-tab" data-bs-toggle="pill"
                                                    href="#ap-overview" role="tab" aria-selected="true">All</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="timeline-tab" data-bs-toggle="pill"
                                                    href="#timeline" role="tab" aria-selected="false">Shipped</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="activity-tab" data-bs-toggle="pill"
                                                    href="#activity" role="tab" aria-selected="false">Awaiting
                                                    Shipment</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="draft-tab" data-bs-toggle="pill" href="#draft"
                                                    role="tab" aria-selected="false">Canceled</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="content-center mt-10">
                                <div class="button-group m-0 mt-xl-0 mt-sm-10 order-button-group">
                                    <button type="button"
                                        class="order-bg-opacity-secondary text-secondary btn radius-md">Export</button>
                                    <button type="button" class="btn btn-sm btn-primary me-0 radius-md">
                                        <i class="la la-plus"></i> Add order</button>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">

                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless" id="table_data">

                                        <thead class="bg-primary text-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($products as $product)
                                                <tr>
                                                    <td>{{ $product->id }}</td>
                                                    <td><img src="{{ $product->getFirstMediaUrl('product_image') }}"
                                                            alt="Product Image" style="max-width: 100px" />
                                                    </td>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->product_code }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a class="btn btn-primary me-3"
                                                                href="{{ url('admin/property/size/edit/' . $product->slug) }}"><i
                                                                    class="bi bi-pencil-square"></i></a>
                                                            <a class="btn btn-danger remove"
                                                                href="{{ url('admin/property/size/delete/' . $product->id) }}"><i
                                                                    class="bi bi-trash-fill"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty

                                                <tr>
                                                    <td colspan="5">
                                                        <img src="{{ url('assets/img/No data-rafiki.png') }}"
                                                            class="img-fluid d-block mx-auto"
                                                            style="max-width: 300px" />
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                    {{ $products->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                        {{-- category table ends --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>








@include('layouts.footer')
