<?php

declare(strict_types=1);

namespace MusheAbdulHakim\GoHighLevel\Contracts\Resources\Calendars;

interface EventContract
{
    /**
     * Get Calendar Events
     *
     * @see https://highlevel.stoplight.io/docs/integrations/a83f44a3112a4-get-calendar-events
     */
    public function get(string $endTime, string $startTime, string $locationId, string $calendarId, array $params = []): array|string;

    /**
     * Get Blocked Slots
     *
     * @see https://highlevel.stoplight.io/docs/integrations/e31320c70cfde-get-blocked-slots
     */
    public function slots(string $endTime, string $locationId, string $startTime, string $calendarId, array $params = []): array|string;

    /**
     * Get appointment by ID
     *
     * @see https://highlevel.stoplight.io/docs/integrations/bc4114ff64e38-get-appointment
     */
    public function getAppointment(string $eventId): array|string;

    /**
     * Edit appointment by ID
     *
     * @see https://highlevel.stoplight.io/docs/integrations/3a1380a3a9df8-edit-appointment
     */
    public function ediAppointment(string $eventId, array $params = []): array|string;

    /**
     * Create Appointment
     *
     * @see https://highlevel.stoplight.io/docs/integrations/a192f863cad27-create-appointment
     */
    public function createAppointment(string $calendarId, string $locationId, string $contactId, string $startTime, array $params): array|string;

    /**
     * Create Block Slot
     *
     * @param  array  $params  = []
     *
     * @see https://highlevel.stoplight.io/docs/integrations/5a52896a68879-create-block-slot
     */
    public function createSlot(string $locationId, string $startTime, string $endTime, array $params = []): array|string;

    /**
     * Edit Block Slot
     *
     * @see https://highlevel.stoplight.io/docs/integrations/098186acbb8db-edit-block-slot
     */
    public function editSlot(string $eventId, array $params = []): array|string;

    /**
     * Delete Event by ID
     *
     *
     * @see https://highlevel.stoplight.io/docs/integrations/96b85108e6d3b-delete-event
     */
    public function delete(string $eventId): array|string;
}
