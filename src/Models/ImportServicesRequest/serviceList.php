<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesRequest;

use AlibabaCloud\Tea\Model;

class serviceList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $ips;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @description 服务的端口
     *
     * @var int
     */
    public $servicePort;

    /**
     * @description 服务的协议版本
     *
     * @var string
     */
    public $serviceProtocol;
    protected $_name = [
        'groupName'       => 'GroupName',
        'ips'             => 'Ips',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'servicePort'     => 'ServicePort',
        'serviceProtocol' => 'ServiceProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }

        return $model;
    }
}
