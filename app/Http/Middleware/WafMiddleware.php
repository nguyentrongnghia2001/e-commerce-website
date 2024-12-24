<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WafMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra các yêu cầu GET, POST để phát hiện các chuỗi đáng ngờ
        $patterns = [
            '/<script.*?>.*?<\/script>/is', // XSS
            '/\b(union|select|insert|update|delete|drop|alter)\b/i', // SQL Injection
        ];

        // Kiểm tra trong tất cả dữ liệu đầu vào
        foreach ($request->all() as $key => $value) {
            foreach ($patterns as $pattern) {
                if (preg_match($pattern, $value)) {
                    return response('Request bị chặn bởi WAF.', 403);
                }
            }
        }
        return $next($request);
    }
}
