<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
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
     * @description The billing method.
     *
     * Valid values:
     *
     *   PREPAY
     *
     * <!-- -->
     *
     *   POSTPAY
     *
     * <!-- -->
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The engine specifications. Valid values:
     *
     * \[Professional Edition]
     *
     *   `MSE_SC_2_4_60_c`: 2 vCPUs and 4 GB of memory
     *   `MSE_SC_1_2_60_c`: 1 vCPU and 2 GB of memory
     *   `MSE_SC_4_8_60_c`: 4 vCPUs and 8 GB of memory
     *   `MSE_SC_8_16_60_c`: 8 vCPUs and 16 GB of memory
     *   `MSE_SC_16_32_60_c`: 16 vCPUs and 32 GB of memory
     *
     * \[Developer Edition]
     *
     *   `MSE_SC_1_2_60_c`: 1 vCPU and 2 GB of memory
     *   `MSE_SC_2_4_60_c`: 2 vCPUs and 4 GB of memory
     *
     * @example MSE_SC_2_4_60_c
     *
     * @var string
     */
    public $clusterSpecification;

    /**
     * @description The type of the instance. Valid values: ZooKeeper and Nacos-Ans.
     *
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The engine version of the instance. Valid values:
     *
     * \[Professional version]
     *
     *   `NACOS_2_0_0`: Nacos 2.0.0
     *   `ZooKeeper_3_8_0`: ZooKeeper 3.8.0
     *
     * \[Developer Edition]
     *
     *   `NACOS_2_0_0`: Nacos 2.0.0
     *   `ZooKeeper_3_8_0`: ZooKeeper 3.8.0
     *
     * @example NACOS_2_0_0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description The network connection type. Valid values:
     *
     *   slb
     *   eni
     *
     * @example slb
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description The type of the disk. Valid values:
     *
     *   alicloud-disk-ssd
     *   alicloud-disk-essd-pl1
     *
     * @example alicloud-disk-ssd
     *
     * @deprecated
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Specifies whether to enable Internet access (Elastic IP Address) if ConnectionType is set to `single_eni`.
     *
     * @var bool
     */
    public $eipEnabled;

    /**
     * @description The number of nodes in the instance. Valid values: 1 to 9.
     *
     * \[Professional Edition]
     *
     *   The number of nodes in an instance is greater than or equal to 3 and must be an odd number.
     *
     * \[Developer Edition]
     *
     *   Only one node can be deployed for an instance.
     *
     * @example 3
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The name of the MSE instance.
     *
     * @example tanshuyingtest001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Configure this parameter unless otherwise specified. Valid values:
     *
     *   `mse_pro`: Professional Edition
     *   `mse_dev`: Developer Edition.
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description The network type of the MSE instance. Valid values:
     *
     *   `privatenet`: VPC
     *   `pubnet`: Internet
     *
     * @example privatenet
     *
     * @var string
     */
    public $netType;

    /**
     * @description The specifications of the internal-facing SLB instance. Valid values:
     *
     *   `slb.s1.small`
     *   `slb.s3.medium`
     *
     * @example slb.s1.small
     *
     * @deprecated
     *
     * @var string
     */
    public $privateSlbSpecification;

    /**
     * @description The public bandwidth. Unit: Mbit/s. This parameter is required.\
     * Valid values: 0 to 5000. A value of 0 indicates no access to the Internet.
     * @example 0
     *
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @description The specifications of the Internet-facing Server Load Balancer (SLB) instance. Valid values:
     *
     *   `slb.s1.small`
     *   `slb.s3.medium`
     *
     * @example slb.s1.small
     *
     * @deprecated
     *
     * @var string
     */
    public $pubSlbSpecification;

    /**
     * @description The region where the instance resides. Examples:
     *
     *   `cn-hangzhou`: China (Hangzhou)
     *   `cn-beijing`: China (Beijing)
     *   `cn-shanghai`: China (Shanghai)
     *   `cn-zhangjiakou`: China (Zhangjiakou)
     *   `cn-shenzhen`: China (Shenzhen)
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description The ID of the resource group. For the details of resource groups, see [View basic information of a resource group](~~457230~~).
     *
     * @example rg-aekzcqmoay3dlyq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the security group to which the instance belongs. This parameter is valid only when the ConnectionType parameter is set to `single_eni`.
     *
     * Valid values:
     *
     *   enterprise
     *   normal
     *
     * @var string
     */
    public $securityGroupType;

    /**
     * @description The list of the tags that you want to add.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp17opt4v18sto39k****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1t50e045b5g7i3p****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'acceptLanguage'          => 'AcceptLanguage',
        'chargeType'              => 'ChargeType',
        'clusterSpecification'    => 'ClusterSpecification',
        'clusterType'             => 'ClusterType',
        'clusterVersion'          => 'ClusterVersion',
        'connectionType'          => 'ConnectionType',
        'diskType'                => 'DiskType',
        'eipEnabled'              => 'EipEnabled',
        'instanceCount'           => 'InstanceCount',
        'instanceName'            => 'InstanceName',
        'mseVersion'              => 'MseVersion',
        'netType'                 => 'NetType',
        'privateSlbSpecification' => 'PrivateSlbSpecification',
        'pubNetworkFlow'          => 'PubNetworkFlow',
        'pubSlbSpecification'     => 'PubSlbSpecification',
        'region'                  => 'Region',
        'requestPars'             => 'RequestPars',
        'resourceGroupId'         => 'ResourceGroupId',
        'securityGroupType'       => 'SecurityGroupType',
        'tag'                     => 'Tag',
        'vSwitchId'               => 'VSwitchId',
        'vpcId'                   => 'VpcId',
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
        if (null !== $this->clusterSpecification) {
            $res['ClusterSpecification'] = $this->clusterSpecification;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->eipEnabled) {
            $res['EipEnabled'] = $this->eipEnabled;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->privateSlbSpecification) {
            $res['PrivateSlbSpecification'] = $this->privateSlbSpecification;
        }
        if (null !== $this->pubNetworkFlow) {
            $res['PubNetworkFlow'] = $this->pubNetworkFlow;
        }
        if (null !== $this->pubSlbSpecification) {
            $res['PubSlbSpecification'] = $this->pubSlbSpecification;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupType) {
            $res['SecurityGroupType'] = $this->securityGroupType;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
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
        if (isset($map['ClusterSpecification'])) {
            $model->clusterSpecification = $map['ClusterSpecification'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EipEnabled'])) {
            $model->eipEnabled = $map['EipEnabled'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['PrivateSlbSpecification'])) {
            $model->privateSlbSpecification = $map['PrivateSlbSpecification'];
        }
        if (isset($map['PubNetworkFlow'])) {
            $model->pubNetworkFlow = $map['PubNetworkFlow'];
        }
        if (isset($map['PubSlbSpecification'])) {
            $model->pubSlbSpecification = $map['PubSlbSpecification'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupType'])) {
            $model->securityGroupType = $map['SecurityGroupType'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
