<?php

namespace App\Utilities;

class Constant
{
    // gioong define trong php thuan: dinh nghia cac hang so, rolo dung chung cho toan he thong

    // Order
    const order_status_ReceiveOrders = 1;
    const order_status_Confirmed = 2;
    const order_status_Paid = 3;
    const order_status_Shipping = 4;
    const order_status_Finish = 5;
    const order_status_Cancel_Two = 6;
    const order_status_Cancel = 0;

    public static $order_status = [
        self::order_status_ReceiveOrders => 'Nhận Đơn Đặt Hàng',
        self::order_status_Confirmed => 'Đã Xác Nhận',
        self::order_status_Paid => 'Đã Thanh Toán',
        self::order_status_Shipping => 'Đang Giao Hàng',
        self::order_status_Finish => 'Hoàn Thành',
        self::order_status_Cancel_Two => 'Trả Hàng',
        self::order_status_Cancel => 'Hủy Đơn Hàng',
    ];

    // User
    const user_level_admin = 1;
    const user_level_client = 2;

    public static $user_level = [
        self::user_level_admin => 'Admin',
        self::user_level_client => 'Người dùng',
    ];

   

}