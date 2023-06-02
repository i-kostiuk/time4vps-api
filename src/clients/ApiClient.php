<?php

namespace Time4Vps\clients;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Time4Vps\common\Constants;

class ApiClient
{
    private static string $username;

    private static string $password;

    private Client $client;

    private Response $response;

    public function __construct($username, $password) {
        self::$username = $username;
        self::$password = $password;
    }

    public function __call($name, $arguments)
    {
        $this->clientInit();

        if (method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
            return $this->getResponse();
        } else {
            throw new \BadMethodCallException("Method $name does not exist.");
        }
    }

    private function clientInit() {
        $this->client = new Client([
            'base_uri' => 'https://billing.time4vps.com/api',
            'auth' => [self::$username, self::$password]
        ]);
    }

    private function getResponse() {
        return [
            'status_code' => $this->response->getStatusCode(),
            'body' => json_decode($this->response->getBody()->getContents())
        ];
    }

    private function getDetails() {
        $this->response = $this->client->get(Constants::API_URL_DETAILS);
    }

    private function setDetails(array $data) {

        if ($diff = array_diff(array_keys($data), Constants::SET_DETAILS_KEYS)) {
            throw new \Exception("Поля не підтримуються в АРІ: " . implode("", $diff));
        }

        $this->response = $this->client->put(Constants::API_URL_DETAILS, [
            'json' => $data
        ]);
    }

    private function getContacts() {
        $this->response = $this->client->get(Constants::API_URL_CONTACT);
    }

    private function getContactDetails(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_CONTACT_DETAILS));
    }

    private function getNotifications() {
        $this->response = $this->client->get(Constants::API_URL_NOTIFICATIONS);
    }

    private function getNotificationsNew() {
        $this->response = $this->client->get(Constants::API_URL_NOTIFICATIONS_NEW);
    }

    private function markNotificationsAsRead(int $id) {
        $this->response = $this->client->put(str_replace('[id]', $id, Constants::API_URL_NOTIFICATIONS_MARK_AS_READ));
    }

    private function getBalance() {
        $this->response = $this->client->get(Constants::API_URL_BALANCE);
    }

    private function getInvoices() {
        $this->response = $this->client->get(Constants::API_URL_INVOICE);
    }

    private function getInvoice(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_INVOICE_DETAILS));
    }

    private function getPayments() {
        $this->response = $this->client->get(Constants::API_URL_PAYMENT);
    }

    private function getPaymentsFees() {
        $this->response = $this->client->get(Constants::API_URL_PAYMENT_FEES);
    }

    private function getServices() {
        $this->response = $this->client->get(Constants::API_URL_SERVICE);
    }

    private function getServiceLabel(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_SERVICE_LABEL));
    }

    private function setServiceLabel(int $id, string $label) {
        $this->response = $this->client->post(str_replace('[id]', $id, Constants::API_URL_SERVICE_LABEL), [
            'json' => [
                "label" => $label
            ]
        ]);
    }

    private function getProductCategories() {
        $this->response = $this->client->get(Constants::API_URL_PRODUCT_CATEGORY);
    }

    private function getProductsInCategory(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_PRODUCT_IN_CATEGORY));
    }

    private function getProductDetails(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_PRODUCT_DETAILS));
    }

    private function getAvailableVps() {
        $this->response = $this->client->get(Constants::API_URL_AVAILABLE_VPS);
    }

    private function getDns() {
        $this->response = $this->client->get(Constants::API_URL_DNS);
    }

    private function getDnsDetails(int $service_id, int $zone_id) {
        $url = str_replace('[service_id]', $service_id, Constants::API_URL_DNS_DETAILS);
        $url = str_replace('[zone_id]', $zone_id, $url);
        $this->response = $this->client->get($url);
    }

    private function getCertificates() {
        $this->response = $this->client->get(Constants::API_URL_CERTIFICATE);
    }

    private function getServers() {
        $this->response = $this->client->get(Constants::API_URL_SERVER);
    }

    private function getServerDetails(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_SERVER_DETAILS));
    }

    private function getServerAvailableOsList(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_SERVER_AVAILABLE_OS_LIST));
    }

    private function getServerAdditionalIps(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_SERVER_ADDITIONAL_IPS));
    }

    private function getServerUsageHistory(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_SERVER_USAGE_HISTORY));
    }

    private function getScripts() {
        $this->response = $this->client->get(Constants::API_URL_SCRIPTS);
    }

    private function getScript(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_SCRIPT_DETAILS));
    }

    private function getVpnServers() {
        $this->response = $this->client->get(Constants::API_URL_VPN_SERVERS);
    }

    private function getVpnClients() {
        $this->response = $this->client->get(Constants::API_URL_VPN_CLIENTS);
    }

    private function getVpnLoginDetails() {
        $this->response = $this->client->get(Constants::API_URL_VPN_LOGIN_DETAILS);
    }

    private function getVpnUsageHistory(int $id) {
        $this->response = $this->client->get(str_replace('[id]', $id, Constants::API_URL_VPN_USAGE_HISTORY));
    }
}