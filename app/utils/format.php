<?php
function FormatOrderStatus($trang_thai)
{
    switch ($trang_thai) {
        case 0: 
            return "Hủy";
            break;
        case 1:
            return "Chờ xác nhận";
            break;
        case 2:
            return "Đang xử lý";
            break;
        case 3:
            return "Đang giao hàng";
            break;
        case 4:
            return "Thành công";
            break;
    }
}
function FormatNumber($number)
{
    return number_format($number, 0, ',', '.');
}
function FormatStatus($trang_thai)
{
    switch ($trang_thai) {
        case 0:
            return "Ẩn";
            break;
        case 1:
            return "Hiện";
            break;
    }
}
function FormatRole($role)
{
    switch ($role) {
        case 0:
            return "User";
            break;
        case 1:
            return "Admin";
            break;
    }
}
