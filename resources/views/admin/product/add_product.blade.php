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
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"
                                                class="text-primary"><i
                                                    class="uil uil-estate text-primary"></i>Dashboard</a></li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page"> Add Product
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
                        <form action="{{ url('admin/products/add-product') }}" class="" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="ec-content-wrapper">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card card-default">
                                                <div class="card-header card-header-border-bottom">
                                                    <h2>Add Product</h2>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row ec-vendor-uploads">
                                                        <div class="col-lg-4">
                                                            <div class="ec-vendor-img-upload">
                                                                <div class="ec-vendor-main-img">
                                                                    <div class="avatar-upload">
                                                                        <div class="avatar-edit">
                                                                            <input type='file' id="imageUpload"
                                                                                name="product_image"
                                                                                class="ec-image-upload" />
                                                                            <label for="imageUpload"><img
                                                                                    src="{{ url('assets/img/edit.svg') }}"
                                                                                    class="svg_img header_svg"
                                                                                    alt="edit" /></label>
                                                                        </div>
                                                                        <div class="avatar-preview ec-preview">
                                                                            <div class="imagePreview ec-div-preview">
                                                                                <img class="ec-image-preview"
                                                                                    src="{{ url('assets/img/vender-upload-preview.jpg') }}"
                                                                                    alt="edit" />
                                                                            </div>
                                                                        </div>
                                                                        @error('product_image')
                                                                            <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="ec-vendor-upload-detail row g-3">

                                                                <div class="col-md-6">
                                                                    <label for="inputEmail4" class="form-label">Product
                                                                        name</label>
                                                                    <input type="text"
                                                                        class="form-control slug-title"
                                                                        name="product_name">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Select Categories</label>
                                                                    <select name="sub_category_id" id="Categories"
                                                                        class="form-select">
                                                                        @foreach ($Category as $data)
                                                                            <optgroup
                                                                                label="{{ $data->main_category }}">
                                                                                @foreach ($data->subCategories as $subCategoryy)
                                                                                    <option
                                                                                        value=" {{ $subCategoryy->id }}">
                                                                                        {{ $subCategoryy->sub_category }}
                                                                                    </option>
                                                                                @endforeach


                                                                            </optgroup>
                                                                        @endforeach

                                                                    </select>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <label class="form-label">Sort Description</label>
                                                                    <textarea name="short_description" class="form-control" rows="2"></textarea>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">SKU (Product
                                                                        Code)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="product_code" value=""
                                                                        placeholder="" data-role="tagsinput" />
                                                                    @error('product_code')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Discount %</label>
                                                                    <input type="number" class="form-control"
                                                                        name="discount" id="product_stock">
                                                                    @error('discount')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>



                                                                <div class="col-md-12">
                                                                    <label class="form-label">Description</label>
                                                                    <textarea name="description" class="form-control" rows="4"></textarea>
                                                                </div>


                                                                @foreach ($size as $productSize)
                                                                    <div class="container card add-product">
                                                                        <div class="row ">
                                                                            <p class="mb-1 text-primary">Product Size:
                                                                                {{ $productSize->size }}</p>
                                                                            <input type="hidden" class="form-control"
                                                                                name="size[]" value="{{$productSize->id}}">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Price <span>(
                                                                                        In
                                                                                        Rupees
                                                                                        )</span></label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    name="price[]" id="price1">
                                                                                @error('price')
                                                                                    <p class="text-danger">
                                                                                        {{ $message }}
                                                                                    </p>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Product
                                                                                    Stock</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    name="product_stock[]"
                                                                                    id="product_stock">
                                                                                @error('product_stock')
                                                                                    <p class="text-danger">
                                                                                        {{ $message }}
                                                                                    </p>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach













                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                </button>
                                <button class="btn btn-primary btn-default btn-squared text-capitalize">save
                                    product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<style>
    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload {
        margin-bottom: 10px;
        position: relative;
    }

    @media (max-width: 991.98px) {
        .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload {
            max-width: 400px;
            margin: 0 auto 15px auto;
        }
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-edit {
        position: absolute;
        right: 25px;
        z-index: 1;
        top: 25px;
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-edit input {
        opacity: 0;
        width: 40px;
        height: 40px;
        padding: 0;
        border-radius: 50%;
        position: absolute;
        z-index: 1;
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-edit input+label {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        padding: 10px;
        margin-bottom: 0;
        border-radius: 10px;
        background: #ffffff;
        border: 1px solid transparent;
        -webkit-box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.15);
        border: 1px solid #eeeeee;
        cursor: pointer;
        font-weight: normal;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-edit input+label .svg_img {
        width: 25px;
        opacity: 0.6;
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-edit input+label:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-preview {
        width: 100%;
        height: 100%;
        padding: 15px;
        position: relative;
        border: 1px solid #eeeeee;
        border-radius: 15px;
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .ec-vendor-uploads .ec-vendor-img-upload .ec-vendor-main-img .avatar-upload .avatar-preview .imagePreview img {
        margin: auto;
        vertical-align: middle;
        max-width: 100%;
        border-radius: 10px;
    }
</style>


@include('layouts.footer')

<script>
    CKEDITOR.replace('short_description');
    CKEDITOR.replace('description');
</script>

<script>
    CKEDITOR.replace('description');
</script>

<script>
    /*======== Image Change on Upload ========*/
    $("body").on("change", ".ec-image-upload", function(e) {

        var lkthislk = $(this);

        if (this.files && this.files[0]) {

            var reader = new FileReader();
            reader.onload = function(e) {

                var ec_image_preview = lkthislk.parent().parent().children('.ec-preview').find(
                    '.ec-image-preview').attr('src', e.target.result);

                ec_image_preview.hide();
                ec_image_preview.fadeIn(650);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
</body>
