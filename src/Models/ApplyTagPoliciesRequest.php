<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ApplyTagPoliciesRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     * - en: English
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the application.
     *
     * @example h5pohqu3gd@xxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to enable the routing rule.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Optional. The ID of the namespace.
     *
     * @example 12233****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The details of the routing rule.
     *
     * @example {
     * }
     * @var string
     */
    public $rules;

    /**
     * @description The source of the routing rule.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId'          => 'AppId',
        'enable'         => 'Enable',
        'namespaceId'    => 'NamespaceId',
        'region'         => 'Region',
        'rules'          => 'Rules',
        'source'         => 'Source',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyTagPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
