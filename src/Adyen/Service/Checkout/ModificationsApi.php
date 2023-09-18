<?php
/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 70
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\Checkout;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\Checkout\ObjectSerializer;

class ModificationsApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * ModificationsApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://checkout-test.adyen.com/v70");
    }

    /**
    * Cancel an authorised payment
    *
    * @param \Adyen\Model\Checkout\StandalonePaymentCancelRequest $standalonePaymentCancelRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\StandalonePaymentCancelResponse
    * @throws AdyenException
    */
    public function cancelAuthorisedPayment(\Adyen\Model\Checkout\StandalonePaymentCancelRequest $standalonePaymentCancelRequest, array $requestOptions = null): \Adyen\Model\Checkout\StandalonePaymentCancelResponse
    {
        $endpoint = $this->baseURL . "/cancels";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $standalonePaymentCancelRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\StandalonePaymentCancelResponse::class);
    }

    /**
    * Update an authorised amount
    *
    * @param string $paymentPspReference
    * @param \Adyen\Model\Checkout\PaymentAmountUpdateRequest $paymentAmountUpdateRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\PaymentAmountUpdateResponse
    * @throws AdyenException
    */
    public function updateAuthorisedAmount(string $paymentPspReference, \Adyen\Model\Checkout\PaymentAmountUpdateRequest $paymentAmountUpdateRequest, array $requestOptions = null): \Adyen\Model\Checkout\PaymentAmountUpdateResponse
    {
        $endpoint = $this->baseURL . str_replace(['{paymentPspReference}'], [$paymentPspReference], "/payments/{paymentPspReference}/amountUpdates");
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $paymentAmountUpdateRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\PaymentAmountUpdateResponse::class);
    }

    /**
    * Cancel an authorised payment
    *
    * @param string $paymentPspReference
    * @param \Adyen\Model\Checkout\PaymentCancelRequest $paymentCancelRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\PaymentCancelResponse
    * @throws AdyenException
    */
    public function cancelAuthorisedPaymentByPspReference(string $paymentPspReference, \Adyen\Model\Checkout\PaymentCancelRequest $paymentCancelRequest, array $requestOptions = null): \Adyen\Model\Checkout\PaymentCancelResponse
    {
        $endpoint = $this->baseURL . str_replace(['{paymentPspReference}'], [$paymentPspReference], "/payments/{paymentPspReference}/cancels");
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $paymentCancelRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\PaymentCancelResponse::class);
    }

    /**
    * Capture an authorised payment
    *
    * @param string $paymentPspReference
    * @param \Adyen\Model\Checkout\PaymentCaptureRequest $paymentCaptureRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\PaymentCaptureResponse
    * @throws AdyenException
    */
    public function captureAuthorisedPayment(string $paymentPspReference, \Adyen\Model\Checkout\PaymentCaptureRequest $paymentCaptureRequest, array $requestOptions = null): \Adyen\Model\Checkout\PaymentCaptureResponse
    {
        $endpoint = $this->baseURL . str_replace(['{paymentPspReference}'], [$paymentPspReference], "/payments/{paymentPspReference}/captures");
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $paymentCaptureRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\PaymentCaptureResponse::class);
    }

    /**
    * Refund a captured payment
    *
    * @param string $paymentPspReference
    * @param \Adyen\Model\Checkout\PaymentRefundRequest $paymentRefundRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\PaymentRefundResponse
    * @throws AdyenException
    */
    public function refundCapturedPayment(string $paymentPspReference, \Adyen\Model\Checkout\PaymentRefundRequest $paymentRefundRequest, array $requestOptions = null): \Adyen\Model\Checkout\PaymentRefundResponse
    {
        $endpoint = $this->baseURL . str_replace(['{paymentPspReference}'], [$paymentPspReference], "/payments/{paymentPspReference}/refunds");
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $paymentRefundRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\PaymentRefundResponse::class);
    }

    /**
    * Refund or cancel a payment
    *
    * @param string $paymentPspReference
    * @param \Adyen\Model\Checkout\PaymentReversalRequest $paymentReversalRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\PaymentReversalResponse
    * @throws AdyenException
    */
    public function refundOrCancelPayment(string $paymentPspReference, \Adyen\Model\Checkout\PaymentReversalRequest $paymentReversalRequest, array $requestOptions = null): \Adyen\Model\Checkout\PaymentReversalResponse
    {
        $endpoint = $this->baseURL . str_replace(['{paymentPspReference}'], [$paymentPspReference], "/payments/{paymentPspReference}/reversals");
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $paymentReversalRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\PaymentReversalResponse::class);
    }
}