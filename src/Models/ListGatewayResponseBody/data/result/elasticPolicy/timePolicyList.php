<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\elasticPolicy;

use AlibabaCloud\Tea\Model;

class timePolicyList extends Model
{
    /**
     * @var int
     */
    public $desiredReplica;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desiredReplica' => 'DesiredReplica',
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desiredReplica) {
            $res['DesiredReplica'] = $this->desiredReplica;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timePolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesiredReplica'])) {
            $model->desiredReplica = $map['DesiredReplica'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}