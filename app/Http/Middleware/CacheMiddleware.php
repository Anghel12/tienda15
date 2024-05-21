<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

class CacheMiddleware
{

    protected $cacheTime;

    public function __construct($cacheTime = 60)
    {
        $this->cacheTime = $cacheTime;
    }

    public function handle(Request $request, Closure $next)
    {
        $cacheKey = $this->getCacheKey($request);

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $response = $next($request);

        if ($this->shouldCacheResponse($request, $response)) {
            $this->cacheResponse($cacheKey, $response);
        }

        return $response;
    }

    private function getCacheKey(Request $request)
    {
        return 'cache:' . md5($request->fullUrl());
    }

    private function shouldCacheResponse(Request $request, $response)
    {
        return $request->isMethod('GET') && $response->isSuccessful();
    }

  private function cacheResponse($cacheKey, $response)
    {
        if ($this->cacheTime > 0) {
            $content = $response->getContent();

            $cachedResponse = Response::make($content, $response->getStatusCode(), $response->headers->all());

            $cachedResponse->setPublic();
            $cachedResponse->setMaxAge($this->cacheTime);

            Cache::put($cacheKey, $cachedResponse, now()->addSeconds($this->cacheTime));
        }
    }

}
