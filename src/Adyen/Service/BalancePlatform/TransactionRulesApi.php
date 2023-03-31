<?php
/**
 * Configuration API
 *
 * The Configuration API enables you to create a platform where you can onboard your users as account holders and create balance accounts, cards, and business accounts.  ## Authentication Your Adyen contact will provide your API credential and an API key. To connect to the API, add an `X-API-Key` header with the API key as the value, for example:   ``` curl -H \"Content-Type: application/json\" \\ -H \"X-API-Key: YOUR_API_KEY\" \\ ... ```  Alternatively, you can use the username and password to connect to the API using basic authentication. For example:  ``` curl -H \"Content-Type: application/json\" \\ -U \"ws@BalancePlatform.YOUR_BALANCE_PLATFORM\":\"YOUR_WS_PASSWORD\" \\ ... ``` ## Versioning The Configuration API supports [versioning](https://docs.adyen.com/development-resources/versioning) using a version suffix in the endpoint URL. This suffix has the following format: \"vXX\", where XX is the version number.  For example: ``` https://balanceplatform-api-test.adyen.com/bcl/v2/accountHolders ``` ## Going live When going live, your Adyen contact will provide your API credential for the live environment. You can then use the API key or the username and password to send requests to `https://balanceplatform-api-live.adyen.com/bcl/v2`.
 *
 * The version of the OpenAPI document: 2
 * Contact: developer-experience@adyen.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\BalancePlatform;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\BalancePlatform\ObjectSerializer;

class TransactionRulesApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * TransactionRulesApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://balanceplatform-api-test.adyen.com/bcl/v2");
    }

    /**
    * Delete a transaction rule
    *
    * @param string $transactionRuleId
    * @param array $requestOptions
    * @return \Adyen\Model\BalancePlatform\TransactionRule
    * @throws AdyenException
    */
    public function deleteTransactionRule(string $transactionRuleId, array $requestOptions = null): \Adyen\Model\BalancePlatform\TransactionRule
    {
        $endpoint = $this->baseURL . str_replace(['{transactionRuleId}'], [$transactionRuleId], "/transactionRules/{transactionRuleId}");
        $response = $this->requestHttp($endpoint, strtolower('DELETE'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\TransactionRule::class);
    }

    /**
    * Get a transaction rule
    *
    * @param string $transactionRuleId
    * @param array $requestOptions
    * @return \Adyen\Model\BalancePlatform\TransactionRuleResponse
    * @throws AdyenException
    */
    public function getTransactionRule(string $transactionRuleId, array $requestOptions = null): \Adyen\Model\BalancePlatform\TransactionRuleResponse
    {
        $endpoint = $this->baseURL . str_replace(['{transactionRuleId}'], [$transactionRuleId], "/transactionRules/{transactionRuleId}");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\TransactionRuleResponse::class);
    }

    /**
    * Update a transaction rule
    *
    * @param string $transactionRuleId
    * @param \Adyen\Model\BalancePlatform\TransactionRuleInfo $transactionRuleInfo
    * @param array $requestOptions
    * @return \Adyen\Model\BalancePlatform\TransactionRule
    * @throws AdyenException
    */
    public function updateTransactionRule(string $transactionRuleId, \Adyen\Model\BalancePlatform\TransactionRuleInfo $transactionRuleInfo, array $requestOptions = null): \Adyen\Model\BalancePlatform\TransactionRule
    {
        $endpoint = $this->baseURL . str_replace(['{transactionRuleId}'], [$transactionRuleId], "/transactionRules/{transactionRuleId}");
        $response = $this->requestHttp($endpoint, strtolower('PATCH'), (array) $transactionRuleInfo->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\TransactionRule::class);
    }

    /**
    * Create a transaction rule
    *
    * @param \Adyen\Model\BalancePlatform\TransactionRuleInfo $transactionRuleInfo
    * @param array $requestOptions
    * @return \Adyen\Model\BalancePlatform\TransactionRule
    * @throws AdyenException
    */
    public function createTransactionRule(\Adyen\Model\BalancePlatform\TransactionRuleInfo $transactionRuleInfo, array $requestOptions = null): \Adyen\Model\BalancePlatform\TransactionRule
    {
        $endpoint = $this->baseURL . "/transactionRules";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $transactionRuleInfo->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\TransactionRule::class);
    }
}
