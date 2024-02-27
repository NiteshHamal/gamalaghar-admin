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
                            <h4 class="text-capitalize breadcrumb-title">View Orders</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"
                                                class="text-primary"><i
                                                    class="uil uil-estate text-primary"></i>Dashboard</a></li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">View
                                            Orders</li>
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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless" id="table_data">
                                        <thead class="bg-primary text-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td></td>
                                                <td>Chinese Pot</td>
                                                <td>2</td>
                                                <td>1000</td>
                                                <td>2000</td>
                                            </tr>
                                            {{-- @forelse ($orders as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->fullname }}</td>
                                                    <td>{{ $order->order_number }}</td>
                                                    <td>{{ $order->province }}</td>
                                                    <td>{{ $order->city }}</td>
                                                    <td>{{ $order->area }}</td>
                                                    <td>{{ $order->sub_total }}</td>
                                                    <td>{{ $order->delivery_charge }}</td>
                                                    <td>{{ $order->total_amount }}</td>
                                                    <td>{{ $order->order_status }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a class="btn btn-primary me-3"
                                                                href="{{ url('admin/single-orders') }}"><i
                                                                    class="bi bi-eye"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="11">
                                                        <img src="{{ url('assets/img/No data-rafiki.png') }}"
                                                            class="img-fluid d-block mx-auto"
                                                            style="max-width: 300px" />
                                                    </td>
                                                </tr>
                                            @endforelse --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="border-none" colspan="4">
                                                    <span></span>
                                                </td>
                                                <td class="border-color" colspan="1">
                                                    <span><strong>Sub Total</strong></span>
                                                </td>
                                                <td class="border-color">
                                                    <span><b>Rs. 3520</b></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-none" colspan="4">
                                                    <span></span>
                                                </td>
                                                <td class="border-color" colspan="1">
                                                    <span><strong>Tax (13%)</strong></span>
                                                </td>
                                                <td class="border-color">
                                                    <span><b>Rs. 352</b></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-none" colspan="4">
                                                    <span></span>
                                                </td>
                                                <td class="border-color" colspan="1">
                                                    <span><strong>Total</strong></span>
                                                </td>
                                                <td class="border-color">
                                                    <span><b>Rs. 3872</b></span>
                                                </td>

                                            </tr>
                                        </tfoot>
                                    </table>
                                    {{-- {{ $products->links('pagination::bootstrap-5') }} --}}
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
