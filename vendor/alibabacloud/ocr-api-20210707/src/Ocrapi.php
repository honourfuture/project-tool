<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAdvancedRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAdvancedResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAirItineraryRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAirItineraryResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextShrinkRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAcceptanceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAcceptanceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAccountLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAccountLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankCardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankCardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBasicRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBasicResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBirthCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBirthCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusShipTicketRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusShipTicketResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarNumberRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarNumberResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarVinCodeRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarVinCodeResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeChinesePassportRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeChinesePassportResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCommonPrintedInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCommonPrintedInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCosmeticProduceLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCosmeticProduceLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCovidTestReportRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCovidTestReportResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCtwoMedicalDeviceManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCtwoMedicalDeviceManageLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDocumentStructureRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDocumentStructureResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDrivingLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDrivingLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduFormulaRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduFormulaResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduOralCalculationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduOralCalculationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperCutRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperCutResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperOcrRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperOcrResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperStructedRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperStructedResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduQuestionOcrRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduQuestionOcrResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEnglishRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEnglishResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEstateCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEstateCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToHKRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToHKResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToMainlandRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToMainlandResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodManageLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodProduceLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodProduceLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHandwritingRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHandwritingResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHealthCodeRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHealthCodeResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHKIdcardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHKIdcardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHotelConsumeRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHotelConsumeResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHouseholdRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHouseholdResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeIdcardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeIdcardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalIdcardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalIdcardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeJanpaneseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeJanpaneseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeKoreanRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeKoreanResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeLatinRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeLatinResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceManageLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceProduceLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceProduceLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMixedInvoicesRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMixedInvoicesResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMultiLanguageRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMultiLanguageResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMultiLanguageShrinkRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeNonTaxInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeNonTaxInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePassportRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePassportResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePaymentRecordRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePaymentRecordResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePurchaseRecordRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePurchaseRecordResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeQuotaInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeQuotaInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRideHailingItineraryRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRideHailingItineraryResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRollTicketRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRollTicketResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRussianRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRussianResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeShoppingReceiptRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeShoppingReceiptResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardVersionIIRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardVersionIIResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTableOcrRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTableOcrResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxClearanceCertificateRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxClearanceCertificateResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxiInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxiInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeThaiRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeThaiResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTollInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTollInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTradeMarkCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTradeMarkCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTrainInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTrainInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeUsedCarInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeUsedCarInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleRegistrationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleRegistrationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeWaybillRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeWaybillResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyVATInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyVATInvoiceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ocrapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ocr-api', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param RecognizeAdvancedRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeAdvancedResponse
     */
    public function recognizeAdvancedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->noStamp)) {
            $query['NoStamp'] = $request->noStamp;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->paragraph)) {
            $query['Paragraph'] = $request->paragraph;
        }
        if (!Utils::isUnset($request->row)) {
            $query['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeAdvanced',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeAdvancedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeAdvancedRequest $request
     *
     * @return RecognizeAdvancedResponse
     */
    public function recognizeAdvanced($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAdvancedWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeAirItineraryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeAirItineraryResponse
     */
    public function recognizeAirItineraryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeAirItinerary',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeAirItineraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeAirItineraryRequest $request
     *
     * @return RecognizeAirItineraryResponse
     */
    public function recognizeAirItinerary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAirItineraryWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeAllTextRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeAllTextResponse
     */
    public function recognizeAllTextWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecognizeAllTextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->advancedConfig)) {
            $request->advancedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->advancedConfig, 'AdvancedConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->idCardConfig)) {
            $request->idCardConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->idCardConfig, 'IdCardConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->internationalIdCardConfig)) {
            $request->internationalIdCardConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->internationalIdCardConfig, 'InternationalIdCardConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->multiLanConfig)) {
            $request->multiLanConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->multiLanConfig, 'MultiLanConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->advancedConfigShrink)) {
            $query['AdvancedConfig'] = $request->advancedConfigShrink;
        }
        if (!Utils::isUnset($request->idCardConfigShrink)) {
            $query['IdCardConfig'] = $request->idCardConfigShrink;
        }
        if (!Utils::isUnset($request->internationalIdCardConfigShrink)) {
            $query['InternationalIdCardConfig'] = $request->internationalIdCardConfigShrink;
        }
        if (!Utils::isUnset($request->multiLanConfigShrink)) {
            $query['MultiLanConfig'] = $request->multiLanConfigShrink;
        }
        if (!Utils::isUnset($request->outputBarCode)) {
            $query['OutputBarCode'] = $request->outputBarCode;
        }
        if (!Utils::isUnset($request->outputCoordinate)) {
            $query['OutputCoordinate'] = $request->outputCoordinate;
        }
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->outputKVExcel)) {
            $query['OutputKVExcel'] = $request->outputKVExcel;
        }
        if (!Utils::isUnset($request->outputOricoord)) {
            $query['OutputOricoord'] = $request->outputOricoord;
        }
        if (!Utils::isUnset($request->outputQrcode)) {
            $query['OutputQrcode'] = $request->outputQrcode;
        }
        if (!Utils::isUnset($request->outputStamp)) {
            $query['OutputStamp'] = $request->outputStamp;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $tmpReq->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeAllText',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeAllTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeAllTextRequest $request
     *
     * @return RecognizeAllTextResponse
     */
    public function recognizeAllText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAllTextWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBankAcceptanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeBankAcceptanceResponse
     */
    public function recognizeBankAcceptanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBankAcceptance',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankAcceptanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeBankAcceptanceRequest $request
     *
     * @return RecognizeBankAcceptanceResponse
     */
    public function recognizeBankAcceptance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankAcceptanceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBankAccountLicenseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeBankAccountLicenseResponse
     */
    public function recognizeBankAccountLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBankAccountLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankAccountLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeBankAccountLicenseRequest $request
     *
     * @return RecognizeBankAccountLicenseResponse
     */
    public function recognizeBankAccountLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankAccountLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBankCardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBankCard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeBankCardRequest $request
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankCardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBasicRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeBasicResponse
     */
    public function recognizeBasicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBasic',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBasicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeBasicRequest $request
     *
     * @return RecognizeBasicResponse
     */
    public function recognizeBasic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBasicWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBirthCertificationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeBirthCertificationResponse
     */
    public function recognizeBirthCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBirthCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBirthCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeBirthCertificationRequest $request
     *
     * @return RecognizeBirthCertificationResponse
     */
    public function recognizeBirthCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBirthCertificationWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBusShipTicketRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeBusShipTicketResponse
     */
    public function recognizeBusShipTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBusShipTicket',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBusShipTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeBusShipTicketRequest $request
     *
     * @return RecognizeBusShipTicketResponse
     */
    public function recognizeBusShipTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBusShipTicketWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBusinessLicenseRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBusinessLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeBusinessLicenseRequest $request
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCarInvoiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeCarInvoiceResponse
     */
    public function recognizeCarInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCarInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeCarInvoiceRequest $request
     *
     * @return RecognizeCarInvoiceResponse
     */
    public function recognizeCarInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCarNumberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeCarNumberResponse
     */
    public function recognizeCarNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCarNumber',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeCarNumberRequest $request
     *
     * @return RecognizeCarNumberResponse
     */
    public function recognizeCarNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarNumberWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCarVinCodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeCarVinCodeResponse
     */
    public function recognizeCarVinCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCarVinCode',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarVinCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeCarVinCodeRequest $request
     *
     * @return RecognizeCarVinCodeResponse
     */
    public function recognizeCarVinCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarVinCodeWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeChinesePassportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeChinesePassportResponse
     */
    public function recognizeChinesePassportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeChinesePassport',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeChinesePassportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeChinesePassportRequest $request
     *
     * @return RecognizeChinesePassportResponse
     */
    public function recognizeChinesePassport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeChinesePassportWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCommonPrintedInvoiceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeCommonPrintedInvoiceResponse
     */
    public function recognizeCommonPrintedInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCommonPrintedInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCommonPrintedInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeCommonPrintedInvoiceRequest $request
     *
     * @return RecognizeCommonPrintedInvoiceResponse
     */
    public function recognizeCommonPrintedInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCommonPrintedInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCosmeticProduceLicenseRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecognizeCosmeticProduceLicenseResponse
     */
    public function recognizeCosmeticProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCosmeticProduceLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCosmeticProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeCosmeticProduceLicenseRequest $request
     *
     * @return RecognizeCosmeticProduceLicenseResponse
     */
    public function recognizeCosmeticProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCosmeticProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCovidTestReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeCovidTestReportResponse
     */
    public function recognizeCovidTestReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->multipleResult)) {
            $query['MultipleResult'] = $request->multipleResult;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCovidTestReport',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCovidTestReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeCovidTestReportRequest $request
     *
     * @return RecognizeCovidTestReportResponse
     */
    public function recognizeCovidTestReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCovidTestReportWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCtwoMedicalDeviceManageLicenseRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return RecognizeCtwoMedicalDeviceManageLicenseResponse
     */
    public function recognizeCtwoMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCtwoMedicalDeviceManageLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCtwoMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeCtwoMedicalDeviceManageLicenseRequest $request
     *
     * @return RecognizeCtwoMedicalDeviceManageLicenseResponse
     */
    public function recognizeCtwoMedicalDeviceManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCtwoMedicalDeviceManageLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeDocumentStructureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeDocumentStructureResponse
     */
    public function recognizeDocumentStructureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->noStamp)) {
            $query['NoStamp'] = $request->noStamp;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->paragraph)) {
            $query['Paragraph'] = $request->paragraph;
        }
        if (!Utils::isUnset($request->row)) {
            $query['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->useNewStyleOutput)) {
            $query['UseNewStyleOutput'] = $request->useNewStyleOutput;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeDocumentStructure',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeDocumentStructureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeDocumentStructureRequest $request
     *
     * @return RecognizeDocumentStructureResponse
     */
    public function recognizeDocumentStructure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDocumentStructureWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeDrivingLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeDrivingLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeDrivingLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeDrivingLicenseRequest $request
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDrivingLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEduFormulaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeEduFormulaResponse
     */
    public function recognizeEduFormulaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduFormula',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduFormulaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEduFormulaRequest $request
     *
     * @return RecognizeEduFormulaResponse
     */
    public function recognizeEduFormula($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduFormulaWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEduOralCalculationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeEduOralCalculationResponse
     */
    public function recognizeEduOralCalculationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduOralCalculation',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduOralCalculationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEduOralCalculationRequest $request
     *
     * @return RecognizeEduOralCalculationResponse
     */
    public function recognizeEduOralCalculation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduOralCalculationWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEduPaperCutRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeEduPaperCutResponse
     */
    public function recognizeEduPaperCutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cutType)) {
            $query['CutType'] = $request->cutType;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduPaperCut',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperCutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEduPaperCutRequest $request
     *
     * @return RecognizeEduPaperCutResponse
     */
    public function recognizeEduPaperCut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperCutWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEduPaperOcrRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeEduPaperOcrResponse
     */
    public function recognizeEduPaperOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->outputOricoord)) {
            $query['OutputOricoord'] = $request->outputOricoord;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduPaperOcr',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEduPaperOcrRequest $request
     *
     * @return RecognizeEduPaperOcrResponse
     */
    public function recognizeEduPaperOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperOcrWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEduPaperStructedRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeEduPaperStructedResponse
     */
    public function recognizeEduPaperStructedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduPaperStructed',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperStructedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEduPaperStructedRequest $request
     *
     * @return RecognizeEduPaperStructedResponse
     */
    public function recognizeEduPaperStructed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperStructedWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEduQuestionOcrRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeEduQuestionOcrResponse
     */
    public function recognizeEduQuestionOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduQuestionOcr',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduQuestionOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEduQuestionOcrRequest $request
     *
     * @return RecognizeEduQuestionOcrResponse
     */
    public function recognizeEduQuestionOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduQuestionOcrWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEnglishRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeEnglishResponse
     */
    public function recognizeEnglishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEnglish',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEnglishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEnglishRequest $request
     *
     * @return RecognizeEnglishResponse
     */
    public function recognizeEnglish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEnglishWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeEstateCertificationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeEstateCertificationResponse
     */
    public function recognizeEstateCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEstateCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEstateCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeEstateCertificationRequest $request
     *
     * @return RecognizeEstateCertificationResponse
     */
    public function recognizeEstateCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEstateCertificationWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeExitEntryPermitToHKRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeExitEntryPermitToHKResponse
     */
    public function recognizeExitEntryPermitToHKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeExitEntryPermitToHK',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeExitEntryPermitToHKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeExitEntryPermitToHKRequest $request
     *
     * @return RecognizeExitEntryPermitToHKResponse
     */
    public function recognizeExitEntryPermitToHK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExitEntryPermitToHKWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeExitEntryPermitToMainlandRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RecognizeExitEntryPermitToMainlandResponse
     */
    public function recognizeExitEntryPermitToMainlandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeExitEntryPermitToMainland',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeExitEntryPermitToMainlandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeExitEntryPermitToMainlandRequest $request
     *
     * @return RecognizeExitEntryPermitToMainlandResponse
     */
    public function recognizeExitEntryPermitToMainland($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExitEntryPermitToMainlandWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFoodManageLicenseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeFoodManageLicenseResponse
     */
    public function recognizeFoodManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeFoodManageLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeFoodManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeFoodManageLicenseRequest $request
     *
     * @return RecognizeFoodManageLicenseResponse
     */
    public function recognizeFoodManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFoodManageLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFoodProduceLicenseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeFoodProduceLicenseResponse
     */
    public function recognizeFoodProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeFoodProduceLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeFoodProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeFoodProduceLicenseRequest $request
     *
     * @return RecognizeFoodProduceLicenseResponse
     */
    public function recognizeFoodProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFoodProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeGeneralRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeGeneralResponse
     */
    public function recognizeGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeGeneral',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeGeneralRequest $request
     *
     * @return RecognizeGeneralResponse
     */
    public function recognizeGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeGeneralWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeHKIdcardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeHKIdcardResponse
     */
    public function recognizeHKIdcardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHKIdcard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHKIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeHKIdcardRequest $request
     *
     * @return RecognizeHKIdcardResponse
     */
    public function recognizeHKIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHKIdcardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeHandwritingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeHandwritingResponse
     */
    public function recognizeHandwritingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHandwriting',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHandwritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeHandwritingRequest $request
     *
     * @return RecognizeHandwritingResponse
     */
    public function recognizeHandwriting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHandwritingWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeHealthCodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeHealthCodeResponse
     */
    public function recognizeHealthCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHealthCode',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHealthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeHealthCodeRequest $request
     *
     * @return RecognizeHealthCodeResponse
     */
    public function recognizeHealthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHealthCodeWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeHotelConsumeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeHotelConsumeResponse
     */
    public function recognizeHotelConsumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHotelConsume',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHotelConsumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeHotelConsumeRequest $request
     *
     * @return RecognizeHotelConsumeResponse
     */
    public function recognizeHotelConsume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHotelConsumeWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeHouseholdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeHouseholdResponse
     */
    public function recognizeHouseholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isResidentPage)) {
            $query['IsResidentPage'] = $request->isResidentPage;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHousehold',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHouseholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeHouseholdRequest $request
     *
     * @return RecognizeHouseholdResponse
     */
    public function recognizeHousehold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHouseholdWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeIdcardRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeIdcardResponse
     */
    public function recognizeIdcardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->outputQualityInfo)) {
            $query['OutputQualityInfo'] = $request->outputQualityInfo;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeIdcard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeIdcardRequest $request
     *
     * @return RecognizeIdcardResponse
     */
    public function recognizeIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeIdcardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeInternationalBusinessLicenseRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RecognizeInternationalBusinessLicenseResponse
     */
    public function recognizeInternationalBusinessLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeInternationalBusinessLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeInternationalBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeInternationalBusinessLicenseRequest $request
     *
     * @return RecognizeInternationalBusinessLicenseResponse
     */
    public function recognizeInternationalBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInternationalBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeInternationalIdcardRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeInternationalIdcardResponse
     */
    public function recognizeInternationalIdcardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeInternationalIdcard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeInternationalIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeInternationalIdcardRequest $request
     *
     * @return RecognizeInternationalIdcardResponse
     */
    public function recognizeInternationalIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInternationalIdcardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeInvoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeInvoiceResponse
     */
    public function recognizeInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeInvoiceRequest $request
     *
     * @return RecognizeInvoiceResponse
     */
    public function recognizeInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeJanpaneseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeJanpaneseResponse
     */
    public function recognizeJanpaneseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeJanpanese',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeJanpaneseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeJanpaneseRequest $request
     *
     * @return RecognizeJanpaneseResponse
     */
    public function recognizeJanpanese($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeJanpaneseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeKoreanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeKoreanResponse
     */
    public function recognizeKoreanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeKorean',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeKoreanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeKoreanRequest $request
     *
     * @return RecognizeKoreanResponse
     */
    public function recognizeKorean($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeKoreanWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeLatinRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeLatinResponse
     */
    public function recognizeLatinWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeLatin',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeLatinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeLatinRequest $request
     *
     * @return RecognizeLatinResponse
     */
    public function recognizeLatin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeLatinWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeMedicalDeviceManageLicenseRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return RecognizeMedicalDeviceManageLicenseResponse
     */
    public function recognizeMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMedicalDeviceManageLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeMedicalDeviceManageLicenseRequest $request
     *
     * @return RecognizeMedicalDeviceManageLicenseResponse
     */
    public function recognizeMedicalDeviceManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMedicalDeviceManageLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeMedicalDeviceProduceLicenseRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RecognizeMedicalDeviceProduceLicenseResponse
     */
    public function recognizeMedicalDeviceProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMedicalDeviceProduceLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMedicalDeviceProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeMedicalDeviceProduceLicenseRequest $request
     *
     * @return RecognizeMedicalDeviceProduceLicenseResponse
     */
    public function recognizeMedicalDeviceProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMedicalDeviceProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeMixedInvoicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeMixedInvoicesResponse
     */
    public function recognizeMixedInvoicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMixedInvoices',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMixedInvoicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeMixedInvoicesRequest $request
     *
     * @return RecognizeMixedInvoicesResponse
     */
    public function recognizeMixedInvoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMixedInvoicesWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeMultiLanguageRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeMultiLanguageResponse
     */
    public function recognizeMultiLanguageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecognizeMultiLanguageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->languages)) {
            $request->languagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->languages, 'Languages', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->languagesShrink)) {
            $query['Languages'] = $request->languagesShrink;
        }
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $tmpReq->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMultiLanguage',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMultiLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeMultiLanguageRequest $request
     *
     * @return RecognizeMultiLanguageResponse
     */
    public function recognizeMultiLanguage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMultiLanguageWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeNonTaxInvoiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeNonTaxInvoiceResponse
     */
    public function recognizeNonTaxInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeNonTaxInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeNonTaxInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeNonTaxInvoiceRequest $request
     *
     * @return RecognizeNonTaxInvoiceResponse
     */
    public function recognizeNonTaxInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeNonTaxInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizePassportRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizePassportResponse
     */
    public function recognizePassportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizePassport',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizePassportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizePassportRequest $request
     *
     * @return RecognizePassportResponse
     */
    public function recognizePassport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePassportWithOptions($request, $runtime);
    }

    /**
     * @param RecognizePaymentRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizePaymentRecordResponse
     */
    public function recognizePaymentRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizePaymentRecord',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizePaymentRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizePaymentRecordRequest $request
     *
     * @return RecognizePaymentRecordResponse
     */
    public function recognizePaymentRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePaymentRecordWithOptions($request, $runtime);
    }

    /**
     * @param RecognizePurchaseRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizePurchaseRecordResponse
     */
    public function recognizePurchaseRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputMultiOrders)) {
            $query['OutputMultiOrders'] = $request->outputMultiOrders;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizePurchaseRecord',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizePurchaseRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizePurchaseRecordRequest $request
     *
     * @return RecognizePurchaseRecordResponse
     */
    public function recognizePurchaseRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePurchaseRecordWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeQuotaInvoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeQuotaInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeQuotaInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeQuotaInvoiceRequest $request
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeQuotaInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeRideHailingItineraryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeRideHailingItineraryResponse
     */
    public function recognizeRideHailingItineraryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeRideHailingItinerary',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeRideHailingItineraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeRideHailingItineraryRequest $request
     *
     * @return RecognizeRideHailingItineraryResponse
     */
    public function recognizeRideHailingItinerary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRideHailingItineraryWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeRollTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeRollTicketResponse
     */
    public function recognizeRollTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeRollTicket',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeRollTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeRollTicketRequest $request
     *
     * @return RecognizeRollTicketResponse
     */
    public function recognizeRollTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRollTicketWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeRussianRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeRussianResponse
     */
    public function recognizeRussianWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeRussian',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeRussianResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeRussianRequest $request
     *
     * @return RecognizeRussianResponse
     */
    public function recognizeRussian($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRussianWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeShoppingReceiptRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeShoppingReceiptResponse
     */
    public function recognizeShoppingReceiptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeShoppingReceipt',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeShoppingReceiptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeShoppingReceiptRequest $request
     *
     * @return RecognizeShoppingReceiptResponse
     */
    public function recognizeShoppingReceipt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeShoppingReceiptWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeSocialSecurityCardRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeSocialSecurityCardResponse
     */
    public function recognizeSocialSecurityCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeSocialSecurityCard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeSocialSecurityCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeSocialSecurityCardRequest $request
     *
     * @return RecognizeSocialSecurityCardResponse
     */
    public function recognizeSocialSecurityCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeSocialSecurityCardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeSocialSecurityCardVersionIIRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RecognizeSocialSecurityCardVersionIIResponse
     */
    public function recognizeSocialSecurityCardVersionIIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeSocialSecurityCardVersionII',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeSocialSecurityCardVersionIIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeSocialSecurityCardVersionIIRequest $request
     *
     * @return RecognizeSocialSecurityCardVersionIIResponse
     */
    public function recognizeSocialSecurityCardVersionII($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeSocialSecurityCardVersionIIWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTableOcrRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeTableOcrResponse
     */
    public function recognizeTableOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isHandWriting)) {
            $query['IsHandWriting'] = $request->isHandWriting;
        }
        if (!Utils::isUnset($request->lineLess)) {
            $query['LineLess'] = $request->lineLess;
        }
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->skipDetection)) {
            $query['SkipDetection'] = $request->skipDetection;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTableOcr',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTableOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeTableOcrRequest $request
     *
     * @return RecognizeTableOcrResponse
     */
    public function recognizeTableOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTableOcrWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTaxClearanceCertificateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RecognizeTaxClearanceCertificateResponse
     */
    public function recognizeTaxClearanceCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTaxClearanceCertificate',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTaxClearanceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeTaxClearanceCertificateRequest $request
     *
     * @return RecognizeTaxClearanceCertificateResponse
     */
    public function recognizeTaxClearanceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTaxClearanceCertificateWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTaxiInvoiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTaxiInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTaxiInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeTaxiInvoiceRequest $request
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTaxiInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeThaiRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeThaiResponse
     */
    public function recognizeThaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeThai',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeThaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeThaiRequest $request
     *
     * @return RecognizeThaiResponse
     */
    public function recognizeThai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeThaiWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTollInvoiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTollInvoiceResponse
     */
    public function recognizeTollInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTollInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTollInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeTollInvoiceRequest $request
     *
     * @return RecognizeTollInvoiceResponse
     */
    public function recognizeTollInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTollInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTradeMarkCertificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecognizeTradeMarkCertificationResponse
     */
    public function recognizeTradeMarkCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTradeMarkCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTradeMarkCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeTradeMarkCertificationRequest $request
     *
     * @return RecognizeTradeMarkCertificationResponse
     */
    public function recognizeTradeMarkCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTradeMarkCertificationWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTrainInvoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeTrainInvoiceResponse
     */
    public function recognizeTrainInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTrainInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTrainInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeTrainInvoiceRequest $request
     *
     * @return RecognizeTrainInvoiceResponse
     */
    public function recognizeTrainInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTrainInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeUsedCarInvoiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeUsedCarInvoiceResponse
     */
    public function recognizeUsedCarInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeUsedCarInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeUsedCarInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeUsedCarInvoiceRequest $request
     *
     * @return RecognizeUsedCarInvoiceResponse
     */
    public function recognizeUsedCarInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeUsedCarInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVehicleCertificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeVehicleCertificationResponse
     */
    public function recognizeVehicleCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeVehicleCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeVehicleCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeVehicleCertificationRequest $request
     *
     * @return RecognizeVehicleCertificationResponse
     */
    public function recognizeVehicleCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleCertificationWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVehicleLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeVehicleLicenseResponse
     */
    public function recognizeVehicleLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeVehicleLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeVehicleLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeVehicleLicenseRequest $request
     *
     * @return RecognizeVehicleLicenseResponse
     */
    public function recognizeVehicleLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVehicleRegistrationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeVehicleRegistrationResponse
     */
    public function recognizeVehicleRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeVehicleRegistration',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeVehicleRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeVehicleRegistrationRequest $request
     *
     * @return RecognizeVehicleRegistrationResponse
     */
    public function recognizeVehicleRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeWaybillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeWaybillResponse
     */
    public function recognizeWaybillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeWaybill',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeWaybillRequest $request
     *
     * @return RecognizeWaybillResponse
     */
    public function recognizeWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeWaybillWithOptions($request, $runtime);
    }

    /**
     * @param VerifyBusinessLicenseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyBusinessLicenseResponse
     */
    public function verifyBusinessLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        if (!Utils::isUnset($request->creditCode)) {
            $query['CreditCode'] = $request->creditCode;
        }
        if (!Utils::isUnset($request->legalPerson)) {
            $query['LegalPerson'] = $request->legalPerson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyBusinessLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyBusinessLicenseRequest $request
     *
     * @return VerifyBusinessLicenseResponse
     */
    public function verifyBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * @param VerifyVATInvoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return VerifyVATInvoiceResponse
     */
    public function verifyVATInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->invoiceCode)) {
            $query['InvoiceCode'] = $request->invoiceCode;
        }
        if (!Utils::isUnset($request->invoiceDate)) {
            $query['InvoiceDate'] = $request->invoiceDate;
        }
        if (!Utils::isUnset($request->invoiceNo)) {
            $query['InvoiceNo'] = $request->invoiceNo;
        }
        if (!Utils::isUnset($request->invoiceSum)) {
            $query['InvoiceSum'] = $request->invoiceSum;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyVATInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyVATInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyVATInvoiceRequest $request
     *
     * @return VerifyVATInvoiceResponse
     */
    public function verifyVATInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyVATInvoiceWithOptions($request, $runtime);
    }
}
