<?php
namespace ProcedurePlugin\Providers;
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\EventProcedures\Services\EventProceduresService;
use Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry;
use ProcedurePlugin\EventProcedures\Procedures;
 
class ProcedurePluginServiceProvider extends ServiceProvider
{
    /**
     * @param EventProceduresService $eventProceduresService
     * @return void
     */
    public function boot(EventProceduresService $eventProceduresService)
    {
        $eventProceduresService->registerProcedure(
            'setStatus',
            ProcedureEntry::EVENT_TYPE_ORDER,
            ['de' => 'Setze Status auf 3', 'en' => 'Set status to 3'],
            Procedures::class . '@setStatus'
        );
    }
}