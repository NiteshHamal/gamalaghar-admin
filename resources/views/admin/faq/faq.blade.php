@include('layouts.header')
<div class="mobile-search">
    <form action="/" class="search-form">
        <img src="{{ url('admin/img/svg/search.svg') }}" alt="search" class="svg">
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
                            <h4 class="text-capitalize breadcrumb-title">Frequently
                                Asked Questions
                            </h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"
                                                class="text-primary"><i
                                                    class="uil uil-estate text-primary"></i>Dashboard</a></li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Frequently
                                            Asked Questions</li>
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
                        <div class="add-product__body px-sm-40 px-20">
                            <form action="{{ url('admin/faq') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name1">Question</label>
                                    <input type="text" class="form-control" id="name1" name="question">
                                    @error('question')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name1">Answer</label>
                                    <input type="text" class="form-control" id="name1" name="answer">
                                    @error('answer')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div
                                    class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                                    <button class="btn btn-primary btn-default btn-squared text-capitalize"
                                        type="submit">save
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
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($faqs as $faq)
                                                <tr>
                                                    <td>{{ $faq->id }}</td>
                                                    <td>{{ $faq->question }}</td>
                                                    <td>{{ $faq->answer }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a class="btn btn-primary me-3"
                                                                href="{{ url('admin/faq/edit/' . $faq->slug) }}"><i
                                                                    class="bi bi-pencil-square"></i></a>
                                                            <a class="btn btn-danger remove"
                                                                href="{{ url('admin/faq/delete/' . $faq->id) }}"><i
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
