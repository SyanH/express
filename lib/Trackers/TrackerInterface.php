<?php

namespace Cyy\Express\Trackers;

use Cyy\Express\Waybill;

interface TrackerInterface
{
    /**
     * Track a willbay and return traces
     *
     * @param Waybill $waybill
     * @return void
     * @throws \Cyy\Express\Exceptions\TrackingException
     */
    public function track(Waybill $waybill);

    static public function getSupportedExpresses();

    static public function isSupported($express);

    static public function getExpressCode($expressName);
}
