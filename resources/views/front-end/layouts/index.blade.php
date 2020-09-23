<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- meta mac dinh  -->
    <title>HANOICOMPUTER - HI-END COMPUTER WORLD</title>
    <meta name="description"
        content="Công ty Cổ Phần Máy Tính Hà Nội - Siêu thị máy tính, Laptop, linh phụ kiện máy tính, PC Gaming, Gaming Gear, Workstations, Console, Thiết bị Siêu Thị, Văn Phòng, Thiết bị An Ninh" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="Máy tính Hà nội, Hanoicomputer, Siêu thị máy tính, Laptop, linh phụ kiện máy tính, PC Gaming, Gaming Gear, Workstations, Console, Thiết bị Siêu Thị, Văn Phòng, Thiết bị An Ninh" />
    <meta property="fb:app_id" content="1033127020153903" />
    <meta property="fb:admins" content="100001129488733" />
    <meta content="DOCUMENT" name="RESOURCE-TYPE" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

    <link rel="shortcut icon" href="/template/may2020/images/favicon.png" type="image/x-icon" />

    <meta property="og:title" content="HANOICOMPUTER - HI-END COMPUTER WORLD" />
    <meta property="og:description"
        content="Công ty Cổ Phần Máy Tính Hà Nội - Siêu thị máy tính, Laptop, linh phụ kiện máy tính, PC Gaming, Gaming Gear, Workstations, Console, Thiết bị Siêu Thị, Văn Phòng, Thiết bị An Ninh" />
    <meta property="og:url" content="https://www.hanoicomputer.vn/" />
    <meta property="og:image" content="https://hanoicomputercdn.com/media/banner/logo_Logo_2019.png" />
    <meta property="og:image:alt" content="HANOICOMPUTER - HI-END COMPUTER WORLD" />

    <link rel="stylesheet" href="https://hanoicomputercdn.com/template/may2020/script/style2020.css?v=583535" />
    @yield('css')
    <link rel="stylesheet" href="https://hanoicomputercdn.com/template/may2020/script/media2020.css?v=44" />
    <!-- css cho trang buildpc, tan nhiet -->

    <link rel="stylesheet" href="https://www.hanoicomputer.vn/template/default/script/all.css?v=1" type="text/css" />

    <script src="https://hanoicomputercdn.com/template/may2020/script/jquery224.js"></script>

</head>

