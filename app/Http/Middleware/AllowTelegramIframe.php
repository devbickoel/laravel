namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AllowTelegramIframe
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('X-Frame-Options', 'ALLOW-FROM https://web.telegram.org');
        $response->headers->set('Content-Security-Policy', "frame-ancestors 'self' https://web.telegram.org https://*.telegram.org");

        return $response;
    }
}
