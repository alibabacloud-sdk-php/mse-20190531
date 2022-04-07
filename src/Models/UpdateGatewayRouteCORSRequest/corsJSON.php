<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSRequest;

use AlibabaCloud\Tea\Model;

class corsJSON extends Model
{
    /**
     * @var bool
     */
    public $allowCredentials;

    /**
     * @var string
     */
    public $allowHeaders;

    /**
     * @var string
     */
    public $allowMethods;

    /**
     * @var string
     */
    public $allowOrigins;

    /**
     * @var string
     */
    public $exposeHeaders;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'allowCredentials' => 'AllowCredentials',
        'allowHeaders'     => 'AllowHeaders',
        'allowMethods'     => 'AllowMethods',
        'allowOrigins'     => 'AllowOrigins',
        'exposeHeaders'    => 'ExposeHeaders',
        'status'           => 'Status',
        'timeUnit'         => 'TimeUnit',
        'unitNum'          => 'UnitNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCredentials) {
            $res['AllowCredentials'] = $this->allowCredentials;
        }
        if (null !== $this->allowHeaders) {
            $res['AllowHeaders'] = $this->allowHeaders;
        }
        if (null !== $this->allowMethods) {
            $res['AllowMethods'] = $this->allowMethods;
        }
        if (null !== $this->allowOrigins) {
            $res['AllowOrigins'] = $this->allowOrigins;
        }
        if (null !== $this->exposeHeaders) {
            $res['ExposeHeaders'] = $this->exposeHeaders;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return corsJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCredentials'])) {
            $model->allowCredentials = $map['AllowCredentials'];
        }
        if (isset($map['AllowHeaders'])) {
            $model->allowHeaders = $map['AllowHeaders'];
        }
        if (isset($map['AllowMethods'])) {
            $model->allowMethods = $map['AllowMethods'];
        }
        if (isset($map['AllowOrigins'])) {
            $model->allowOrigins = $map['AllowOrigins'];
        }
        if (isset($map['ExposeHeaders'])) {
            $model->exposeHeaders = $map['ExposeHeaders'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}