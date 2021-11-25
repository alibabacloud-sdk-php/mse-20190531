<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class RestartClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $podNameList;

    /**
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'instanceId'  => 'InstanceId',
        'podNameList' => 'PodNameList',
        'requestPars' => 'RequestPars',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->podNameList) {
            $res['PodNameList'] = $this->podNameList;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PodNameList'])) {
            $model->podNameList = $map['PodNameList'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}
