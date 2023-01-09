<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteRetryShrinkRequest extends Model
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
     * @example 501
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-3f97e2989c344f35ab3fd62b19f1d10a
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the associated record.
     *
     * @example 508
     *
     * @var int
     */
    public $id;

    /**
     * @description The information about the retry policy.
     *
     * @var string
     */
    public $retryJSONShrink;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id'              => 'Id',
        'retryJSONShrink' => 'RetryJSON',
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
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->retryJSONShrink) {
            $res['RetryJSON'] = $this->retryJSONShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteRetryShrinkRequest
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
        if (isset($map['RetryJSON'])) {
            $model->retryJSONShrink = $map['RetryJSON'];
        }

        return $model;
    }
}
