<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docLayouts;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docSpecialTexts;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docSubField;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\kvInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\mathInfos;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\paragraphInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qualityInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\rowInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\subImagePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\subImageRect;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo;
use AlibabaCloud\Tea\Model;

class subImages extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var barCodeInfo
     */
    public $barCodeInfo;

    /**
     * @var blockInfo
     */
    public $blockInfo;

    /**
     * @var docLayouts[]
     */
    public $docLayouts;

    /**
     * @var docSpecialTexts[]
     */
    public $docSpecialTexts;

    /**
     * @var docSubField[]
     */
    public $docSubField;

    /**
     * @var DataSubImagesFigureInfoValue[]
     */
    public $figureInfo;

    /**
     * @var kvInfo
     */
    public $kvInfo;

    /**
     * @var mathInfos[]
     */
    public $mathInfos;

    /**
     * @var newStyleData
     */
    public $newStyleData;

    /**
     * @var int
     */
    public $pageId;

    /**
     * @var pageInfos[]
     */
    public $pageInfos;

    /**
     * @var string
     */
    public $pageTitle;

    /**
     * @var paragraphInfo
     */
    public $paragraphInfo;

    /**
     * @var partInfos[]
     */
    public $partInfos;

    /**
     * @var qrCodeInfo
     */
    public $qrCodeInfo;

    /**
     * @var qualityInfo
     */
    public $qualityInfo;

    /**
     * @var rowInfo
     */
    public $rowInfo;

    /**
     * @var stampInfo
     */
    public $stampInfo;

    /**
     * @var int
     */
    public $subImageId;

    /**
     * @var subImagePoints[]
     */
    public $subImagePoints;

    /**
     * @var subImageRect
     */
    public $subImageRect;

    /**
     * @var tableInfo
     */
    public $tableInfo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'angle'           => 'Angle',
        'barCodeInfo'     => 'BarCodeInfo',
        'blockInfo'       => 'BlockInfo',
        'docLayouts'      => 'DocLayouts',
        'docSpecialTexts' => 'DocSpecialTexts',
        'docSubField'     => 'DocSubField',
        'figureInfo'      => 'FigureInfo',
        'kvInfo'          => 'KvInfo',
        'mathInfos'       => 'MathInfos',
        'newStyleData'    => 'NewStyleData',
        'pageId'          => 'PageId',
        'pageInfos'       => 'PageInfos',
        'pageTitle'       => 'PageTitle',
        'paragraphInfo'   => 'ParagraphInfo',
        'partInfos'       => 'PartInfos',
        'qrCodeInfo'      => 'QrCodeInfo',
        'qualityInfo'     => 'QualityInfo',
        'rowInfo'         => 'RowInfo',
        'stampInfo'       => 'StampInfo',
        'subImageId'      => 'SubImageId',
        'subImagePoints'  => 'SubImagePoints',
        'subImageRect'    => 'SubImageRect',
        'tableInfo'       => 'TableInfo',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->barCodeInfo) {
            $res['BarCodeInfo'] = null !== $this->barCodeInfo ? $this->barCodeInfo->toMap() : null;
        }
        if (null !== $this->blockInfo) {
            $res['BlockInfo'] = null !== $this->blockInfo ? $this->blockInfo->toMap() : null;
        }
        if (null !== $this->docLayouts) {
            $res['DocLayouts'] = [];
            if (null !== $this->docLayouts && \is_array($this->docLayouts)) {
                $n = 0;
                foreach ($this->docLayouts as $item) {
                    $res['DocLayouts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->docSpecialTexts) {
            $res['DocSpecialTexts'] = [];
            if (null !== $this->docSpecialTexts && \is_array($this->docSpecialTexts)) {
                $n = 0;
                foreach ($this->docSpecialTexts as $item) {
                    $res['DocSpecialTexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->docSubField) {
            $res['DocSubField'] = [];
            if (null !== $this->docSubField && \is_array($this->docSubField)) {
                $n = 0;
                foreach ($this->docSubField as $item) {
                    $res['DocSubField'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->figureInfo) {
            $res['FigureInfo'] = [];
            if (null !== $this->figureInfo && \is_array($this->figureInfo)) {
                foreach ($this->figureInfo as $key => $val) {
                    $res['FigureInfo'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->kvInfo) {
            $res['KvInfo'] = null !== $this->kvInfo ? $this->kvInfo->toMap() : null;
        }
        if (null !== $this->mathInfos) {
            $res['MathInfos'] = [];
            if (null !== $this->mathInfos && \is_array($this->mathInfos)) {
                $n = 0;
                foreach ($this->mathInfos as $item) {
                    $res['MathInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->newStyleData) {
            $res['NewStyleData'] = null !== $this->newStyleData ? $this->newStyleData->toMap() : null;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageInfos) {
            $res['PageInfos'] = [];
            if (null !== $this->pageInfos && \is_array($this->pageInfos)) {
                $n = 0;
                foreach ($this->pageInfos as $item) {
                    $res['PageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageTitle) {
            $res['PageTitle'] = $this->pageTitle;
        }
        if (null !== $this->paragraphInfo) {
            $res['ParagraphInfo'] = null !== $this->paragraphInfo ? $this->paragraphInfo->toMap() : null;
        }
        if (null !== $this->partInfos) {
            $res['PartInfos'] = [];
            if (null !== $this->partInfos && \is_array($this->partInfos)) {
                $n = 0;
                foreach ($this->partInfos as $item) {
                    $res['PartInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qrCodeInfo) {
            $res['QrCodeInfo'] = null !== $this->qrCodeInfo ? $this->qrCodeInfo->toMap() : null;
        }
        if (null !== $this->qualityInfo) {
            $res['QualityInfo'] = null !== $this->qualityInfo ? $this->qualityInfo->toMap() : null;
        }
        if (null !== $this->rowInfo) {
            $res['RowInfo'] = null !== $this->rowInfo ? $this->rowInfo->toMap() : null;
        }
        if (null !== $this->stampInfo) {
            $res['StampInfo'] = null !== $this->stampInfo ? $this->stampInfo->toMap() : null;
        }
        if (null !== $this->subImageId) {
            $res['SubImageId'] = $this->subImageId;
        }
        if (null !== $this->subImagePoints) {
            $res['SubImagePoints'] = [];
            if (null !== $this->subImagePoints && \is_array($this->subImagePoints)) {
                $n = 0;
                foreach ($this->subImagePoints as $item) {
                    $res['SubImagePoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subImageRect) {
            $res['SubImageRect'] = null !== $this->subImageRect ? $this->subImageRect->toMap() : null;
        }
        if (null !== $this->tableInfo) {
            $res['TableInfo'] = null !== $this->tableInfo ? $this->tableInfo->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['BarCodeInfo'])) {
            $model->barCodeInfo = barCodeInfo::fromMap($map['BarCodeInfo']);
        }
        if (isset($map['BlockInfo'])) {
            $model->blockInfo = blockInfo::fromMap($map['BlockInfo']);
        }
        if (isset($map['DocLayouts'])) {
            if (!empty($map['DocLayouts'])) {
                $model->docLayouts = [];
                $n                 = 0;
                foreach ($map['DocLayouts'] as $item) {
                    $model->docLayouts[$n++] = null !== $item ? docLayouts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DocSpecialTexts'])) {
            if (!empty($map['DocSpecialTexts'])) {
                $model->docSpecialTexts = [];
                $n                      = 0;
                foreach ($map['DocSpecialTexts'] as $item) {
                    $model->docSpecialTexts[$n++] = null !== $item ? docSpecialTexts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DocSubField'])) {
            if (!empty($map['DocSubField'])) {
                $model->docSubField = [];
                $n                  = 0;
                foreach ($map['DocSubField'] as $item) {
                    $model->docSubField[$n++] = null !== $item ? docSubField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FigureInfo'])) {
            $model->figureInfo = $map['FigureInfo'];
        }
        if (isset($map['KvInfo'])) {
            $model->kvInfo = kvInfo::fromMap($map['KvInfo']);
        }
        if (isset($map['MathInfos'])) {
            if (!empty($map['MathInfos'])) {
                $model->mathInfos = [];
                $n                = 0;
                foreach ($map['MathInfos'] as $item) {
                    $model->mathInfos[$n++] = null !== $item ? mathInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NewStyleData'])) {
            $model->newStyleData = newStyleData::fromMap($map['NewStyleData']);
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageInfos'])) {
            if (!empty($map['PageInfos'])) {
                $model->pageInfos = [];
                $n                = 0;
                foreach ($map['PageInfos'] as $item) {
                    $model->pageInfos[$n++] = null !== $item ? pageInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageTitle'])) {
            $model->pageTitle = $map['PageTitle'];
        }
        if (isset($map['ParagraphInfo'])) {
            $model->paragraphInfo = paragraphInfo::fromMap($map['ParagraphInfo']);
        }
        if (isset($map['PartInfos'])) {
            if (!empty($map['PartInfos'])) {
                $model->partInfos = [];
                $n                = 0;
                foreach ($map['PartInfos'] as $item) {
                    $model->partInfos[$n++] = null !== $item ? partInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QrCodeInfo'])) {
            $model->qrCodeInfo = qrCodeInfo::fromMap($map['QrCodeInfo']);
        }
        if (isset($map['QualityInfo'])) {
            $model->qualityInfo = qualityInfo::fromMap($map['QualityInfo']);
        }
        if (isset($map['RowInfo'])) {
            $model->rowInfo = rowInfo::fromMap($map['RowInfo']);
        }
        if (isset($map['StampInfo'])) {
            $model->stampInfo = stampInfo::fromMap($map['StampInfo']);
        }
        if (isset($map['SubImageId'])) {
            $model->subImageId = $map['SubImageId'];
        }
        if (isset($map['SubImagePoints'])) {
            if (!empty($map['SubImagePoints'])) {
                $model->subImagePoints = [];
                $n                     = 0;
                foreach ($map['SubImagePoints'] as $item) {
                    $model->subImagePoints[$n++] = null !== $item ? subImagePoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubImageRect'])) {
            $model->subImageRect = subImageRect::fromMap($map['SubImageRect']);
        }
        if (isset($map['TableInfo'])) {
            $model->tableInfo = tableInfo::fromMap($map['TableInfo']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
