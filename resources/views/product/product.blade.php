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
                            <h4 class="text-capitalize breadcrumb-title">add product</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="uil uil-estate"></i>Product</a></li>
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
                                                <h6 class="fw-500">About Product</h6>
                                            </div>
                                            <div class="add-product__body px-sm-40 px-20">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="name1">product name</label>
                                                        <input type="text" class="form-control" id="name1"
                                                            placeholder="red chair">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="product_code">product code</label>
                                                        <input type="number" class="form-control" id="product_code"
                                                            placeholder="Product Code">
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
                                                    <div class="form-group">
                                                        <div class="countryOption">
                                                            <label for="countryOption">
                                                                sub-category
                                                            </label>
                                                            <select
                                                                class="js-example-basic-single js-states form-control"
                                                                id="countryOption">
                                                                <option value="JAN">India Pots</option>
                                                                <option value="FBR">Chinsese Pots</option>
                                                                <option value="FBR">Indoor Plants</option>
                                                                <option value="FBR">Outdoor plants</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="countryOption">
                                                            <label for="countryOption">
                                                                property
                                                            </label>
                                                            <select
                                                                class="js-example-basic-single js-states form-control"
                                                                id="countryOption">
                                                                <option value="JAN">Size</option>
                                                                <option value="FBR">Material</option>
                                                                <option value="FBR">Acessories</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="countryOption">
                                                            <label for="countryOption">
                                                                sub-property
                                                            </label>
                                                            <select
                                                                class="js-example-basic-single js-states form-control"
                                                                id="countryOption">
                                                                <option value="JAN">Ceramic</option>
                                                                <option value="FBR">Plastic</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group quantity-appearance">
                                                        <label>price</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <img class="svg" src="img/svg/dollar-sign.svg"
                                                                        alt>
                                                                </span>
                                                            </div>
                                                            <div class="pt_Quantity">
                                                                <input type="number" class="form-control"
                                                                    min="0" max="100" step="1"
                                                                    value="0" data-inc="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="stock">No. of Stock</label>
                                                        <input type="number" class="form-control" id="stock"
                                                            placeholder="Number of Stocks">
                                                    </div>
                                                    <div class="form-group quantity-appearance">
                                                        <label>Discount</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon2">
                                                                    <img class="svg" src="img/svg/percent.svg" alt>
                                                                </span>
                                                            </div>
                                                            <div class="pt_Quantity">
                                                                <input type="number" class="form-control"
                                                                    min="0" max="100" step="1"
                                                                    value="0" data-inc="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group status-radio add-product-status-radio mb-20">
                                                        <label class="mb-15">status</label>
                                                        <div class="d-flex">
                                                            <div class="radio-horizontal-list d-flex flex-wrap">
                                                                <div class="radio-theme-default custom-radio ">
                                                                    <input class="radio" type="radio"
                                                                        name="radio-optional" value="0"
                                                                        id="radio-hl1">
                                                                    <label for="radio-hl1">
                                                                        <span class="radio-text">Published</span>
                                                                    </label>
                                                                </div>
                                                                <div class="radio-theme-default custom-radio ">
                                                                    <input class="radio" type="radio"
                                                                        name="radio-optional" value="0"
                                                                        id="radio-hl2">
                                                                    <label for="radio-hl2">
                                                                        <span class="radio-text">draft</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Product
                                                            Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                            placeholder="loram ipsum dolor sit amit"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name8">Meta Title</label>
                                                        <input type="text" class="form-control" id="name8"
                                                            placeholder="Meta title">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label for="name9">Meta Keyword</label>
                                                        <input type="text" class="form-control" id="name9"
                                                            placeholder="Meta keyword">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card add-product p-sm-30 p-20 ">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">Product image</h6>
                                            </div>
                                            <div class="add-product__body-img px-sm-40 px-20">
                                                <label for="upload" class="file-upload__label">
                                                    <span class="upload-product-img px-10 d-block">
                                                        <span class="file-upload">
                                                            <img class="svg" src="img/svg/upload.svg" alt>
                                                            <input id="upload" class="file-upload__input"
                                                                type="file" name="file-upload">
                                                        </span>
                                                        <span class="pera">Drag and drop an image</span>
                                                        <span>or <a href="#" class="color-secondary">Browse</a>
                                                            to choose a
                                                            file</span>
                                                    </span>
                                                </label>
                                                <div
                                                    class="upload-product-media d-flex justify-content-between align-items-center mt-25">
                                                    <div class="upload-media-area d-flex">
                                                        <img src="img/food-restaurant-media.png" alt="img">
                                                        <div
                                                            class=" upload-media-area__title  d-flex flex-wrap align-items-center ms-10">
                                                            <div>
                                                                <p>Product_image.jpg</p>
                                                                <span>68.8 KB</span>
                                                            </div>
                                                            <div class="upload-media-area__btn">
                                                                <button type="button"
                                                                    class="transparent rounded-circle wh-30 border-0 color-danger">
                                                                    <img class="svg" src="img/svg/trash-2.svg" alt>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                                        <button
                                            class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                        </button>
                                        <button class="btn btn-primary btn-default btn-squared text-capitalize">save
                                            product
                                        </button>
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