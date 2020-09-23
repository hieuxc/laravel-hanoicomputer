@extends('front-end.layouts.index')

@section('css')
<link rel="stylesheet" type="text/css" href="https://hanoicomputercdn.com/template/may2020/script/otherstyle2020.css?v=53294">
<link rel="stylesheet" type="text/css" href="https://hanoicomputercdn.com/template/may2020/script/product_detail_css_2020.css?v=1" />
@endsection

@section('content')
<div class="cate-top border-0">
    <div class="container-2019">
        <div class="breadcrumb breadcrumb mb-0 p-0">
            <ul class="list-unstyled" style="margin-top: 0;" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="item">
                        <span itemprop="name">Trang chủ</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="/{{$product->category->slug}}" itemprop="item"><span><span itemprop="name">{{$product->category->name}}</span></span></a>
                    <meta itemprop="position" content="2" />
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- fancybox -->
<!--check--><a href="https://hanoicomputercdn.com/media/product/52023_17z90n_v_ah75a5_logo.png" class="fancybox view-large" rel="gallery"
    style="display:none;"></a>
<!--check--><a href="https://hanoicomputercdn.com/media/product/52023_17z90n_v_ah75a5.png" class="fancybox" rel="gallery" style="display:none;"></a>
<div class="container-2019 ">
    <div class="bg-white d-flex flex-wrap product-detail-top" style="border-radius: 3px; box-shadow: 0 0 4px 0 rgba(152,165,185,.2);">

        <div class="product_detail-header">
            <div class="product_detail-title">
                <h1>{{$product->name}}</h1>
            </div>
        </div>

        <div class="product-detail-top-left d-flex flex-wrap">
            <div class="product-detail-img">
                <div id="img_large" class="container-icon" style="position:relative;">
                    <a class="" id="js-big-image" title="Click để xem ảnh lớn"
                        onclick="Biz.Product.ImageGalleryManager.Show({Item:'52023',CurImage:'https://hanoicomputercdn.com/media/product/52023_17z90n_v_ah75a5_logo.png'})">
                        <img src="{{$product->image}}" title="Click để xem ảnh lớn" alt="{{$product->name}}" />
                    </a>
                </div>
                <ul id="img_thumb" class="list_media list-unstyled d-flex mt-2">
                    @foreach ($product->product_images as $product_image)
                    <li>
                        <a class="img_thumb js-small_img-item" href="javascript:void(0);" data-href="{{$product_image->image}}"
                            title="{{$product->name}}" rev="{{$product_image->image}}">
                            <img src="{{$product_image->image}}" alt="{{$product->name}}" />
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class=" product-detail-top-right">

            <div class="product_detail-meta">
                <div class="product_detail-sku">Mã SP: <span class="sku">{{$product->code}}</span></div>
                <div class="product_detail-separator"></div>
                <a href="javascript:;" data-id="#tab5" onclick="scrollToDiv('#tab5');" class="product_detail-star js-scroll-to"></a>
                <a href="javascript:;" onclick="scrollToDiv('#tab5');" data-id="#tab5" class="count-rate js-scroll-to">0 nhận xét</a>
                <div class="product_detail-separator"></div>
                <div class="product_detail-view-counter">Lượt xem: <span class="counter-number">{{$product->view}}</span></div>
                <div class="product_detail-separator"></div>
                <div class="fb-like"
                    data-href="https://www.hanoicomputer.vn/laptop-lg-gram-17z90n-v-ah75a5-i7-1065g7-8gb-ram-512gb-ssd-17-inch-ips-fp-win-10-home-plus-xam-bac-model-2020"
                    data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
            </div>
            <div class="product_detail-top-right-below">
                <div class="product-detail-info">
                    <div class="product-summary-item" style="border-bottom: 1px solid #e1e1e1;">
                        <div class="product-summary-item-title" style="font-weight: 700">Thông số sản phẩm</div>
                        {!!$product->description!!}
                        <a href="javascript:" class="viewmoretskt" data-content="#js-tskt-item">Xem đầy đủ <i class="fa fa-caret-down"></i></a>
                    </div>



                    <div class="product-summary-item">
                        <div class="product-summary-item-title">Bảo hành: <b class="red">{{$product->warranty}}</b></div>
                    </div>
                    <div id="product-info-price" class="d-flex flex-wrap justify-content-between">
                        <div class="">
                            <table style="width:100%; border-radius: 5px; padding: 10px 20px;">
                                <tbody>
                                    <tr>
                                        <td>Giá thị trường:</td>
                                        <td style="position:relative;"><b class="" style="text-decoration: line-through;font-size: 24px;color: #666;">
                                                {{number_format($product->price)}} đ </b></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 150px;">Giá khuyến mại:</td>
                                        <td style="position:relative;"><b id="p-info-price" class="text-24"> {{number_format($product->discount)}} đ
                                            </b>
                                            <span class="percent red">(Tiết kiệm {{number_format($product->price - $product->discount)}}đ)</span>
                                            <span>[Giá đã có VAT]</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="button_buy_2019" class="d-flex flex-wrap justify-content-start">
                        <div class="top-buttons-th1">
                            <a style="" href="javascript:;" onclick="listenBuyPro('52023',0,1,'','/cart')" class="mua-ngay th1">
                                <span>Đặt mua ngay</span> Giao hàng tận nơi nhanh chóng
                            </a>
                        </div>
                        <div class="bottom-buttons-th1">
                            <a href="javascript:;" onclick="listenBuyPro('52023',0,1,'','')" class="them-vao-gio th1">
                                <span>Thêm vào giỏ hàng</span> Thêm vào giỏ để chọn tiếp
                            </a>
                            <a href="javascript:void(0)" onclick="listenBuyPro('52023',0,1,'','/cart?show=tragop&type=cart')" class="tra-gop th1">
                                <span>Mua trả góp</span>Lãi suất 0% qua thẻ tín dụng
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-detail-static-content">
                    <div class="static-item">
                        <div class="title title-gradient">
                            Thông tin kho hàng
                        </div>
                        <div class="static-nd" style="padding-top: 12px">
                            <span class="d-block font-weight-bold ml-2" style="margin-left: 10px"> Hàng đang có tại các chi nhánh::</span>
                            <ul class="m-0 d-flex align-items-center flex-wrap js-khohangtonkho list-unstyled pl-2" style="margin-top: 0">
                            </ul>
                        </div>
                    </div>
                    <div class="static-item san-pham-chung">
                        <div class="title">
                            <i class="fas fa-money-bill-wave"></i> yên tâm mua hàng
                        </div>
                        <div class="static-nd">
                            <ul class="m-0 d-flex align-items-center flex-wrap list-unstyled pl-2">
                                <li>
                                    - <span style="color: #212529">TOP 3 Nhà bán lẻ IT lớn nhất Việt Nam</span>
                                </li>
                                <li>
                                    - <a style="color: #212529" href="https://www.hanoicomputer.vn/chinh-sach-hang-chinh-hang">Sản phẩm chính
                                        hãng 100%</a>
                                </li>
                                <li>
                                    - <a style="color: #212529" href="https://thongtin.hanoicomputer.vn/chinh-sach/chinh-sach-doi-tra-hang/">Đổi trả
                                        hàng miễn phí
                                        trong 3 ngày</a>
                                </li>
                                <li>
                                    - <span style="color: #212529">Nhận hàng trước trả tiền sau</span>
                                </li>
                                <li style="width: 100%">
                                    - <span style="color: #212529">Thanh toán linh hoạt</span>
                                </li>
                                <li>
                                    - <a style="color: #212529" href="https://www.hanoicomputer.vn/huong-dan-mua-hang-tra-gop">Mua hàng trả
                                        góp lãi suất 0%</a>
                                </li>
                                <li>
                                    - <a style="color: #212529" href="https://www.hanoicomputer.vn/chinh-sach-bao-hanh">Trả bảo hành tận nơi
                                        sử dụng</a>
                                </li>
                                <li>
                                    - <a style="color: #212529" href="https://www.hanoicomputer.vn/chinh-sach-cho-doanh-nghiep">Bảo hành tận
                                        nơi cho doanh nghiệp</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="static-item">
                        <div class="title">
                            <i class="fas fa-shipping-fast"></i> Chính sách giao hàng
                        </div>
                        <div class="static-nd">
                            <ul class="m-0 d-flex align-items-center flex-wrap list-unstyled pl-2">
                                <li>
                                    - Giao hàng toàn quốc
                                </li>
                                <li>
                                    - Giao hàng trước trả tiền sau COD
                                </li>
                                <li>
                                    - Miễn phí giao hàng (bán kính 20km) với đơn hàng trên 500.000 đ
                                </li>
                                <li>
                                    - Miễn phí giao hàng 300km với khách hàng Games Net, Doanh Nghiệp, Dự Án
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end  product-detail-top-right -->
    </div>
    <div class="clearfix space30"></div>

    <div class="d-flex flex-wrap mt-4 product-detail-bottom">
        <div class="container-2020" style="width: 100%">
            <div class="left-column">
                <div class="content_scroll_tab_2019 bg-white" id="tab1" style="border-radius: 3px;">
                    <div class="nd title_box_scroll_content_2019 showmore">
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="content_scroll_tab_2019" id="tab2">
                    <div class="nd title_box_scroll_content_2019">
                        <h2 class="tskt-title spct-title">Thông số kỹ thuật</h2>
                        <div class="bang-tskt">
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <p>M&ocirc; tả chi tiết</p>
                                        </td>
                                    </tr>
                                    @foreach ($product_type->specifications as $specification)
                                    @if (isset($product->specifications[$specification->id]))
                                    <tr>
                                        <td>
                                            <p>{{$specification->name}}</p>
                                        </td>
                                        <td>
                                            <p>{{$product->specifications[$specification->id]}}</p>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="xem-them-tskt"><a class="xem-them-tskt-button" href="javascript:void(0)" onclick="showPopup('popup-tskt');">Xem
                                thêm cấu hình chi tiết</a></div>
                    </div>

                </div>

                <div class="popup-common popup-tskt" id="popup-tskt">
                    <div class="title-popup">
                        <h3>Thông số kỹ thuật chi tiết Laptop LG Gram 17Z90N-V.AH75A5 (i7 1065G7/8GB RAM/512GB SSD/17inch IPS/FP/Win 10 Home
                            Plus/Xám Bạc) (model 2020)</h3><i class="close fal fa-times" onclick="closePopupCommon()"></i>
                    </div>
                    <div class="content-popup">
                        <div class="bang-tskt">
                            <table>
                                <tbody>
                                    @foreach ($product_type->specifications as $specification)
                                    @if (isset($product->specifications[$specification->id]))
                                    <tr>
                                        <td>
                                            <p>{{$specification->name}}</p>
                                        </td>
                                        <td>
                                            <p>{{$product->specifications[$specification->id]}}</p>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--content-popup-->
                </div>
                <!--popup-->

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://hanoicomputercdn.com/template/may2020/script/magiczoom.css?v=2" type="text/css" />
<script type="text/javascript" src="https://hanoicomputercdn.com/template/may2020/script/magiczoom.js?v=3"></script>
<script type="text/javascript">
    MagicZoom.options = { 
    'selectors-change' : 'click',
    'right-click' : true,
    'disable-zoom' : false,
    'fit-zoom-window':false,
    'zoom-width' : 300,
    'zoom-height' : 300
    }
    $(".js-small_img-item").click(function(){
      var src = $(this).attr("data-href");
      $("#js-big-image img").attr("src",src)
    });
      // $(".fancybox").fancybox();
      
      // $("#img_large .MagicZoom").click(function(){
      //     $(".view-large").click();
      // });
    
    
    var scrollToDiv = (id) => {
            if (id.length) {
            //event.preventDefault();
    
              //$('html, body').animate({
              //scrollTop: $(id).offset().top
              //}, 1000)
    
              window.scroll({
              top: $(id).offset().top, 
              left: 0, 
              behavior: 'smooth'
              });
            }
    };
</script>
@endsection