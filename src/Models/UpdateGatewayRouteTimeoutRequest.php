<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutRequest\timeoutJSON;
use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteTimeoutRequest extends Model
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
     * @description The ID of the gateway.
     *
     * @example 85
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-533290d279c1405f9628c64f7c8272ee
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the associated record.
     *
     * @example 567
     *
     * @var int
     */
    public $id;

    /**
     * @description The timeout period.
     *
     * @var timeoutJSON
     */
    public $timeoutJSON;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id' => 'Id',
        'timeoutJSON' => 'TimeoutJSON',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->timeoutJSON) {
            $res['TimeoutJSON'] = null !== $this->timeoutJSON ? $this->timeoutJSON->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteTimeoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TimeoutJSON'])) {
            $model->timeoutJSON = timeoutJSON::fromMap($map['TimeoutJSON']);
        }

        return $model;
    }
}