<body>

    @include('front-end.layouts.popup')
    @include('front-end.layouts.header')

    <div class="body-new-2019">
        @yield('content')
    </div>

    @include('front-end.layouts.footer')




    @yield('js')
    <script src="https://hanoicomputercdn.com/javascript/dist/vendors.js?v=1"></script>
    <script src="https://hanoicomputercdn.com/javascript/dist/hurasoft.js?v=1"></script>
    <script src="https://hanoicomputercdn.com/javascript/dist/hurastore.js?v=3"></script>

    <link href="https://hanoicomputercdn.com/template/may2020/script/owlcarousel.css?v=343.34444444" rel="stylesheet" type="text/css" />
    <link href="https://hanoicomputercdn.com/template/may2020/script/owl.theme.default.min.css?v=5" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <script src="https://hanoicomputercdn.com/template/may2020/script/lazyload.js?v=1"></script>
    <script src="https://hanoicomputercdn.com/includes/js/base64.js?v=1"></script>
    <script src="https://hanoicomputercdn.com/includes/js/common.js?v=1"></script>

    <script src="https://hanoicomputercdn.com/template/may2020/script/common.js?v=5"></script>
    <script src="https://hanoicomputercdn.com/template/may2020/script/webworker.js?v=2"></script>
    <script src="https://hanoicomputercdn.com/template/may2020/script/hnc_custom.js?v=1.0.30"></script>
    <script>
        // convert url in plain text to a link
        function urlify(text) {
            if (text == "undefined") {
                return;
            }

            var urlRegex = /(https?:\/\/[^\s]+)/g;
            return text.replace(urlRegex, function (url) {
                return '<a href="' + url + '">' + url + "</a>";
            });
        }
    </script>

    <script>
        var lazyloader = new LazyLoad({
            elements: ".lazy"
        });

        var khohang_url =
            "/ajax/hanoipc.php?action=product-store-status&ids=";
        var product_template = `<div class="p-component" data-id="{%= item.productId %} ">
                  <div class="p-icon{%= item.productSKU %}"></div>
                <p class="p-sku">Mã SP: {%= item.productSKU %}</p>
                  <div class="p-img">
                     <a href="{%= item.productUrl %}"> 
                       <img src="{%= item.productImage.large %}" alt={%= item.productName %}"">
                     </a>
                  </div>

                  <div class="p-info">
                    <h3 class="p-name"><a href="{%= item.productUrl %}"> {%= item.productName %} </a></h3>
                    <span class="p-mprice"> {%= item.formatMarketPrice %} </span>
                    <span class="p-discount"> {%= item.discount %}</span>
                    <span class="p-price"> {%# item.minPrice %} </span>

                    <p class="p-online">{%= item.saleOnline %}</p>
                    
                    {%# item.coKmai %}
                
                  </div>
                  <div class="p-action">
                    {%# item.khohang %}
                    
                    <a href="javascript:void(0)" onclick="listenBuyPro({%= item.productId %},0,1,'')" data-id="{%= item.productId %}" class="p-buy js-buyNowAjax">  Thêm vào giỏ</a>
                  </div>

                  <div class="hover_content_pro tooltip-2019">
                      <a href="{%= item.productUrl %}" class="hover_name">{%= item.productName %}</a>
                      {%# item.anhThuongHieu %}
                      <table>
                          <tr>
                            <td>- Giá bán:</td>
                            <td>
                              <span class="img_price_full"> {%= item.formatPrice %} </span>
                              <span class="hover_vat">
                                {%= item.checkVAT %}
                              </span>
                            </td>
                          </tr>
                          <tr class="p-extend-minprice">
                              <td>- Giá thấp nhất:</td>
                              <td class="p-extend-minprice-text">
                                  <span class="min_price"> {%= item.minPrice %}</span>
                              </td>
                          </tr>
                          <tr><td>- Bảo hành:</td><td>{%= item.warranty %}</td></tr>
                          <tr>
                            <td>- Kho hàng:</td>
                            <td>
                             
                                <span class="dongbotonkho js-dongbotonkho dongbotonkho-{%= item.productId %}" data-id="{%= item.productId %}">
                                  <!-- <span>Liên hệ </span><br/> -->
                                  <span class="detail " style="color: red; white-space:pre-line;">
                                     
                                  </span>
                                </span>
                             
                            </td>
                          </tr>
                          
                        </table>
                        {%# item.hoverSummary %}
                        {%# item.hoverKmai %}
                  </div>
                </div>`;

        function listenBuyPro(
            product_id,
            variant_id,
            quantity,
            buyer_note,
            redirect
        ) {
            var product_prop = {
                quantity: quantity,
                buyer_note: buyer_note
            };

            Hura.Cart.Product.add(
                product_id,
                variant_id,
                product_prop
            ).then(function (response) {
                if (response.status === "error") {
                    console.log(
                        "Lỗi thêm sản phẩm vào giỏ hàng: error_type = " +
                        response.error_type
                    );
                } else {
                    //hien thi tom tat
                    showCartSummary();

                    if (redirect) {
                        location.href = redirect;
                    } else {
                        alert("Đã thêm sản phẩm vào giỏ hàng");
                    }
                }
            });
        }

        function clickPlayVideo(holder) {
            if (holder.length) {
                $(holder).on("click", function () {
                    let videoUrl = $(this).attr("data-url");
                    let w = $(this).attr("data-width");
                    let h = $(this).attr("data-height");
                    $(this).html(
                        '<iframe allowfullscreen frameborder="0" class="lazy" src="' +
                        videoUrl +
                        '" width="' +
                        w +
                        '" height="' +
                        h +
                        '"></iframe>'
                    );
                    $(this).toggleClass("played");
                });
            }
        }

        function ajaxSlider(holder) {
            $(holder).owlCarousel({
                items: 5,
                margin: 0,
                loop: false,
                nav: true,
                autoplay: false,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    1650: {
                        items: 6
                    }
                },
                navText: [
                    '<i class="fal fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fal fa-angle-right" aria-hidden="true"></i>'
                ]
            });
        }

        function isOnScreen(elem) {
            // if the element doesn't exist, abort
            if (elem.length == 0) {
                return;
            }
            var $window = jQuery(window);
            var viewport_top = $window.scrollTop();
            var viewport_height = $window.height();
            var viewport_bottom = viewport_top + viewport_height;
            var $elem = jQuery(elem);
            var top = $elem.offset().top;
            var height = $elem.height();
            var bottom = top + height;

            return (
                (top >= viewport_top && top < viewport_bottom) ||
                (bottom > viewport_top && bottom <= viewport_bottom) ||
                (height > viewport_height &&
                    top <= viewport_top &&
                    bottom >= viewport_bottom)
            );
        }

        function laythuonghieunoibat(holder, limit) {
            var urlAjax =
                "/ajax/get_json.php?action=brand&action_type=featured-list&show=" +
                limit;

            Hura.Ajax.get("brand", {
                action_type: "featured-list",
                show: limit
            }).then(function (data) {
                var result = JSON.parse(data);
                var listBrand = result.list;
                var html = "";
                listBrand.forEach(function (item, index) {
                    var brand_name = item.name;
                    var brand_image = item.image;
                    var brand_url = item.url;
                    html +=
                        '<a href="' +
                        brand_url +
                        '"><img src="' +
                        brand_image +
                        '" alt="' +
                        brand_name +
                        '"/> </a>';
                });
                $(holder).html(html);
            });
        }

        function laySpMoi(holder) {
            let objProduct = new Hura.ShowDataList();
            let ajax_url =
                "/ajax/get_json.php?action=product&type=new&limit=20&sort=order";
            objProduct.setUp(ajax_url, product_template, function (
                data_list
            ) {
                var item_list = transformProductList(data_list["list"]);

                return item_list;
            });
            objProduct.show(holder);
            console.log("lay sp moi chay xong !");
        }

        function laySpHotDanhMucNoiBat(id) {
            console.log("laySpHotDanhMucNoiBat ..." + id);
            //var ajax_product = "/ajax/get_json.php?action=product&type=&limit=20&show=30&sort=order&category=";
            Hura.Ajax.get("product", {
                type: "",
                show: 30,
                category: id,
                sort: "order"
            }).then(function (data) {
                let response = JSON.parse(data);
                let item_list = transformProductList(response.list);
                if (response.total > 0) {
                    var html = Hura.Template.parse(
                        product_template,
                        item_list
                    );
                    Hura.Template.render("#featured-cate-" + id, html);

                    // $(".js-productslide-cate" + id).addClass('owl-carousel owl-theme') ;
                    ajaxSlider(".js-productslide-cate" + id);

                    if (
                        $("#boxcate-" + id + " .p-component").hasClass(
                            "loaded"
                        ) == false
                    ) {
                        layicon("#boxcate-" + id + " .p-component");
                    }
                }
            });
        }

        function layGiaNhoNhat(data, price) {
            var extend_price = [price];
            Object.keys(data).forEach(function (item) {
                if (parseInt(data[item]) > 0) {
                    extend_price.push(data[item].split(".").join(""));
                }
            });
            var minPrice = Math.min.apply(Math, extend_price);
            return minPrice;
        }

        function transformProductList(item_list) {
            return item_list.map(function (item) {
                return transformProductItem(item);
            });
        }

        function transformProductItem(product_info) {
            var new_info = jQuery.extend({}, product_info);
            //console.log(new_info);

            if (product_info.price === 0) {
                new_info["minPrice"] = "Liên hệ ";
            } else {
                new_info["minPrice"] =
                    formatCurrency(
                        layGiaNhoNhat(
                            product_info.extend,
                            product_info.price
                        )
                    ) + "đ";
            }

            new_info["formatPrice"] =
                product_info.price > 0
                    ? formatCurrency(product_info.price) + "đ"
                    : "Liên hệ !";

            new_info["formatMarketPrice"] =
                product_info.marketPrice > 0
                    ? formatCurrency(product_info.marketPrice) + "đ"
                    : " ";
            new_info["saleOnline"] =
                product_info.productType["online-only"] != 0
                    ? "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>Chỉ áp dụng đặt hàng online"
                    : " ";
            new_info["discount"] =
                product_info.marketPrice > 0
                    ? "(Tiết kiệm: " +
                    Math.round(
                        100 -
                        (layGiaNhoNhat(
                            product_info.extend,
                            product_info.price
                        ) *
                            100) /
                        product_info.marketPrice
                    ) +
                    "% )"
                    : "";

            new_info["khohang"] =
                product_info.quantity > 0 || product_info.quantity == -6
                    ? "<span class='p-qty'><i class='fa fa-check' aria-hidden='true'></i> Còn hàng  </span>"
                    : "<span style='color: #0074da;' class='qty'><i class='fas fa-phone fa-flip-horizontal'></i> Liên hệ</span>";

            new_info["coKmai"] =
                product_info.specialOffer.all.length > 0
                    ? "<span class='p-haskmai'><i class='icons icon-gift'></i> </span>"
                    : " ";

            new_info["anhThuongHieu"] =
                product_info.brand.image != "" ? "" : " ";

            new_info["checkVAT"] =
                product_info.hasVAT == 1
                    ? "[Đã bao gồm VAT]"
                    : "[Chưa bao gồm VAT]";

            if (product_info.productSummary) {
                new_info["hoverSummary"] =
                    "<span class='tooltip-title'><i class='fal fa-layer-group'></i> Thông số sản phẩm</span><div class='hover_offer'>";

                var splitSummary = product_info.productSummary.split("\n");

                splitSummary.forEach(function (value, item) {
                    if (item < 5)
                        new_info["hoverSummary"] +=
                            "- " + splitSummary[item] + "<br>";
                });

                new_info["hoverSummary"] += "</div>";
            } else new_info["hoverSummary"] = " ";

            if (product_info.specialOffer.all.length > 0) {
                new_info["hoverKmai"] =
                    "<span class='tooltip-title'><i class='fal fa-gift'></i> Chương trình khuyến mại</span><div class='hover_offer kmai-ndung'>";

                var splitKmai = product_info.specialOffer.all;
                splitKmai.forEach(function (value, item) {
                    new_info["hoverKmai"] += splitKmai[item].title + "<br>";
                });

                new_info["hoverKmai"] += "</div>";
            } else new_info["hoverKmai"] = " ";

            return new_info;
        }

        function open_oauth(service) {
            window.open(
                "/login_oauth.php?service=" +
                service +
                "&return_url=https://www.hanoicomputer.vn/",
                "Login_OAuth",
                "width=600, height=500"
            );
        }

        function subscribe_newsletter() {
            var email = document.getElementById("email_newsletter").value;
            if (email.length > 3) {
                $.post(
                    "/ajax/post.php",
                    {
                        action: "customer",
                        action_type: "register-for-newsletter",
                        full_name: "Khách hàng nhận bản tin",
                        email: email
                    },
                    function (data) {
                        if (data == "success") {
                            alert("Quý khách đã đăng ký thành công ");
                            $("#email_newsletter").val(
                                "Nhập Email nhận bản tin"
                            );
                        } else if (data == "exist") {
                            alert("Email này đã tồn tại");
                        } else {
                            alert("Lỗi xảy ra, vui lòng thử lại ");
                        }
                    }
                );
            } else {
                alert("Vui lòng nhập địa chỉ email");
            }
        }

        function downloadCartImage() {
            var print_url =
                "https://www.hanoicomputer.vn/print/user.php?view=cart-new&uid=" +
                Hura.User.getUserId();

            window.location =
                "https://www.hanoicomputer.vn/tools/screenshot/screenshot.php?url=" +
                encodeURIComponent(print_url);
        }

        function detectPaste(textarea, callback) {
            textarea.onpaste = function () {
                var sel = getTextAreaSelection(textarea);
                var initialLength = textarea.value.length;
                window.setTimeout(function () {
                    var val = textarea.value;
                    var pastedTextLength =
                        val.length - (initialLength - sel.length);
                    var end = sel.start + pastedTextLength;
                    callback({
                        start: sel.start,
                        end: end,
                        length: pastedTextLength,
                        text: val.slice(sel.start, end)
                    });
                }, 1);
            };
        }

        function search(inputString) {
            var htmlResult = "<div class='list'>";
            if (inputString.trim() != "") {
                urlSearch =
                    "/ajax/get_json.php?action=search&content=product&q=" +
                    encodeURIComponent(inputString);

                $.getJSON(urlSearch, function (result) {
                    var data = result;
                    data.forEach(function (item) {
                        var price = Hura.Util.writeStringToPrice(
                            item.price
                        );
                        if (price != 0) price = price + " đ";
                        else price = "Liên hệ !";

                        htmlResult += '<a href="' + item.productUrl + '">';
                        htmlResult +=
                            '<img src="' +
                            item.productImage.medium +
                            '" alt="' +
                            item.productName +
                            '" />';
                        htmlResult += '<span class="info">';
                        htmlResult +=
                            '<span class="name">' +
                            item.productName +
                            "</span>";
                        htmlResult +=
                            '<span class="price">' + price + "</span>";
                        htmlResult += "</span>";
                        htmlResult += "</a>";
                    });
                    htmlResult += "</div>";
                    $(".autocomplete-suggestions").html(htmlResult);
                    $(".autocomplete-suggestions").show();
                });
            } else {
                $(".autocomplete-suggestions").hide();
            }
        }

        function getMinPrice(holder) {
            var data = [];
            var marketPrice = $(holder).attr("data-marketPrice");
            var price = $(holder).attr("data-price");

            data.push(price);

            var id = $(holder).attr("data-prodId");

            var price_1 = $(holder).attr("data-extend-price1");
            if (price_1 != "" && price_1 != "0") {
                data.push(parseInt(price_1.split(".").join("")));
            }

            var price_2 = $(holder).attr("data-extend-price2");
            if (price_2 != "" && price_2 != "0") {
                data.push(parseInt(price_2.split(".").join("")));
            }
            var price_3 = $(holder).attr("data-extend-price3");
            if (price_3 != "" && price_3 != "0") {
                data.push(parseInt(price_3.split(".").join("")));
            }

            var minPrice = Math.min.apply(Math, data);

            console.log(minPrice + "-" + id);
            if (minPrice != 0) {
                $("#minPrice-" + id).html(formatCurrency(minPrice) + "đ");
                $("#minPrice-" + id + "-1").html(
                    formatCurrency(minPrice) + "đ"
                );
                if (marketPrice > 0) {
                    var discount =
                        "(Tiết kiệm: " +
                        Math.round(100 - (minPrice * 100) / marketPrice) +
                        "% )";
                    $("#p-discount-" + id).html(discount);
                }
            } else {
                $("#minPrice-" + id).html(formatCurrency(price) + "đ");
                $("#minPrice-" + id + "-1").html(
                    formatCurrency(price) + "đ"
                );
                if (marketPrice > 0) {
                    var discount =
                        "(Tiết kiệm: " +
                        Math.round(100 - (price * 100) / marketPrice) +
                        "% )";
                    $("#p-discount-" + id).html(discount);
                }
            }
        }

        function layIdsp(holder) {
            var id_sp = [];
            $(holder).each(function () {
                id_sp.push($(this).attr("data-id"));
            });
            return id_sp;
        }

        function layicon(holder) {
            var id = layIdsp(holder).join(",");
            Hura.Ajax.get("marketing-product-offer", {
                action_type: "",
                ids: id
            }).then(function (data) {
                $.each(JSON.parse(data), function (i, field) {
                    var code = field["promo_code"];
                    var sku = field["sku"].trim();
                    $(".p-icon" + sku).prepend(
                        "<span class='" + code + "'></span>"
                    );
                });
            });
            $(holder).addClass("loaded");
        }

        function showCartNotify() {
            $("#cart-fixed-2019").addClass("hover");
            setTimeout(function () {
                $("#cart-fixed-2019").removeClass("hover");
            }, 2000);
        }

        // var SHOW_CART_SUMMARY_NODE = "#count_shopping_cart_store";
        // function showCartSummary() {
        //     Hura.Cart.getSummary().then(summary => {
        //         var $status_container = $(SHOW_CART_SUMMARY_NODE);
        //         //console.log("cart_summary = " + JSON.stringify(summary, true, 4));
        //         $status_container.html(summary.total_item);
        //     });
        // }

        // function addProductToCart(
        //     product_id,
        //     variant_id,
        //     quantity,
        //     buyer_note
        // ) {
        //     var product_prop = {
        //         quantity: quantity,
        //         buyer_note: buyer_note
        //     };

        //     return Hura.Cart.Product.add(
        //         product_id,
        //         variant_id,
        //         product_prop
        //     );
        // }

        function buyButton(product_id, variant_id, quantity, redirect) {
            if (!Hura.Cart.isReady()) alert("Cart chua san sang!");
            var product_id = product_id;
            var variant_id = variant_id;
            var buyer_note = "";
            var quantity = quantity;

            var addStatus = addProductToCart(
                product_id,
                variant_id,
                quantity,
                buyer_note
            );
            if (addStatus) {
                addStatus.then(function () {
                    console.log(
                        "cart content = " +
                        JSON.stringify(Hura.Cart.getCart(), true, 4)
                    );
                    showCartSummary();

                    if (typeof redirect === "undefined") {
                        alert("Đã thêm sản phẩm vào giỏ hàng");
                        showCartNotify();
                    } else if (redirect == "cart") {
                        location.href = "/cart";
                    } else if (redirect == "payinstall") {
                        location.href = "/cart?show=tragop&type=cart";
                    }
                });
            } else {
                console.log(
                    "cart content = " +
                    JSON.stringify(Hura.Cart.getCart(), true, 4)
                );
                Hura.Cart.goToCartPage();
            }
        }

        $(document).ready(function (e) {
            showCartSummary();

            //click play video
            clickPlayVideo(".youtube-video-place");

            //toggle bans hangf trujc tuyenes - 26101029
            $("#hnc-saleonline .h0nline-title-tab .hotline-title").hover(
                function () {
                    var h0nline_id = $(this).attr("data-id");

                    //31102019
                    $(
                        "#hnc-saleonline .h0nline-title-tab .hotline-title"
                    ).removeClass("hovered");
                    $(this).addClass("hovered");

                    $("#hnc-saleonline .h0nline-item .hotline-wrap").css(
                        "display",
                        "none"
                    );

                    $("#" + h0nline_id).css("display", "block");
                }
            );

            //search
            var curr_text = "";
            var count_select = 0;
            var curr_element = "";

            $(".main-search .select .item").click(function () {
                var value = $(this).attr("data-value");
                var text = $(this).text();

                $(".main-search input[name='scat_id']").val(value);
                $(".main-search .select .title").text(text);
                $(".main-search .select .content").hide();
            });

            //layicon kmai
            if ($(".p-component").hasClass("loaded") == false) {
                layicon(".p-component");
            }
            // $("#js-cart-hover").hover(function () {
            //     $("#get_item_cart").load("/cart?type=ajax");
            // });
            $(window).scroll(function () {
                //gotoTop
                if ($(window).scrollTop() > 0) $("#toTop").fadeIn();
                else $("#toTop").fadeOut();

                //fixed header
                if ($(window).scrollTop() > 635) {
                    $(".header-2019").addClass("fixed");
                    $(".body-new-2019").css("padding-top", 153);
                } else {
                    $(".header-2019").removeClass("fixed");
                    $(".body-new-2019").css("padding-top", 0);
                }
            });

            $("#toTop").click(function () {
                $("html,body").animate({ scrollTop: 0 }, 800);
            });

            //hienthi gia nho nhat
            $(".p-component").each(function () {
                var holder = $(this).find(".js-get-minPrice");
                getMinPrice(holder);
            });
        });
    </script>
    <!-- 812019 menu -->

    <script>
        function layFilter(id) {
            //var filter_url = "/ajax/get_json.php?action=category&action_type=filter&id=" + id;

            Hura.Ajax.get("category", {
                action_type: "filter",
                id: id
            }).then(function (data) {
                var locgia = hienthilocgia(
                    data.price,
                    ".dmuc-filter-price-" + id
                );

                var boloc = hienthilboloc(
                    data.filter,
                    ".dmuc-filter-attr-" + id
                );
            });
        }

        function hienthilocgia(data, holder) {
            var html = "";
            if (data.length == 0) return (html = " ");
            data.forEach(function (item, value) {
                html +=
                    "<div class='item-sub'><div class='position-relative'><a href=" +
                    item.url +
                    " title=" +
                    item.name +
                    ">" +
                    item.name +
                    "</a></div></div>";
            });
            $(holder).html(html);
        }

        function hienthilboloc(data, attrName, holder) {
            var html = "";

            Object.keys(data).forEach(function (key, keyIndex) {
                if (data[key].attributeName == attrName) {
                    data[key].filterList.forEach(function (
                        filterItem,
                        index
                    ) {
                        html += hienthitruongloc(filterItem);
                    });
                }
            });

            $(holder).html(html);
        }

        function hienthitruongloc(filterAttr) {
            var child_html = "";

            child_html +=
                "<div class='item-sub'><div class='position-relative'><a href=" +
                filterAttr.url +
                " title=" +
                filterAttr.name +
                ">" +
                filterAttr.name +
                "</a></div></div>";

            return child_html;
        }

        var _cache_hover = {};
        function showHtmlOnHover(tpl_file, node_id, status) {
            if (!tpl_file || !node_id) {
                console.log(
                    "showHtmlOnHover error: không thấy tpl hoặc node_id"
                );
                return;
            }
            $(".js-header-template").css("display", "none");
            var ajax_url = "/ajax/render_html.php?tpl=" + tpl_file;
            var $display_node = $("#" + node_id);

            var current_mode = $display_node.css("display");
            // hide on hover out
            if (status != 1) {
                $display_node.css("display", "none");
                return;
            } else {
                if (tpl_file.indexOf("menu_cat") > -1)
                    $("#menu-2019 .sub_nav").css("display", "none");
                $display_node.css("display", "block");
            }

            if (_cache_hover.hasOwnProperty(tpl_file)) {
                console.log("Hiển thị từ cache!");
                $display_node.html(_cache_hover[tpl_file]);
                if (node_id == "js-ban_hang_truc_tuyen") {
                    //toggle bans hangf trujc tuyenes - 26101029
                    $(
                        "#js-ban_hang_truc_tuyen .h0nline-title-tab .hotline-title"
                    ).hover(function () {
                        var h0nline_id = $(this).attr("data-id");

                        //31102019
                        $(
                            "#js-ban_hang_truc_tuyen .h0nline-title-tab .hotline-title"
                        ).removeClass("hovered");
                        $(this).addClass("hovered");

                        $(
                            "#js-ban_hang_truc_tuyen .h0nline-item .hotline-wrap"
                        ).css("display", "none");

                        $("#" + h0nline_id).css("display", "block");
                    });
                }
            } else {
                $display_node.html("Đang tải...");
                $.get(ajax_url, function (content) {
                    _cache_hover[tpl_file] = content;
                    $display_node.html(content);

                    if (node_id == "js-ban_hang_truc_tuyen") {
                        //toggle bans hangf trujc tuyenes - 26101029
                        $(
                            "#js-ban_hang_truc_tuyen .h0nline-title-tab .hotline-title"
                        ).hover(function () {
                            var h0nline_id = $(this).attr("data-id");

                            //31102019
                            $(
                                "#js-ban_hang_truc_tuyen .h0nline-title-tab .hotline-title"
                            ).removeClass("hovered");
                            $(this).addClass("hovered");

                            $(
                                "#js-ban_hang_truc_tuyen .h0nline-item .hotline-wrap"
                            ).css("display", "none");

                            $("#" + h0nline_id).css("display", "block");
                        });
                    }
                });
            }
        }

        $(document).ready(function () {
            $(".js-hover-menu")
                .mouseenter(function () {
                    showHtmlOnHover(
                        $(this).data("tpl"),
                        $(this).data("display-node"),
                        1
                    );
                })
                .mouseleave(function () {
                    showHtmlOnHover(
                        $(this).data("tpl"),
                        $(this).data("display-node"),
                        0
                    );
                });

            //$(".js-hover-menu").hover(function(){

            //showHtmlOnHover($(this).data('tpl'), $(this).data('display-node'));

            /*
      let filter_data = {
          'price' : '',
          'attr' : []
      }
 
      let menuid = $(this).attr('data-id') ;
 
      let filterHOder = $(this).children('.sub_nav').find('.js-filter-cate')
 
      var filter_url = "/ajax/get_json.php?action=category&action_type=filter&id=" + menuid;
 
      Hura.Ajax.get('category', { action_type: 'filter', id: menuid })
          .then(function(data){
 
              if($(this).hasClass('loaded')==false) {
                  if(filterHOder!='undefined'){
 
                      filterHOder.each(function(index,item){
                          let filterName = $(this).attr('data-filter');
                          if(filterName==='price'){
                              //filter_data['price'] =filterName;      
                              hienthilocgia(data.price,$(this).find('.js-filter-holder'));
 
                          } else hienthilboloc(data.filter,filterName,$(this).find('.js-filter-holder'));
 
                      })
 
                      //console.log(filter_data);
                      //layFilter(menuid,filter_data);
 
 
                  }
                  $(this).addClass('loaded');
              }
          });
 
*/

            //})
        });
    </script>

    <!---//script hien thi homepage-->

    <script>
        //var ajax_product = "/ajax/get_json.php?action=product&type=&limit=20&show=30&sort=order&category=";
        var featured_categories = [];
        var track_category_loaded = {};
        var track_category_finished = {};
            //var track_sp_moi = {} ;
    </script>

    <script>
        track_category_loaded["159"] = false;
        featured_categories.push("159");
        track_category_finished["159"] = false;
    </script>

    <script>
        track_category_loaded["178"] = false;
        featured_categories.push("178");
        track_category_finished["178"] = false;
    </script>

    <script>
        track_category_loaded["388"] = false;
        featured_categories.push("388");
        track_category_finished["388"] = false;
    </script>

    <script>
        track_category_loaded["137"] = false;
        featured_categories.push("137");
        track_category_finished["137"] = false;
    </script>

    <script>
        track_category_loaded["12"] = false;
        featured_categories.push("12");
        track_category_finished["12"] = false;
    </script>

    <script>
        track_category_loaded["6"] = false;
        featured_categories.push("6");
        track_category_finished["6"] = false;
    </script>

    <script>
        track_category_loaded["39"] = false;
        featured_categories.push("39");
        track_category_finished["39"] = false;
    </script>

    <script>
        track_category_loaded["105"] = false;
        featured_categories.push("105");
        track_category_finished["105"] = false;
    </script>

    <script>
        track_category_loaded["379"] = false;
        featured_categories.push("379");
        track_category_finished["379"] = false;
    </script>

    <script>
        track_category_loaded["906"] = false;
        featured_categories.push("906");
        track_category_finished["906"] = false;
    </script>

    <script>
        track_category_loaded["260"] = false;
        featured_categories.push("260");
        track_category_finished["260"] = false;
    </script>

    <script>
        track_category_loaded["41"] = false;
        featured_categories.push("41");
        track_category_finished["41"] = false;
    </script>

    <script>
        track_category_loaded["395"] = false;
        featured_categories.push("395");
        track_category_finished["395"] = false;
    </script>

    <script>
        track_category_loaded["18"] = false;
        featured_categories.push("18");
        track_category_finished["18"] = false;
    </script>

    <script>
        track_category_loaded["23"] = false;
        featured_categories.push("23");
        track_category_finished["23"] = false;
    </script>

    <script>
        track_category_loaded["455"] = false;
        featured_categories.push("455");
        track_category_finished["455"] = false;
    </script>

    <script>
        track_category_loaded["165"] = false;
        featured_categories.push("165");
        track_category_finished["165"] = false;
    </script>

    <script>
        track_category_loaded["935"] = false;
        featured_categories.push("935");
        track_category_finished["935"] = false;
    </script>

    <script>
        function cloneMenu(idMenu, holder) {
            if ($(holder).hasClass("cloned") == false) {
                var originalMenu = document.getElementById(idMenu);
                var cloneMenu = originalMenu.cloneNode(true);
                $(holder).html(cloneMenu);
                $(holder).addClass("cloned");
            }
        }

        function sliderBst(holder, timeOut) {
            setTimeout(function () {
                if ($(holder).hasClass("owl-loaded") == false) {
                    $(holder).owlCarousel({
                        items: 1,
                        loop: true,
                        lazyload: true,
                        margin: 10,
                        nav: true,
                        dots: true,
                        autoplaySpeed: 400,
                        autoplayHoverPause: true,
                        autoplay: true,
                        autoplayTimeout: 10000,
                        navText: [
                            '<i class="far fa-angle-left" aria-hidden="true"></i>',
                            '<i class="far fa-angle-right" aria-hidden="true"></i>'
                        ]
                    });
                }
            }, timeOut);
        }

        function homeCarousel() {
            $("#homepage-slider-2019").owlCarousel({
                items: 1,
                loop: true,
                lazyLoad: true,
                margin: 10,
                autoplaySpeed: 400,
                autoplay: 3000,
                autoplayHoverPause: true,
                nav: true,
                navText: [
                    '<i class="far fa-chevron-left"></i>',
                    '<i class="far fa-chevron-right" style="margin-left:2px;"></i>'
                ]
            });

            $("#slider-under-homeslider-2019").owlCarousel({
                items: 4,
                loop: false,
                margin: 10,
                nav: true,
                lazyLoad: true,
                dots: false,
                responsive: {
                    0: {
                        items: 4
                    },
                    1650: {
                        items: 4
                    }
                },
                navText: [
                    '<i class="fal fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fal fa-angle-right" aria-hidden="true"></i>'
                ]
            });

            $("#list-collection-homepage2019 .holder-slider-bst").each(
                function () {
                    $(".slider-product").owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 10,
                        navSpeed: 400,
                        autoplaySpeed: 400,
                        autoplayHoverPause: true,
                        nav: true,
                        dots: true,
                        lazyload: true,
                        autoplay: true,
                        autoplayTimeout: 10000,
                        navText: [
                            '<i class="far fa-angle-left" aria-hidden="true"></i>',
                            '<i class="far fa-angle-right" aria-hidden="true"></i>'
                        ]
                    });
                }
            );
        }

        function runOnScroll() {
            //var win_scroll_top = $(window).scrollTop();
            //var win_height = $(window).height();

            //lay sp hot theo danh muc noi bat
            featured_categories.forEach(function (category_id) {
                if (
                    isOnScreen($("#boxcate-" + category_id)) &&
                    $("#boxcate-" + category_id).hasClass("loaded") == false
                ) {
                    laySpHotDanhMucNoiBat(category_id);
                    $("#boxcate-" + category_id).addClass("loaded");
                }
            });

            $("#list-collection-homepage2019 .holder-slider-bst").each(
                function () {
                    var $node = $(this);
                    if (isOnScreen($node)) {
                        $node.css({ marginTop: 0 });
                        sliderBst($node.find(".slider-product"), 3000);
                    }
                }
            );
        }

        function replaceDecoy(target_id, decoy_id) {
            var content = $("#" + decoy_id).html();
            $("#" + target_id).html(content);
            return true;
        }

        function startCarousel() {
            if (
                replaceDecoy(
                    "js-hurasoft-decoy-homepage-slider-2019",
                    "js-hurasoft-homepage-slider-2019"
                ) &&
                replaceDecoy(
                    "js-hurasoft-decoy-slider-under-homeslider-2019",
                    "js-hurasoft-slider-under-homeslider-2019"
                )
            ) {
                console.log("replaceDecoy yess....");
                homeCarousel();
            }
        }

        // when jquery ready
        $(function () {
            hurasoft_webworker.send(
                { type: "delay", timeout: 3000 },
                function (data) {
                    console.log(
                        "hurasoft_webworker = " + JSON.stringify(data)
                    );

                    //hien thi popup banner chinh
                    $("#show_popup").css("display", "block");

                    //an hover noi dung o top
                    $(".js-header-template").css("display", "none");

                    // carousel banner
                    startCarousel();
                }
            );

            $(window).scroll(runOnScroll);
        });
    </script>

    <!-- chuc nang Deal 2020 -->

    <!---//script hien thi cho san pham-->

    <!--//All 3rd parties' scripts go here-->
    <!-- MePuzz start-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i["MePuzzAnalyticsObject"] = r;
            (i[r] =
                i[r] ||
                function () {
                    (i[r].q = i[r].q || []).push(arguments);
                }),
                (i[r].l = 1 * new Date());
            (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
        })(
            window,
            document,
            "script",
            "https://static.mepuzz.com/sdk/v2/MePuzzSDK.min.js",
            "mePuzz"
        );
        mePuzz("setAppId", "P6yeWgQenr");
        mePuzz("track", "pageview");
    </script>
    <!--  MePuzz end -->

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-MMT74HX");
    </script>
    <!-- End Google Tag Manager-->

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-TN9VG7Z");
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42369638-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-42369638-1");
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        function _startFacebookPixel() {
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod
                        ? n.callMethod.apply(n, arguments)
                        : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(
                window,
                document,
                "script",
                "https://connect.facebook.net/en_US/fbevents.js"
            );
            fbq("init", "1789154151393847");
            fbq("track", "PageView");
        }

        var hurasoft_late_execute = [];

        hurasoft_late_execute.push({
            name: "fbpixel",
            call: _startFacebookPixel
        });
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1789154151393847&ev=PageView
&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: "1033127020153903",
                cookie: true,
                xfbml: true,
                version: "v6.0"
            });

            FB.AppEvents.logPageView();
        };
    </script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=1057132111164652&autoLogAppEvents=1"></script>

    <script>
        !(function (s, u, b, i, z) {
            var r, m;
            s[i] ||
                ((s._sbzaccid = z),
                    (s[i] = function () {
                        s[i].q.push(arguments);
                    }),
                    (s[i].q = []),
                    s[i]("setAccount", z),
                    (r = function (e) {
                        return e <= 6 ? 5 : r(e - 1) + r(e - 3);
                    }),
                    (m = function (e) {
                        var t, n, c;
                        5 < e ||
                            s._subiz_init_2094850928430 ||
                            ((t = "https://"),
                                (t +=
                                    0 === e
                                        ? "widget." + i + ".xyz"
                                        : 1 === e
                                            ? "storage.googleapis.com"
                                            : "sbz-" + r(10 + e) + ".com"),
                                (t += "/sbz/app.js?accid=" + z),
                                (n = u.createElement(b)),
                                (c = u.getElementsByTagName(b)[0]),
                                (n.async = 1),
                                (n.src = t),
                                c.parentNode.insertBefore(n, c),
                                setTimeout(m, 2e3, e + 1));
                    })(0));
        })(window, document, "script", "subiz", "acotfmboisiatum6ae94");
    </script>

    <script>
        function _startFBSDK() {
            (function (d, s, id) {
                var js,
                    fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            })(document, "script", "facebook-jssdk");
        }

        hurasoft_late_execute.push({
            name: "_startFBSDK",
            call: _startFBSDK
        });

        var _track_start3codes = false;
        function start3codes() {
            if (_track_start3codes) return;
            _track_start3codes = true;
            hurasoft_late_execute.forEach(function (item) {
                console.log("Starting " + item.name);
                item.call();
            });
        }

        // when jquery ready
        $(function () {
            hurasoft_webworker.send(
                { type: "delay", timeout: 3000 },
                function (data) {
                    console.log(
                        "hurasoft_webworker = " + JSON.stringify(data)
                    );
                    start3codes();
                }
            );
        });
    </script>

    <!--<div id="cart-fixed-2019" onclick="location.href='/gio-hang'">
  <i class="icons icon-fixed-bag fal fa-shopping-cart"></i>
  <p>Giỏ hàng của bạn <br><b>Có <span id="count_shopping_cart_store_2">0</span> sản phẩm</b></p>
