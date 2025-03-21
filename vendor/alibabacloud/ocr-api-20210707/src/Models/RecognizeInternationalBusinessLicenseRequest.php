<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeInternationalBusinessLicenseRequest extends Model
{
    /**
     * @example India
     *
     * @var string
     */
    public $country;

    /**
     * @example https://www.example.com
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'country' => 'Country',
        'url'     => 'Url',
        'body'    => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeInternationalBusinessLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
