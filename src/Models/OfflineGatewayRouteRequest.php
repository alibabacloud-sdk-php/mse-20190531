<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class OfflineGatewayRouteRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-77e1153db6e14c0a8b1fae20bcb89ca5
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the route.
     *
     * @example 645
     *
     * @var string
     */
    public $routeId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'routeId'         => 'RouteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OfflineGatewayRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }

        return $model;
    }
}
