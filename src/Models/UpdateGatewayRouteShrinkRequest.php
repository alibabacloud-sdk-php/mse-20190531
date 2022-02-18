<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $directResponseJSONShrink;

    /**
     * @var string
     */
    public $domainIdListJSON;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $predicatesShrink;

    /**
     * @var string
     */
    public $redirectJSONShrink;

    /**
     * @var int
     */
    public $routeOrder;

    /**
     * @var string
     */
    public $servicesShrink;
    protected $_name = [
        'acceptLanguage'           => 'AcceptLanguage',
        'destinationType'          => 'DestinationType',
        'directResponseJSONShrink' => 'DirectResponseJSON',
        'domainIdListJSON'         => 'DomainIdListJSON',
        'gatewayId'                => 'GatewayId',
        'gatewayUniqueId'          => 'GatewayUniqueId',
        'id'                       => 'Id',
        'name'                     => 'Name',
        'predicatesShrink'         => 'Predicates',
        'redirectJSONShrink'       => 'RedirectJSON',
        'routeOrder'               => 'RouteOrder',
        'servicesShrink'           => 'Services',
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
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->directResponseJSONShrink) {
            $res['DirectResponseJSON'] = $this->directResponseJSONShrink;
        }
        if (null !== $this->domainIdListJSON) {
            $res['DomainIdListJSON'] = $this->domainIdListJSON;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->predicatesShrink) {
            $res['Predicates'] = $this->predicatesShrink;
        }
        if (null !== $this->redirectJSONShrink) {
            $res['RedirectJSON'] = $this->redirectJSONShrink;
        }
        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }
        if (null !== $this->servicesShrink) {
            $res['Services'] = $this->servicesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['DirectResponseJSON'])) {
            $model->directResponseJSONShrink = $map['DirectResponseJSON'];
        }
        if (isset($map['DomainIdListJSON'])) {
            $model->domainIdListJSON = $map['DomainIdListJSON'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Predicates'])) {
            $model->predicatesShrink = $map['Predicates'];
        }
        if (isset($map['RedirectJSON'])) {
            $model->redirectJSONShrink = $map['RedirectJSON'];
        }
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['Services'])) {
            $model->servicesShrink = $map['Services'];
        }

        return $model;
    }
}
