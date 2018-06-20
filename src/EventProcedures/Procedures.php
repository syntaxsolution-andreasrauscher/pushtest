<?php
namespace ProcedurePlugin\EventProcedures;
 
use Plenty\Modules\EventProcedures\Events\EventProceduresTriggered;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
 
class Procedures
{
    /**
     * @param EventProceduresTriggered $event
     * @return void
     */
    public function setStatus(EventProceduresTriggered $event)
    {
        $order = $event->getOrder();
        $orderRepository = pluginApp(OrderRepositoryContract::class);
        $orderRepository->updateOrder(['statusId' => 3], $order->id);
    }
}