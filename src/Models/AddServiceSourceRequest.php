<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest\ingressOptionsRequest;
use AlibabaCloud\Tea\Model;

class AddServiceSourceRequest extends Model
{
    /**
     * @description The language in which the returned information is displayed. Valid values:
     *
     *   zh-CN: Chinese. This is the default value.
     *   en-US: English.
     *   ja: Japanese.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The endpoint.
     *
     * @example c9ad2a0717032427e920754e25b49e3b5
     *
     * @var string
     */
    public $address;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-c70622ff52fe49beb29bea9a6f52****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The list of service groups.
     *
     * @var string[]
     */
    public $groupList;

    /**
     * @description The Ingress configuration.
     *
     * @var ingressOptionsRequest
     */
    public $ingressOptionsRequest;

    /**
     * @description The name.
     *
     * >  The parameter value varies based on the source type.
     *
     *   If Type is set to K8S, this parameter specifies the name of the ACK cluster.
     *
     *   If Type is set to NACOS, this parameter specifies the ID of the instance.
     *
     * @example istio
     *
     * @var string
     */
    public $name;

    /**
     * @description An array of service root paths.
     *
     * @var string[]
     */
    public $pathList;

    /**
     * @description The service source.
     *
     *   K8S: ACK cluster
     *   MSE: Nacos instance
     *
     * @example K8S, MSE
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the service source. Valid values:
     *
     *   K8S: ACK cluster
     *   NACOS: Nacos instance
     *
     * @example K8S, NACOS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'        => 'AcceptLanguage',
        'address'               => 'Address',
        'gatewayUniqueId'       => 'GatewayUniqueId',
        'groupList'             => 'GroupList',
        'ingressOptionsRequest' => 'IngressOptionsRequest',
        'name'                  => 'Name',
        'pathList'              => 'PathList',
        'source'                => 'Source',
        'type'                  => 'Type',
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
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->groupList) {
            $res['GroupList'] = $this->groupList;
        }
        if (null !== $this->ingressOptionsRequest) {
            $res['IngressOptionsRequest'] = null !== $this->ingressOptionsRequest ? $this->ingressOptionsRequest->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pathList) {
            $res['PathList'] = $this->pathList;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddServiceSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = $map['GroupList'];
            }
        }
        if (isset($map['IngressOptionsRequest'])) {
            $model->ingressOptionsRequest = ingressOptionsRequest::fromMap($map['IngressOptionsRequest']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PathList'])) {
            if (!empty($map['PathList'])) {
                $model->pathList = $map['PathList'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
