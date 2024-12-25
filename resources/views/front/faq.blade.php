@extends('front.layout.master')

@section('title', 'Các câu hỏi thường gặp')

@section('body')

<!-- -->
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Các câu hỏi thường gặp</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Faq Section Begin -->
<div class="faq-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-accordin">
                    <div class="accordin" id="accordionExample">
                        <div class="card">
                            <div class="card-heading active">
                                <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                    Giờ làm việc của NNK Shop
                                </a>
                            </div>
                            <div class="collapse show" id="collapseOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        NNK Shop bắt đầu mở cửa phục vụ khách hàng từ 9h00 sáng và đóng cửa vào 8h00 tối mỗi ngày (kể cả thứ 7 & Chủ Nhật). Sau 19h00 tối, NNK Shop sẽ không nhận thêm khách. Riêng các dịch vụ Massage Body chỉ nhận khách đến trước 17h mỗi ngày
                                        Để không mất nhiều thời gian chờ đợi, khách hàng nên đặt lịch hẹn trước qua website nnkshop.xyz hoặc gọi đến số Hotline 0335558888 - 03355599999.
                                        Thời gian nhận đặt lịch hẹn của khách từ 9h00 sáng đến 17h30 tối. Riêng thứ 7 & Chủ Nhật không nhận đặt hẹn trước.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseTwo">
                                    Bạn biết gì về chúng tôi?
                                </a>
                            </div>
                            <div class="collapse" id="collapseTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        nnkshop.xyz được thành lập tại Việt Nam vào tháng 5/2024 với mục tiêu chăm sóc sắc đẹp và sức khỏe toàn diện cho người Việt Nam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseThree">
                                    Chúng tôi có thể mua trực tiếp tại cửa hàng không?
                                </a>
                            </div>
                            <div class="collapse" id="collapseThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                       Cửa hàng của chúng tôi chỉ mới phát triên nên chưa mở được cửa hàng. Nếu các bạn cần gì thắng mắc có thể liên hệ qua số điện thoại.Cám ơn các bạn đã qua đến chúng tôi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseFour">
                                    Quy định giao dịch chung?
                                </a>
                            </div>
                            <div class="collapse" id="collapseFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Hiện nay, vấn đề bảo mật thông tin đã trở thành vấn đề nóng trên tất cả các diễn đàn, điều này không chỉ gây khó khăn cho các tổ chức, cá nhân tham gia truy cập và giao dịch mà còn gây nên những phiền toái vượt ra ngoài tầm kiểm soát của hệ thống.
                                        Chính sách bảo mật và chia sẻ thông tin khách hàng của nnkshop.xyz như một lời cam kết với mong muốn nâng cao chất lượng dịch vụ, bảo đảm an toàn thông tin của các cá nhân, tổ chức khi tham gia truy cập hoặc giao dịch trực tiếp trên website nnkshop.xyz. Chúng tôi hiểu bảo vệ và sử dụng hợp lí thông tin của bạn cũng chính là bảo vệ lòng tin và sự yêu mến của bạn dành cho chúng tôi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Faq Section End -->

@endsection