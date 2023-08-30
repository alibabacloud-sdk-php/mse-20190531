<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class AddGatewayShrinkRequest extends Model
{
    /**
     * @description The data structure.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description 付费类型。
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Specifies whether to activate Tracing Analysis.
     *
     * @example false
     *
     * @var bool
     */
    public $enableHardwareAcceleration;

    /**
     * @description The tag of the gateway.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSls;

    /**
     * @description The sampling rate of Tracing Analysis. Valid values: \[1,100].
     *
     * @example false
     *
     * @var bool
     */
    public $enableXtrace;

    /**
     * @description Specifies whether to enable hardware acceleration.
     *
     * @example false
     *
     * @var bool
     */
    public $enterpriseSecurityGroup;

    /**
     * @description The ID of the secondary vSwitch.
     *
     * @example slb.s2.small
     *
     * @var string
     */
    public $internetSlbSpec;

    /**
     * @description The ID of the region.
     *
     * @example test-ceshi
     *
     * @var string
     */
    public $name;

    /**
     * @description The specifications of the internal-facing Server Load Balancer (SLB) instance. Valid values:
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The specifications of the Internet-facing SLB instance. Valid values:
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * @example 2
     *
     * @var int
     */
    public $replica;

    /**
     * @description 扩展字段。
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example rg-acfm34x43l*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example slb.s2.small
     *
     * @var string
     */
    public $slbSpec;

    /**
     * @description The number of nodes.
     *
     * @example MSE_GTW_2_4_200_c
     *
     * @var string
     */
    public $spec;

    /**
     * @description The tag object.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The node specifications. Valid values:
     *
     *   MSE_GTW\_16\_32\_200\_c(16C32G)
     *   MSE_GTW\_2\_4\_200\_c(2C4G)
     *   MSE_GTW\_4\_8\_200\_c(4C8G)
     *   MSE_GTW\_8\_16\_200\_c(8C16G)
     *
     * @example vsw-bp1q8th57frl5khj2li43
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Specifies whether to use an advanced security group.
     *
     * @example vsw-wz9bu6o5vsvitt5mrxo6s
     *
     * @var string
     */
    public $vSwitchId2;

    /**
     * @description The ID of the primary vSwitch.
     *
     * @example vpc-bp15mncnrtm83uauxd1xb
     *
     * @var string
     */
    public $vpc;

    /**
     * @description Specifies whether to activate Log Service.
     *
     * @example 10
     *
     * @var string
     */
    public $xtraceRatio;

    /**
     * @description 可用区信息。
     *
     * @var string
     */
    public $zoneInfoShrink;
    protected $_name = [
        'acceptLanguage'             => 'AcceptLanguage',
        'chargeType'                 => 'ChargeType',
        'enableHardwareAcceleration' => 'EnableHardwareAcceleration',
        'enableSls'                  => 'EnableSls',
        'enableXtrace'               => 'EnableXtrace',
        'enterpriseSecurityGroup'    => 'EnterpriseSecurityGroup',
        'internetSlbSpec'            => 'InternetSlbSpec',
        'name'                       => 'Name',
        'region'                     => 'Region',
        'replica'                    => 'Replica',
        'requestPars'                => 'RequestPars',
        'resourceGroupId'            => 'ResourceGroupId',
        'slbSpec'                    => 'SlbSpec',
        'spec'                       => 'Spec',
        'tag'                        => 'Tag',
        'vSwitchId'                  => 'VSwitchId',
        'vSwitchId2'                 => 'VSwitchId2',
        'vpc'                        => 'Vpc',
        'xtraceRatio'                => 'XtraceRatio',
        'zoneInfoShrink'             => 'ZoneInfo',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->enableHardwareAcceleration) {
            $res['EnableHardwareAcceleration'] = $this->enableHardwareAcceleration;
        }
        if (null !== $this->enableSls) {
            $res['EnableSls'] = $this->enableSls;
        }
        if (null !== $this->enableXtrace) {
            $res['EnableXtrace'] = $this->enableXtrace;
        }
        if (null !== $this->enterpriseSecurityGroup) {
            $res['EnterpriseSecurityGroup'] = $this->enterpriseSecurityGroup;
        }
        if (null !== $this->internetSlbSpec) {
            $res['InternetSlbSpec'] = $this->internetSlbSpec;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->slbSpec) {
            $res['SlbSpec'] = $this->slbSpec;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchId2) {
            $res['VSwitchId2'] = $this->vSwitchId2;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }
        if (null !== $this->xtraceRatio) {
            $res['XtraceRatio'] = $this->xtraceRatio;
        }
        if (null !== $this->zoneInfoShrink) {
            $res['ZoneInfo'] = $this->zoneInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewayShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EnableHardwareAcceleration'])) {
            $model->enableHardwareAcceleration = $map['EnableHardwareAcceleration'];
        }
        if (isset($map['EnableSls'])) {
            $model->enableSls = $map['EnableSls'];
        }
        if (isset($map['EnableXtrace'])) {
            $model->enableXtrace = $map['EnableXtrace'];
        }
        if (isset($map['EnterpriseSecurityGroup'])) {
            $model->enterpriseSecurityGroup = $map['EnterpriseSecurityGroup'];
        }
        if (isset($map['InternetSlbSpec'])) {
            $model->internetSlbSpec = $map['InternetSlbSpec'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SlbSpec'])) {
            $model->slbSpec = $map['SlbSpec'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchId2'])) {
            $model->vSwitchId2 = $map['VSwitchId2'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }
        if (isset($map['XtraceRatio'])) {
            $model->xtraceRatio = $map['XtraceRatio'];
        }
        if (isset($map['ZoneInfo'])) {
            $model->zoneInfoShrink = $map['ZoneInfo'];
        }

        return $model;
    }
}