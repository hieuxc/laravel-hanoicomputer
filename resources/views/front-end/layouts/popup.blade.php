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
            <input type="text" size="50" name="contact_tel" id="contact_tel" autocomplete="off" placeholder="Số điện thoại" class="khaipv-input" />
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

<div id="bg-opacity" onclick="closePopupCommon()"></div>

<span id="tooltip-category-fixed-left">title</span>
<div id="category-fixed-left">
    <a href="/laptop-may-tinh-xach-tay" id="vt-159" data-title="Laptop, Máy Tính Bảng"></a><a href="/may-tinh-choi-game" id="vt-178"
        data-title="PC Gaming, Streaming"></a><a href="/pc-workstations" id="vt-388" data-title="PC Đồ Họa, Render, Máy Chủ"></a><a
        href="/may-tinh-van-phong" id="vt-137" data-title="PC Văn Phòng, AIO, Mini PC"></a><a href="/thiet-bi-van-phong" id="vt-12"
        data-title="Thiết Bị Văn Phòng"></a><a href="/linh-kien-may-tinh" id="vt-6" data-title="Linh Kiện Máy Tính"></a><a href="/man-hinh-may-tinh"
        id="vt-39" data-title="Màn Hình Máy Tính"></a><a href="/phim-chuot-gaming-gear" id="vt-105" data-title="Phím Chuột, Gaming Gear"></a><a
        href="/tan-nhiet-cooling" id="vt-379" data-title="Tản Nhiệt PC, Cooling"></a><a href="/tivi-dien-lanh" id="vt-906"
        data-title="Tivi, Điện Lạnh, Gia Dụng"></a><a href="/camera-thiet-bi-an-ninh" id="vt-260" data-title="Camera, TB An Ninh"></a><a
        href="/thiet-bi-nghe-nhin" id="vt-41" data-title="TB Âm Thanh, Chụp Hình"></a><a href="/thiet-bi-sieu-thi-cua-hang" id="vt-395"
        data-title="TB Siêu Thị, Máy Bán Hàng"></a><a href="/tb-hoi-nghi-truong-hoc" id="vt-480" data-title="Họp, Giảng Dạy, Stream"></a><a
        href="/thiet-bi-thong-minh" id="vt-481" data-title="Thiết Bị Nhà Thông Minh"></a><a href="/thiet-bi-luu-tru" id="vt-18"
        data-title="Thiết Bị Lưu Trữ, USB, Thẻ"></a><a href="/thiet-bi-mang" id="vt-23" data-title="Thiết Bị Mạng, Phần Mềm"></a><a href="/phu-kien"
        id="vt-455" data-title="Phụ Kiện Laptop, PC, Khác"></a><a href="/thiet-bi-di-dong" id="vt-899" data-title="Thiết Bị Di Động"></a><a
        href="/san-pham-thanh-ly" id="vt-165" data-title="Xả Kho Giá Sốc - Mua Hàng Sâu Hơn Giá Gốc 😭"></a><a href="/gian-hang-thanh-ly" id="vt-935"
        data-title="Gian Hàng Thanh Lý"></a><a href="/usb-wifi-cho-pc" id="vt-951" data-title="USB Wifi Cho PC"></a><a href="/ssd-samsung" id="vt-952"
        data-title="SSD SamSung"></a>
</div>
<div id="tooltip"></div>
<div id="kmaitooltip"></div>