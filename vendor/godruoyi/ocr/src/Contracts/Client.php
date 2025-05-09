<?php

/*
 * This file is part of the godruoyi/ocr.
 *
 * (c) Godruoyi <gmail@godruoyi.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Godruoyi\OCR\Contracts;

use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

interface Client
{
    /**
     * Fire a ocr http request.
     *
     * @param string $url
     * @param mixed $images
     *
     * @throws RequestException
     */
    public function request($url, $images, array $options = []): ResponseInterface;
}
