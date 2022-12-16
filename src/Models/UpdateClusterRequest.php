<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterRequest extends Model
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
     * @description The alias of the cluster.
     *
     * @example cluster-1
     *
     * @var string
     */
    public $clusterAliasName;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-78v1l83****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The extended request parameter in the JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'clusterAliasName' => 'ClusterAliasName',
        'instanceId'       => 'InstanceId',
        'requestPars'      => 'RequestPars',
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
        if (null !== $this->clusterAliasName) {
            $res['ClusterAliasName'] = $this->clusterAliasName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClusterAliasName'])) {
            $model->clusterAliasName = $map['ClusterAliasName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}
