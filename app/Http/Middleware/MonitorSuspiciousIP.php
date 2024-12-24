<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\SuspiciousIpAlert;

class MonitorSuspiciousIP
{
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();

        // Đọc danh sách IP được phép từ .env (hoặc có thể sử dụng danh sách IP trắng)
        $allowedIps = explode(',', env('ALLOWED_IPS', '127.0.0.1')); // Nếu không có, mặc định là localhost

        // Kiểm tra nếu IP không nằm trong danh sách cho phép
        if (!in_array($ip, $allowedIps)) {
            // Ghi log về hành động đáng ngờ
            Log::warning('Suspicious IP detected', [
                'ip' => $ip,
                'user_agent' => $request->header('User-Agent'),
            ]);

            // Gửi email cảnh báo về IP lạ
            Mail::to(env('ALERT_EMAIL'))->send(new SuspiciousIpAlert($ip));
        }

        return $next($request);
    }
}