</div>-->
    <div id="icon-fixed-right">
        <!--<a href="javascript:void(0)" onclick="showPopup('popup-facebook');"><i class="icons fab fa-facebook-f"></i></a>
  <a href="javascript:void(0)" onclick="showPopup('popup-youtube');"><i class="icons fab fa-youtube"></i></a>-->
        <a href="https://www.facebook.com/www.hanoicomputer.vn/" target="_blank"><i class="icons fab fa-facebook-f"></i></a>
        <a href="https://www.youtube.com/channel/UCIoWNINN5sJcx1zboLXZmeA" target="_blank"><i class="icons fab fa-youtube"></i></a>
        <a href="javascript:void(0)" onclick="showPopup('popup-lien-he');"><i class="icons fas fa-envelope"></i></a>
        <a href="javascript:void(0)" onclick="showPopup('popup-address');"><i class="icons fas fa-phone fa-flip-horizontal"></i></a>
        <a href="/buildpc"><i class="icons fa fa-wrench"></i></a>
        <a href="https://www.messenger.com/t/www.hanoicomputer.vn" target="_blank"><i class="icons fab fa-facebook-messenger"></i></a>
        <a href="javascript:void(0)" id="toTop" style="display:none;" class="active"><i class="icons far fa-arrow-up"></i></a>
    </div>

    <div class="popup-common" id="popup-lien-he">
        <div class="title-popup">
            <span>Liên hệ với chúng tôi</span><i class="close fal fa-times" onclick="closePopupCommon()"></i>
        </div>
        <div class="content-popup">
            <form>
                <input type="text" size="50" name="contact_name" id="contact_name" autocomplete="off" placeholder="Họ và tên" class="khaipv-input" />
                <input type="text" size="50" name="contact_email" id="contact_email" autocomplete="off" placeholder="Email" class="khaipv-input" />
                <input type="text" size="50" name="contact_tel" id="contact_tel" autocomplete="off" placeholder="Số điện thoại"
                    class="khaipv-input" />
                <textarea rows="8" name="contact_message" id="contact_message" style="width:100% !important;" placeholder="Nội dung liên hệ"
                    class="khaipv-textarea"></textarea>
                <input type="button" class="submit-button" value="Gửi liên hệ" onclick="send_contact();" style="cursor:pointer;" />
                <input type="hidden" value="send" name="action" />
                <input type="hidden" name="return_url" value="https://www.hanoicomputer.vn/" />
            </form>
        </div>
        <!--content-popup-->
    </div>
    <!--popup-->

    <div class="popup-common" id="popup-youtube">
        <div class="title-popup">
            <span>Quan tâm đến chúng tôi</span><i class="close fal fa-times" onclick="closePopupCommon()"></i>
        </div>
        <input type="hidden" value="https://www.youtube.com/embed/V69Le8tNPac" id="url-video-popup" />
        <div class="content-popup" style="padding:0; height:315px;" id="content-popup-youtube"></div>
    </div>

    <div class="popup-common" id="popup-address">
        <div class="title-popup">
            <span>Hotline liên hệ mua hàng</span><i class="close fal fa-times" onclick="closePopupCommon()"></i>
        </div>
        <div class="content-popup" style="padding:0 20px; font-size:14px; line-height:1.6;">
            <ul class="showroom-right-menu">
                <li>
                    <span class="showroom-order">01</span>
                    <p class="showroom-address">
                        Số 129+131 Lê Thanh Nghị - Hai Bà Trưng - Hà Nội
                    </p>
                    <p class="showroom-hotline">
                        Điện thoại:
                        <b style="color:#ed1b24">1900 1903 (máy lẻ 101)</b>
                    </p>
                </li>
                <li>
                    <span class="showroom-order">02</span>
                    <p class="showroom-address">
                        Số 43 Thái Hà - Đống Đa - Hà Nội
                    </p>
                    <p class="showroom-hotline">
                        Điện thoại:
                        <b style="color:#ed1b24">1900 1903 (máy lẻ 202) - (024) 35380088</b>
                    </p>
                </li>
                <li>
                    <span class="showroom-order">03</span>
                    <p class="showroom-address">
                        Số 57 Nguyễn Văn Huyên - Cầu Giấy - Hà Nội
                    </p>
                    <p class="showroom-hotline">
                        Điện thoại:
                        <b style="color:#ed1b24">1900 1903 (máy lẻ 503) - (024) 38610088</b>
                    </p>
                </li>
                <li>
                    <span class="showroom-order">04</span>
                    <p class="showroom-address">
                        A1-6 Lô 8A - Lê Hồng Phong - Ngô Quyền - Hải Phòng
                    </p>
                    <p class="showroom-hotline">
                        Điện thoại:
                        <b style="color:#ed1b24">1900 1903 (máy lẻ 301) - (022) 58830013</b>
                    </p>
                </li>
                <li>
                    <span class="showroom-order">05</span>
                    <p class="showroom-address">
                        Số 511+513 Quang Trung - Hà Đông - Hà Nội
                    </p>
                    <p class="showroom-hotline">
                        Điện thoại:
                        <b style="color:#ed1b24">1900 1903 (máy lẻ 600) - (024) 38580088</b>
                    </p>
                </li>
                <li>
                    <span class="showroom-order">06</span>
                    <p class="showroom-address">
                        Số 520 Cách Mạng Tháng Tám - Quận 3 - TP. Hồ Chí
                        Minh
                    </p>
                    <p class="showroom-hotline">
                        Điện thoại:
                        <b style="color:#ed1b24">1900 1903 (máy lẻ 701) - (028) 73078877</b>
                    </p>
                </li>
                <li>
                    <span class="showroom-order">07</span>
                    <p class="showroom-address">
                        Số 398 Nguyễn Văn Cừ - Long Biên - Hà Nội
                    </p>
                    <p class="showroom-hotline">
                        Điện thoại:
                        <b style="color:#ed1b24">19001903 (máy lẻ 808) - (024) 73088877</b>
                    </p>
                </li>
            </ul>
        </div>
        <!--content-popup-->
    </div>
    <!--popup-->

    <div class="popup-common" id="popup-facebook">
        <div class="title-popup">
            <span>Quan tâm đến chúng tôi</span><i class="close fal fa-times" onclick="closePopupCommon()"></i>
        </div>
        <div class="content-popup" style="padding:10px 20px; font-size:14px; line-height:1.6;">
            <div style="height:130px;">
                <div class="fb-page" data-href="https://www.facebook.com/www.hanoicomputer.vn/" data-width="455" data-height="70"
                    data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/www.hanoicomputer.vn/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/www.hanoicomputer.vn/">Fanpage</a>
                    </blockquote>
                </div>
            </div>
            <div class="line"></div>
            <p>
                <i>Hãy <b class="red">Like fanpage</b> để trở thành
                    <b class="blue">Fan của Hanoicomputer</b> ngay trong hôm
                    nay!</i>
            </p>
            <div class="clear"></div>
        </div>
    </div>

    <div id="backgroundPopupForCart"></div>
    <div id="popupCart">
        <p class="note">Sản phẩm đã được thêm vào giỏ hàng</p>
        <a href="javascript:void(0)" onclick="$('#popupCart').fadeOut(); $('#backgroundPopupForCart').fadeOut('fast');" class="button">Xem sản phẩm
            khác</a>
        <a href="javascript:void(0)" onclick="location.href='/cart'" class="button orange">Tiếp tục mua hàng</a>
    </div>
</body>

</html>