<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'components/inertia/layout';

    public function rootView(Request $request): string
    {
        // routeIs() checks for named routes
        if ($request->routeIs('react.*')) {
            return 'components.inertia.react'; // resources/views/components/inertia/react.blade.php
        }

        if ($request->routeIs('vue.*')) {
            return 'components.inertia.vue'; // resources/views/components/inertia/vue.blade.php
        }

        return $this->rootView;
    }

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'name' => config('app.name'),
            // 'quote' => ['message' => trim($message), 'author' => trim($author)],
            'auth' => [
                'user' => $request->user(),
            ],
            'ziggy' => fn(): array => [
                ...(new Ziggy())->toArray(),
                'location' => $request->url(),
            ]
        ]);
    }
}
