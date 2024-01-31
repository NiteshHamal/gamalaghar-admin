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
                            <h4 class="text-capitalize breadcrumb-title">Add Sub category</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-primary"><i
                                                    class="uil uil-estate text-primary"></i>Dashboard</a></li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Sub Category</li>
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



                        <div class="card-header">
                            <h6 class="fw-500">Sub Category</h6>
                        </div>
                        <div class="add-product__body px-sm-40 px-20">
                            <form action="{{ url('admin/category/main') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name1">sub-categoy name</label>
                                    <input type="text" class="form-control" id="name1" placeholder="Pot"
                                        name="main_category">
                                    @error('main_category')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div
                                    class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                                    <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                    </button>
                                    <button class="btn btn-primary btn-default btn-squared text-capitalize"
                                        type="submit">save
                                        category
                                    </button>
                                </div>
                            </form>
                        </div>

                        {{-- category table start --}}
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead class="bg-primary text-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Sub Category</th>
                                                <th>Main Category</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($subCategory as $data)
                                                <tr>

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
                                </div>

                            </div>
                        </div>
                        {{-- category table ends --}}






                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
