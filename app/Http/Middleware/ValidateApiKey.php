<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

class ValidateApiKey
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('X-API-Key');

        if (!$apiKey) {
            return response()->json([
                'success' => false,
                'message' => 'API key is required. Include it in the X-API-Key header.',
            ], 401);
        }

        $user = User::where('api_key', $apiKey)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid API key.',
            ], 401);
        }

        if (!$user->api_enabled) {
            return response()->json([
                'success' => false,
                'message' => 'API access is disabled for this account.',
            ], 403);
        }

        // Rate limiting
        $key = 'api:' . $user->id;
        $maxAttempts = $user->api_rate_limit; // Per minute
        $decayMinutes = 1;

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $seconds = RateLimiter::availableIn($key);

            return response()->json([
                'success' => false,
                'message' => 'Rate limit exceeded. Try again in ' . $seconds . ' seconds.',
                'retry_after' => $seconds,
            ], 429);
        }

        RateLimiter::hit($key, $decayMinutes * 60);

        // Attach user to request for use in controllers
        $request->merge(['api_user' => $user]);

        return $next($request);
    }
}
