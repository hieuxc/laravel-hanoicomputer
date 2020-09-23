@extends('front-end.layouts.index')

@section('css')
<link rel="stylesheet" href="https://hanoicomputercdn.com/template/may2020/script/otherstyle2020.css?v=53312">
@endsection

@section('content')
<div class="container-2019 khaipv-container">
    <div id="content">
        <form method="post" enctype="multipart/form-data" action="/send-cart" onsubmit="return check_field()" id="form-send-cart">

            <div class="new-cart-title">
                <h4>THÔNG TIN GIỎ HÀNG</h4>
            </div>

            <div class="khaipv-checkout-button-group">
                <div class="khaipv-checkout-button">
                    <a href="/" class="tiep-tuc-mua-hang new-cart-continue-shopping-btn">Tiếp tục mua hàng</a>
                </div>
                <div class="khaipv-checkout-button">
                    <span class="xoa-gio-hang new-cart-del-shopping-btn">Xóa giỏ hàng</span>
                </div>
            </div>
            <div class="new-cart">
                <div class="new-cart-items">
                    @foreach ($cart->product_cart as $product)
                    <div class="new-cart-items-row js-item-row" data-variant_id="0" data-item_id="52020" data-item_type="product" style="margin-top:10px">
                        <div class="new-cart-items-img">
                        <a href="/{{$product['product']->slug}}"><img
                                    class="cart-product-img" src="{{$product['product']->image}}"></a>
                        </div>
                        <div class="new-cart-items-info">
                            <a href="/{{$product['product']->slug}}"
                                class="new-cart-items-name">{{$product['product']->name}}
                            </a>
                            <div class="new-cart-items-desc">
                                <p class="m-0"> <b>Mã sản phẩm: </b>{{$product['product']->code}}</p>
                                <p class="m-0"> <b>Bảo hành: </b>{{$product['product']->warranty}}</p>


                                {{-- <div class="offer-incart">
                                    <b class="red m-0">Khuyến mại:</b><br>

                                    <span class="pre-line text-12">- <span style="color: red; font-weight: bold; text-transform: uppercase">BỘ QUÀ
                                            TẶNG TRỊ GIÁ <span style="color: red; font-weight: bold">1.400.000Đ</span></span>
                                        <br><span style="margin-left: 15px">+</span> Chuột không dây Logitech M185 trị giá <span
                                            style="color: red; font-weight: bold">249.000đ</span> (MELO055)
                                        <br><span style="margin-left: 15px">+</span> Tấm lót chuột trị giá <span
                                            style="color: red; font-weight: bold">49.000đ</span> (PADM639)
                                        <br><span style="margin-left: 15px">+</span> Bộ vệ sinh laptop trị giá <span
                                            style="color: red; font-weight: bold">39.000đ</span> (NUOC002)
                                        <br><span style="margin-left: 15px">+</span> Túi chống sốc trị giá <span
                                            style="color: red; font-weight: bold">79.000đ</span> (TUID209)
                                        <br><span style="margin-left: 15px">+</span> Giá khuyến mại là giá đã giảm <span
                                            style="color: red; font-weight: bold">1.500.000đ</span> CT hoàn tiền của LG.</span><br>



                                </div> --}}


                            </div>

                        </div>
                        <div class="new-cart-items-checkout d-flex">
                            <input type="hidden" class="bulk_price_config" value='<br />

                            <b>Notice</b>:  Undefined index: bulk_price in <b>/var/www/html/hanoicomputer.vn/public_html/cache/template/shopping_cart_new.ad126319f3b44d5ea27c527d53a852d0.php</b> on line <b>142</b><br />null'>
                            <input type="hidden" class="buy-price" value="29989000">

                            <span class="new-cart-items-price js-show-buy-price"><span>{{number_format($product['price'])}}</span> <u>đ</u> </span>

                            <span class="new-cart-quantity">
                                <a href="javascript:void(0);" class="minor quantity-change" data-value="-1" title="tru">-</a>
                            <input class="buy-quantity quantity-change" value='{{$product['quality']}}' size='5' />
                                <a href="javascript:void(0);" class="add quantity-change" data-value="1" title="them">+</a>
                            </span>
                            <b style="display:none;" class="total-item-price"> 29.989.000 </b>
                            <div class="new-cart-items-del">
                                <a href="javascript:void(0)" class="delete-from-cart red"><i class="far fa-trash-alt" style="color: #d00"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="total-cart">
                        Tổng tiền đơn hàng :
                    <strong><span id="total_value" class="total-cart-price" style="color: #d00">{{number_format($cart->total_price)}} đ</span></strong>
                    </div>
                    <div class="has-new-kmai">

                    </div>
                </div>

            </div>
            <!-- end new cart -->
            <div class="new-cart-bottom">
                <div class="c3_col_1">
                    <div class="c3_box user_info">
                        <div class="title_box_cart"> Thông tin khách hàng</div>
                        <div class="user_info-item"><span class="txt2">Họ tên*</span>
                            <input type="text" name="user_info[name]" id="buyer_name" value="" />
                        </div>
                        <div class="user_info-item"><span class="txt2">Email*</span>
                            <input type="text" name="user_info[email]" id="buyer_email" value='' />
                        </div>

                        <div class="user_info-item"> <span class="txt2">Số điện thoại*</span>
                            <input type="text" name="user_info[tel]" id="buyer_mobile" value='' />
                            <input type="hidden" name="user_info[mobile]" value='' />
                        </div>

                        <div class="item-form d- user_info-item user_province">
                            <span class="txt2">Tỉnh/Thành phố</span>
                            <span class="custom-province">
                                <select name="user_info[province]" class="" id="buyer_province" onchange="getDistrict(this.value)">
                                    <option value="0">--Lựa chọn--</option>

                                    <option value="1">Hà Nội</option>

                                    <option value="2">TP HCM</option>

                                    <option value="5">Hải Phòng</option>

                                    <option value="4">Đà Nẵng</option>

                                    <option value="6">An Giang</option>

                                    <option value="7">Bà Rịa-Vũng Tàu</option>

                                    <option value="13">Bình Dương</option>

                                    <option value="15">Bình Phước</option>

                                    <option value="16">Bình Thuận</option>

                                    <option value="14">Bình Định</option>

                                    <option value="8">Bạc Liêu</option>

                                    <option value="10">Bắc Giang</option>

                                    <option value="9">Bắc Kạn</option>

                                    <option value="11">Bắc Ninh</option>

                                    <option value="12">Bến Tre</option>

                                    <option value="18">Cao Bằng</option>

                                    <option value="17">Cà Mau</option>

                                    <option value="3">Cần Thơ</option>

                                    <option value="24">Gia Lai</option>

                                    <option value="25">Hà Giang</option>

                                    <option value="26">Hà Nam</option>

                                    <option value="27">Hà Tĩnh</option>

                                    <option value="30">Hòa Bình</option>

                                    <option value="28">Hải Dương</option>

                                    <option value="29">Hậu Giang</option>

                                    <option value="31">Hưng Yên</option>

                                    <option value="32">Khánh Hòa</option>

                                    <option value="33">Kiên Giang</option>

                                    <option value="34">Kon Tum</option>

                                    <option value="35">Lai Châu</option>

                                    <option value="38">Lào Cai</option>

                                    <option value="36">Lâm Đồng</option>

                                    <option value="37">Lạng Sơn</option>

                                    <option value="39">Long An</option>

                                    <option value="40">Nam Định</option>

                                    <option value="41">Nghệ An</option>

                                    <option value="42">Ninh Bình</option>

                                    <option value="43">Ninh Thuận</option>

                                    <option value="44">Phú Thọ</option>

                                    <option value="45">Phú Yên</option>

                                    <option value="46">Quảng Bình</option>

                                    <option value="47">Quảng Nam</option>

                                    <option value="48">Quảng Ngãi</option>

                                    <option value="49">Quảng Ninh</option>

                                    <option value="50">Quảng Trị</option>

                                    <option value="51">Sóc Trăng</option>

                                    <option value="52">Sơn La</option>

                                    <option value="53">Tây Ninh</option>

                                    <option value="56">Thanh Hóa</option>

                                    <option value="54">Thái Bình</option>

                                    <option value="55">Thái Nguyên</option>

                                    <option value="57">Thừa Thiên-Huế</option>

                                    <option value="58">Tiền Giang</option>

                                    <option value="59">Trà Vinh</option>

                                    <option value="60">Tuyên Quang</option>

                                    <option value="61">Vĩnh Long</option>

                                    <option value="62">Vĩnh Phúc</option>

                                    <option value="63">Yên Bái</option>

                                    <option value="19">Đắk Lắk</option>

                                    <option value="22">Đồng Nai</option>

                                    <option value="23">Đồng Tháp</option>

                                    <option value="21">Điện Biên</option>

                                    <option value="20">Đăk Nông</option>

                                </select>
                            </span>


                        </div>
                        <div id="district-holder-login" class="item-form user_info-item">
                        </div>


                        <div class="user_info-item"> <span class="txt2">Địa chỉ*</span>
                            <textarea id="buyer_address" name="user_info[address]"></textarea>
                        </div>
                        <div class="user_info-item"><span class="">Ghi chú</span>
                            <textarea name="user_info[note]" id="buyer_note" style="height:100px"></textarea>
                        </div>
                        <label class="active">
                            <div class="checkbox">
                                <input type="checkbox" id="chkTaxInvoice" name="chkTaxInvoice"><span class="icon"></span> Xuất hóa đơn
                                công ty
                            </div>
                        </label>
                        <div id="ajxTaxInvoice" style="margin-bottom:20px;display: none">
                            <div style="width: 100%; margin-top: 10px; padding: 0px;" id="pnlTaxInvoice">
                                <div class="user_info-item"> <span class="txt2">Công ty/Tổ chức:</span>
                                    <textarea id="txtTaxName" name="user_info[tax_company]"></textarea>
                                </div>
                                <div class="user_info-item"> <span class="txt2">Địa chỉ*:</span>
                                    <textarea id="txtTaxAddress" name="user_info[tax_address]"></textarea>
                                </div>
                                <div class="user_info-item"> <span class="txt2">Mã số thuế:</span>
                                    <textarea id="txtTaxCode" name="user_info[tax_code]"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="c3_col_1">
                    <div class="c3_box">
                        <div class="title_box_cart">Hình thức thanh toán</div>
                        <table class="tbl_pay" style="font-size: 13px;">


                            <tr>
                                <td valign="top"><input type="radio" id="pay_method_2" name='pay_method' value="2" class="pay_option" checked /></td>
                                <td valign="top">
                                    <div class="txt0"><label for="pay_method_2">Thanh toán tiền mặt khi nhận hàng (tiền mặt / quẹt thẻ
                                            ATM, Visa, Master)</label></div>

                                    <div class="pay_content" style="display:none;">
                                        Quý khách hàng có thể thanh toán bằng tiền mặt hoặc quẹt thẻ sau khi nhận được đầy đủ hàng hóa và
                                        đáp ứng chất lượng
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td valign="top"><input type="radio" id="pay_method_8" name='pay_method' value="8" class="pay_option" />
                                </td>
                                <td valign="top">
                                    <div class="txt0"><label for="pay_method_8">Thanh toán qua chuyển khoản qua tài khoản ngân hàng
                                            (khuyên dùng)</label></div>

                                    <div class="pay_content" style="display:none;">
                                        <b style="color:red">Quý khách chuyển tiền cho chúng tôi vào một trong các tài khoản sau đây:</b>
                                        <hr />
                                        <b>1. Ngân hàng TMCP Ngoại Thương Việt Nam- Chi nhánh Tây Hồ (Vietcombank)</b>
                                        - Tên tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số tài khoản VND: 0991.000.000.930
                                        <hr />
                                        <b>2. Ngân hàng Nông nghiệp và phát triển Nông thôn Việt Nam- Chi nhánh Hà Nội (
                                            Agribank)</b>
                                        - Tên tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số tài khoản VND: 1500.201.082.444
                                        <hr />
                                        <b>3. Ngân hàng TMCP Kỹ Thương Việt Nam – Trung tâm giao dịch Hội sở (Techcombank)</b>
                                        - Tên tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số TK VND: 108.2361.0928.999
                                        <hr />
                                        <b>4. Ngân hàng TMCP Đầu tư và phát triển Việt Nam- Chi nhánh Cầu Giấy (BIDV)</b>
                                        - Tên TK: Công ty cổ phần máy tính Hà Nội
                                        - Số TK: 2151.000.1289.241
                                        <hr />
                                        <b>5. Ngân hàng TMCP Á Châu- Chi nhánh Hà Nội (ACB)</b>
                                        - Tên Tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số TK: 174420119
                                        <hr />
                                        <b>6. Ngân hàng TNHH MTV Standard Chartered Việt Nam </b>
                                        - Tên Tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số Tài khoản VND: 88140711268
                                        <hr />
                                        <b>7. Ngân hàng TMCP Tiên Phong- PGD Nam Hà Nội</b>
                                        - Tên Tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số TK VND: 00118668001
                                        <hr />
                                        <b>8. Ngân hàng Quân Đội - Chi nhánh Định Công</b>
                                        - Tên Tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số TK VND: 0631100948001
                                        <hr />
                                        <b>9. Ngân hàng TMCP Công Thương Việt Nam</b>
                                        - Tên Tài khoản: Công ty cổ phần máy tính Hà Nội
                                        - Số TK VND: 112005156688
                                        <hr />

                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td valign="top"><input type="radio" id="pay_method_4" name='pay_method' value="4" class="pay_option" />
                                </td>
                                <td valign="top">
                                    <div class="txt0"><label for="pay_method_4">Thanh toán qua Ngân Lượng (ATM nội địa, Visa,
                                            Master)</label></div>

                                    <div class="pay_content" style="display:none;">

                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td valign="top"><input type="radio" id="pay_method_10" name='pay_method' value="10" class="pay_option" />
                                </td>
                                <td valign="top">
                                    <div class="txt0"><label for="pay_method_10">Trả góp qua Alepay (Ngân Lượng)</label></div>

                                    <div class="pay_content" style="display:none;">

                                    </div>

                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <!--c3_box-->
                <div class="c3_col_1">
                    <div class="c3_box">
                        <div class="tbl_cart3">
                            <table style="width: 100%;background: #f6f6f6;padding: 10px 5px;">
                                <tr>
                                    <td class="txt2"><b>Mã giảm giá/ quà tặng</b></td>
                                    <td></td>
                                </tr>
                                <tr class="txt_16">
                                    <td colspan="2">
                                        <div class="voucher">
                                            <div style="display: flex;align-items: center;">
                                                <input type="text" placeholder="Nhập mã giảm giá" class="txt" id="discount_code" name="coupon_code"
                                                    value=" ">

                                                <a href="javascript:void(0);" class="button button-check-discount js-apply-discount-code" style="">Áp
                                                    dụng</a>
                                            </div>



                                            <span id="js-voucher-message" style="margin: 5px 0px; display: block; color:#f00; font-size:13px;"></span>
                                            <div class="clear"></div>

                                        </div>
                                    </td>
                                </tr>
                                <tr class="txt_16">
                                    <td class="txt2">
                                        <b>Tổng tiền</b>
                                    </td>
                                    <td class="txt2 text-right">
                                        <strong class="total-cart-price">{{number_format($cart->total_price)}} <u>đ</u></strong>
                                    </td>
                                </tr>
                                <tr class="txt_16">
                                    <td class="txt2">
                                        <b>Thành tiền</b>
                                    </td>
                                    <td class="txt2 text-right">
                                        <strong class="red total-cart-payment"> {{number_format($cart->total_price)}} <u>đ</u></strong><br />
                                        <span class="txt_12">(Giá chưa bao gồm VAT)</span>
                                    </td>
                                </tr>
                            </table>
                            <div class="clear space2"></div>
                            <div style="" class="new-cart-button">

                                <a href="javascript:;" class="button js-check-sendcart button-100 bg-red ">
                                    Đặt hàng
                                </a>

                                <a class="button button-100 bg-green" href="/cart?show=tragop&type=cart">Mua trả góp</a>
                                <a class="button button-100 bg-yellow" href="/">Chọn thêm sản phẩm</a>
                                <a href="javascript:void(0)" onclick="downloadCartImage()" rel="nofollow" class="button button-100 bg-blue">Tải ảnh
                                    báo giá</a>
                                <a href="/ajax/export_download.php?file_type=xls&content_type=shopping-cart-new" rel="nofollow"
                                    class="button button-50 bg-blue">Tải file excel</a>
                                <a href="/print/user.php?view=cart-new" rel="nofollow" class="button button-50 bg-blue"
                                    style="    margin-right: 0; width: 50%;">In báo giá</a>

                                <input type="hidden" name="send_order" value="yes" />
                                <input type="hidden" id="js-total-before-fee-discount" value="">
                                <input type="hidden" id="js-discount-voucher" value="0">
                                <input type="hidden" name="coupon_code" value="" id="js_coupon_code">
                                <input type="hidden" id="js-discount-membership" value="0">
                                <input type="hidden" name="shipping_fee" id="js-fee-shipping" value="0">
                                <input type="hidden" name="cod_fee" id="js-fee-cod" value="0">
                                <input type="hidden" name="pay-online-fee" id="js-payonline-fee" value="0">
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection