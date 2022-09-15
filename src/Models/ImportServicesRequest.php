<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesRequest\serviceList;
use AlibabaCloud\Tea\Model;

class ImportServicesRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var serviceList[]
     */
    public $serviceList;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $tlsSetting;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'mseSessionId'    => 'MseSessionId',
        'serviceList'     => 'ServiceList',
        'sourceType'      => 'SourceType',
        'tlsSetting'      => 'TlsSetting',
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
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
        }
        if (null !== $this->serviceList) {
            $res['ServiceList'] = [];
            if (null !== $this->serviceList && \is_array($this->serviceList)) {
                $n = 0;
                foreach ($this->serviceList as $item) {
                    $res['ServiceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->tlsSetting) {
            $res['TlsSetting'] = $this->tlsSetting;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportServicesRequest
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
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
        }
        if (isset($map['ServiceList'])) {
            if (!empty($map['ServiceList'])) {
                $model->serviceList = [];
                $n                  = 0;
                foreach ($map['ServiceList'] as $item) {
                    $model->serviceList[$n++] = null !== $item ? serviceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TlsSetting'])) {
            $model->tlsSetting = $map['TlsSetting'];
        }

        return $model;
    }
}
