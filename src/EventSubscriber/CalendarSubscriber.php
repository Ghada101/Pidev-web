<?php

namespace App\EventSubscriber;

use App\Repository\ReservetableRepository;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    private $reservetableRepository;
    private $router;

    public function __construct(
        ReservetableRepository $reservetableRepository,
        UrlGeneratorInterface $router
    ) {
        $this->reservetableRepository = $reservetableRepository;
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        $startdate = $calendar->getStartdate();
        $enddate= $calendar->setEnddate();
        $filters = $calendar->getFilters();

        // Modify the query to fit to your entity and needs
        // Change booking.beginAt by your start date property
        $reservetable = $this->reservetableRepository
            ->createQueryBuilder('reservetable')
            ->where('reservetable.startdate BETWEEN :start and :end OR reservetable.enddate BETWEEN :start and :end')
            ->setParameter('startdate', $startdate->format('Y-m-d H:i:s'))
            ->setParameter('enddate', $enddate->format('Y-m-d H:i:s'))
            ->getQuery()
            ->getResult()
        ;

        foreach ($reservations as $reservetable) {
            // this create the events with your data (here booking data) to fill calendar
            $reservetableEvent = new Event(
                $reservetable->getTitle(),
                $reservetable->getStartdate(),
                $reservetable->getEnddate() // If the end date is null or not defined, a all day event is created.
            );

            /*
             * Add custom options to events
             *
             * For more information see: https://fullcalendar.io/docs/event-object
             * and: https://github.com/fullcalendar/fullcalendar/blob/master/src/core/options.ts
             */

            $reservetableEvent->setOptions([
                'backgroundColor' => 'red',
                'borderColor' => 'red',
            ]);
            $reservetableEvent->addOption(
                
                $this->router->generate('app_reservetable_show', [
                    'idreserve' => $reservetable->getIdreserve(),
                ])
            );

            // finally, add the event to the CalendarEvent to fill the calendar
            $calendar->addEvent($reservetableEvent);
        }
    }
}