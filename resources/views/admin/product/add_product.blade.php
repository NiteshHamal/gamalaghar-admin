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
                                                                            class="ec-image-upload"
                                                                            accept=".png, .jpg, .jpeg" />
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
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="ec-vendor-upload-detail">
                                                            <form class="row g-3">
                                                                <div class="col-md-6">
                                                                    <label for="inputEmail4" class="form-label">Product
                                                                        name</label>
                                                                    <input type="text"
                                                                        class="form-control slug-title"
                                                                        id="inputEmail4">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Select Categories</label>
                                                                    <select name="categories" id="Categories"
                                                                        class="form-select">
                                                                        <optgroup label="Fashion">
                                                                            <option value="t-shirt">T-shirt</option>
                                                                            <option value="dress">Dress</option>
                                                                        </optgroup>
                                                                        <optgroup label="Furniture">
                                                                            <option value="table">Table</option>
                                                                            <option value="sofa">Sofa</option>
                                                                        </optgroup>
                                                                        <optgroup label="Electronic">
                                                                            <option value="phone">I Phone</option>
                                                                            <option value="laptop">Laptop</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Sort Description</label>
                                                                    <textarea class="form-control" rows="2"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-25">
                                                                    <label class="form-label">Colors</label>
                                                                    <input type="color"
                                                                        class="form-control form-control-color"
                                                                        id="exampleColorInput1" value="#ff6191"
                                                                        title="Choose your color">
                                                                    <input type="color"
                                                                        class="form-control form-control-color"
                                                                        id="exampleColorInput2" value="#33317d"
                                                                        title="Choose your color">
                                                                   
                                                                </div>
                                                                <div class="col-md-8 mb-25">
                                                                    <label class="form-label">Size</label>
                                                                    <div class="form-checkbox-box">
                                                                        <div class="form-check form-check-inline">
                                                                            <input type="checkbox" name="size1"
                                                                                value="size">
                                                                            <label>S</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input type="checkbox" name="size1"
                                                                                value="size">
                                                                            <label>M</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input type="checkbox" name="size1"
                                                                                value="size">
                                                                            <label>L</label>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Price <span>( In Rupees
                                                                            )</span></label>
                                                                    <input type="number" class="form-control"
                                                                        id="price1">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Quantity</label>
                                                                    <input type="number" class="form-control"
                                                                        id="quantity1">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Ful Detail</label>
                                                                    <textarea class="form-control" rows="4"></textarea>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Product Tags <span>( Type
                                                                            and
                                                                            make comma to separate tags )</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="group_tag" name="group_tag"
                                                                        value="" placeholder=""
                                                                        data-role="tagsinput" />
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








                        <div
                            class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                            <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
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
