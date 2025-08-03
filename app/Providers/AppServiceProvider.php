<?php

namespace App\Providers;

use App\Models\Theme;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Pulse\Facades\Pulse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('setting', function (string $expression, $default = null) {
            return "<?php echo App\Models\Setting::fetch($expression, $default); ?>";
        });

        Pulse::user(fn ($user) => [
            'name' => $user->nickname,
            'extra' => $user->getEmail() ?? '',
            'avatar' => $user->avatarUrl() ?? '',
        ]);

        Gate::define('admin', function (User $user) {
            return $user->hasRole('admin');
        });
        Gate::define('viewPulse', function (User $user) {
            return $user->hasRole('admin');
        });

        view()->composer(['layouts.app', 'layouts.login'], function ($view) {
            $currentTheme = Theme::whereActive(true)->first();
            $darkMode = false;
            if ($currentTheme) {
                $darkMode = $currentTheme->dark_mode;
            }
            $view->with('currentTheme', $currentTheme);
            $view->with('darkMode', $darkMode);
        });
    }
}
