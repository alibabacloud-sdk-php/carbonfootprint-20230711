<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\QueryCarbonTrackResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The service code.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The carbon emissions within the specified time range, in kgCO₂e.
     *
     * @example 1.23
     *
     * @var float
     */
    public $quotaValue;

    /**
     * @description The region in which the cloud service resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The date when the statistics are collected, which is a timestamp in milliseconds.
     *
     * @example 1672502400000
     *
     * @var int
     */
    public $statisticsDate;

    /**
     * @description The ID of the RAM user.
     *
     * @example 251538859557084260
     *
     * @var string
     */
    public $subUid;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1665635164411336
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'productCode'    => 'ProductCode',
        'quotaValue'     => 'QuotaValue',
        'region'         => 'Region',
        'statisticsDate' => 'StatisticsDate',
        'subUid'         => 'SubUid',
        'uid'            => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->statisticsDate) {
            $res['StatisticsDate'] = $this->statisticsDate;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StatisticsDate'])) {
            $model->statisticsDate = $map['StatisticsDate'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
