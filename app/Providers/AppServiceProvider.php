<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Models\Pedido;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Paginator::useBootstrap();
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('Pedidos');
            $event->menu->add(
                [
                    'text'       => 'Novos',
                    'icon_color' => 'cyan',
                    'url'        => 'pedido',
                    'label'       => Pedido::where('status', 1)->count(),
                    'label_color' => 'success',
                ],
                [
                    'text'       => 'Em andamento',
                    'icon_color' => 'yellow',
                    'url'        => 'pedido/andamento',
                    'label'       => Pedido::where('status', 2)->count(),
                    'label_color' => 'success',
                ],
                [
                    'text'       => 'Concluidos',
                    'icon_color' => 'green',
                    'url'        => 'pedido/concluidos',
                    'label'       => Pedido::whereRaw('DATE(updated_at) = CURDATE()')->where('status', 3)->count(),
                    'label_color' => 'success',
                ],
                [
                    'text'       => 'Negados',
                    'icon_color' => 'red',
                    'url'        => 'pedido/cancelados',
                    'label'       => Pedido::whereRaw('DATE(updated_at) = CURDATE()')->where('status', 4)->count(),
                    'label_color' => 'success',
                ],
            );
        });
    }



    public function handle()
    {
    }
}
