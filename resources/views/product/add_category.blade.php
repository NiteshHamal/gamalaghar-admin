@include('layouts.header')
<div class="mobile-search">
    <form action="/" class="search-form">
        <img src="img/svg/search.svg" alt="search" class="svg">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">add category</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="uil uil-estate"></i>Category</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">GamalaGhar</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-add global-shadow px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                        <div class="row justify-content-center">
                            <div class="col-xxl-7 col-lg-10">
                                <div class="mx-sm-30 mx-20 ">
                                    <div class="card add-product p-sm-30 p-20 mb-30">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">Category</h6>
                                            </div>
                                            <div class="add-product__body px-sm-40 px-20">
                                                <form action="{{ url('admin/add_category') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name1">categoy name</label>
                                                        <input type="text" class="form-control" id="name1"
                                                            placeholder="red chair" name="category">
                                                        @error('category')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div
                                                        class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                                                        <button
                                                            class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                        </button>
                                                        <button
                                                            class="btn btn-primary btn-default btn-squared text-capitalize"
                                                            type="submit">save
                                                            category
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-header">
                                                <h6 class="fw-500">Category Table</h6>
                                            </div>
                                            {{-- category table start --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div
                                                        class="userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0 table-borderless">
                                                                <thead>
                                                                    <tr class="userDatatable-header">
                                                                        <th>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="custom-checkbox  check-all">
                                                                                    <label for="check-44">
                                                                                        <span
                                                                                            class="checkbox-text userDatatable-title">category</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </th>
                                                                        <th>
                                                                            <span
                                                                                class="userDatatable-title float-end">Edit</span>
                                                                        </th>
                                                                        <th>
                                                                            <span
                                                                                class="userDatatable-title float-end">delete</span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex">

                                                                                <div class="userDatatable-inline-title">
                                                                                    <a href="#"
                                                                                        class="text-dark fw-500">
                                                                                        <h6>Kellie Marquot</h6>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                                <a href="#" class="view">
                                                                                    <i class="uil uil-edit"></i>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                                <a href="#" class="remove">
                                                                                    <i class="uil uil-trash-alt"></i>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- category table ends --}}
                                        </div>
                                    </div>

                                    <div class="card add-product p-sm-30 p-20 mb-30">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">Sub-Category</h6>
                                            </div>
                                            <div class="add-product__body px-sm-40 px-20">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="name1">sub-categoy name</label>
                                                        <input type="text" class="form-control" id="name1"
                                                            placeholder="indoor plants">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="countryOption">
                                                            <label for="countryOption">
                                                                category
                                                            </label>
                                                            <select
                                                                class="js-example-basic-single js-states form-control"
                                                                id="countryOption">
                                                                <option value="JAN"> Pots</option>
                                                                <option value="FBR">Plants</option>
                                                                <option value="FBR">Soil & Fertilizers</option>
                                                                <option value="FBR">Garden Decor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                                                        <button
                                                            class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                        </button>
                                                        <button
                                                            class="btn btn-primary btn-default btn-squared text-capitalize"
                                                            type="submit">save
                                                            sub-category
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
