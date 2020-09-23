@extends('front-end.layouts.index')

@section('css')
<link rel="stylesheet" href="https://hanoicomputercdn.com/template/may2020/script/otherstyle2020.css?v=53294">
@endsection

@section('content')
<div class="cate-top ">
    <div class="container-2019">
        <div class="breadcrumb mb-0 p-0">
            <ul class="list-unstyled m-0" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="item">
                        <span itemprop="name">Trang chủ</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="/{{$category->slug}}" itemprop="item"><span><span itemprop="name">{{$category->name}}</span></span></a>
                    <meta itemprop="position" content="2" />
                </li>
            </ul>
        </div>
        <div class="current-cate-title">
            <h1 class="current-cate-text"> {{Str::upper($category->name)}} </h1>
            <span class="current-cate-total">(Tổng {{$list_product->count()}} sản phẩm)</span>
        </div>
    </div>
</div>
<div class="container-2019 ">
    <div class="cate-content">
        <div class="cate-left">
            <span class="title">
                Lọc sản phẩm
            </span>
            <div class="p-filter-item">
                <span class="title js-toggleFilter"> Danh mục </span>
                <div class="p-filter-list-value" style="">
                    <ul class="list-brand-check list-unstyled">
                        @foreach ($list_children_category as $category)
                        <li><i class="far fa-angle-double-right"></i> <a class="bold" href="/{{$category->slug}}">{{$category->name}}</a>
                            <span class="bold"></span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @if (isset($product_type->filters))
            @foreach ($product_type->filters as $filter)
            <div class="p-filter-item">
                <span class="title js-toggleFilter"> {{$filter->name}} </span>
                <div class="p-filter-list-value" style="">
                    <ul class="list-brand-check list-unstyled">
                        @if (Request::has($filter->slug))
                        @foreach ($filter->filter_options as $filter_option)
                        @if($filter_option->slug == Request::input($filter->slug))
                        <li>
                            <label>
                                <div class="brand-checker">
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                </div>
                                <span title="ADATA" class="brand-checker-link">
                                    <span class="ahihi">
                                        <a class="filter-link"
                                            href="{{request()->url() . '?' . http_build_query(array_diff_key(request()->all(),[$filter->slug=>$filter_option->slug]))}}"
                                            title="ADATA">{{$filter_option->name}}</a><span class="sl-sp">({{$filter_option->products_count}})</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        @endif
                        @endforeach
                        @else
                        @foreach ($filter->filter_options as $filter_option)
                        @if ($filter_option->products_count > 0)
                        <li>
                            <label>
                                <div class="brand-checker">
                                    <i class="fa fa-square" aria-hidden="true"></i>
                                </div>
                                <span title="ADATA" class="brand-checker-link">
                                    <span class="ahihi">
                                        <a class="filter-link" href="{{request()->fullUrlWithQuery([$filter->slug=>$filter_option->slug])}}"
                                            title="ADATA">{{$filter_option->name}}</a><span class="sl-sp">({{$filter_option->products_count}})</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        @endif
                        @endforeach
                        @endif

                    </ul>
                </div>
            </div>
            @endforeach
            @endif

        </div>

        <div class="cate-right">

            <div class="cate-product-list">
                <div class="cate-prod-top">
                    <div class="sort-zone">
                        <div class="float-left box-sort">
                            <select id="other_filter" onchange="location.href=this.value" class="list-sort">
                                <option value="0">Tình trạng kho hàng</option>
                                <option value="{{Request()->fullUrlWithQuery(['other_filter'=>'in-stock'])}}">Còn hàng</option>
                            </select>
                            <!-- <span>Sắp xếp theo:</span> -->
                            <select title="Sắp xếp theo" id="sort-select" class="list-sort" onchange="location.href=this.value">
                                <option value="0">Sắp xếp sản phẩm</option>

                                <option value="{{Request()->fullUrlWithQuery(['sort'=>'new'])}}">Mới nhất</option>

                                <option value="{{Request()->fullUrlWithQuery(['sort'=>'price-asc'])}}">Giá tăng dần</option>

                                <option value="{{Request()->fullUrlWithQuery(['sort'=>'price-desc'])}}">Giá giảm dần</option>

                                <option value="{{Request()->fullUrlWithQuery(['sort'=>'view'])}}">Lượt xem</option>

                                <option value="{{Request()->fullUrlWithQuery(['sort'=>'rating'])}}">Đánh giá</option>

                                <option value="{{Request()->fullUrlWithQuery(['sort'=>'name'])}}">Tên A->Z</option>

                            </select>
                        </div>
                        <div class="paging">
                        </div>
                        <div class="float-left view-sort">
                            <a href="javascript:;" onclick="setUserOption('product_display', 'grid', 'https://www.hanoicomputer.vn/pc-workstations')"
                                class="active"><i class="fa fa-th-list"></i></a>
                            <a href="javascript:;"
                                onclick="setUserOption('product_display', 'list', 'https://www.hanoicomputer.vn/pc-workstations')"><i
                                    class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>

                <div class="cate-prod-bottom cate-list-prod   ">
                    @foreach ($list_product as $product)
                    <div class="p-component item" data-id="53981">
                        <div class="p-iconPCWS114"></div>
                        <p class="p-sku">Mã SP: {{$product->code}}</p>
                        <p class="p-sku p-coupon"></p>
                        <div class="p-img">
                            <a href="/{{$product->slug}}">
                                <img class="lazy" src="https://hanoicomputercdn.com/template/may2020/images/blank.gif"
                                    data-src="{{asset($product->image)}}" alt="{{$product->name}}">
                            </a>
                        </div>
                        <div class="align-items-center d-flex flex-wrap justify-content-between my-2">
                            <img src="https://hanoicomputercdn.com/template/may2020/images/blank.gif"
                                data-src="https://hanoicomputercdn.com/media/lib/star_0.png" alt="rate" class="lazy p-rating" style="width:76px;">
                        </div>
                        <div class="p-info">
                            <h3 class="p-name"><a href="/{{$product->slug}}">{{$product->name}}</a></h3>
                            <span class="p-mprice"> {{number_format($product->price)}} đ </span>
                            <span class="p-discount">
                                <span class="noMinPrice" style="letter-spacing: -0.4px;">(Tiết kiệm:
                                    {{ceil($product->price/$product->discount*100-100)}}%)</span>
                            </span>
                            <span class="p-price js-get-minPrice">{{number_format($product->discount)}} đ</span>
                            <span class="p-haskmai"><i class="icons icon-gift"></i> </span>
                        </div>
                        <div class="p-action">
                            @if ($product->quality == 0)
                            <span class="p-qty" style="color: #0074da;"><i class="fas fa-phone fa-flip-horizontal"></i> Liên hệ</span>
                            @else
                            <span class="p-qty"><i class="fa fa-check" aria-hidden="true"></i> Còn hàng</span>
                            @endif
                        <a href="{{route('cart.add', $product->id)}}" class="p-buy">
                                Thêm vào giỏ
                            </a>
                        </div>
                        <div class="hover_content_pro tooltip-2019">
                            <a href="/{{$product->slug}}" class="hover_name">{{$product->name}}</a>
                            <table>
                                <tr>
                                    <td>- Giá bán:</td>
                                    <td>
                                        <span class="img_price_full">{{number_format($product->discount)}} đ</span>
                                        <span class="hover_vat">
                                            [Đã bao gồm VAT]
                                        </span>
                                    </td>
                                </tr>
                                <tr class="js-get-minPrice p-extend-minprice">
                                    <td>- Giá thấp nhất:</td>
                                    <td id="minPrice-53981" class="p-extend-minprice-text">{{number_format($product->discount)}} đ</td>
                                </tr>
                                <tr>
                                    <td>- Bảo hành:</td>
                                    <td>BH theo linh kiện</td>
                                </tr>
                                <tr>
                                    <td>- Kho hàng:</td>
                                    <td>
                                        <span class="dongbotonkho js-dongbotonkho dongbotonkho-53981" data-id="53981">
                                            <span class="detail " style="color: red; white-space:pre-line;"></span>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                            <span class="tooltip-title"><i class="fal fa-layer-group"></i> Thông số sản phẩm</span>
                            <div class="hover_offer ">


                                - CPU: Xeon E5-2680v3 x 2
                                <br />

                                - RAM: 64GB ECC (32GB x 2)
                                <br />

                                - Ổ cứng: 240GB SSD
                                <br />

                                - Nguồn: 700W<br />

                            </div>
                            <span class="tooltip-title"><i class="fal fa-gift"></i> Chương trình khuyến mại</span>
                            <div class="hover_offer kmai-ndung">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
    $('.js-toggleFilter').on('click',function() { 

      $(this).toggleClass('arrow-down');
      $(this).parent().find('.p-filter-list-value').slideToggle(); 

    });
  });
</script>
@endsection