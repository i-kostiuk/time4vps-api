<?php

namespace Time4Vps\common;

class Constants
{
    const API_URL_DETAILS = 'api/details';
    const API_URL_CONTACT = 'api/contact';
    const API_URL_CONTACT_DETAILS = 'api/contact/[id]';
    const API_URL_NOTIFICATIONS = 'api/notifications';
    const API_URL_NOTIFICATIONS_NEW = 'api/notifications/new';
    const API_URL_NOTIFICATIONS_MARK_AS_READ = 'api/notifications/[id]/ack';
    const API_URL_BALANCE = 'api/balance';
    const API_URL_INVOICE = 'api/invoice';
    const API_URL_INVOICE_DETAILS = 'api/invoice/[id]';
    const API_URL_PAYMENT = 'api/payment';
    const API_URL_PAYMENT_FEES = 'api/payment/fees';
    const API_URL_SERVICE = 'api/service';
    const API_URL_SERVICE_LABEL = 'api/service/[id]/label';
    const API_URL_PRODUCT_CATEGORY = 'api/category';
    const API_URL_PRODUCT_IN_CATEGORY = 'api/category/[id]/product';
    const API_URL_PRODUCT_DETAILS = 'api/order/[id]';
    const API_URL_AVAILABLE_VPS = 'api/category/available/vps';
    const API_URL_DNS = 'api/dns';
    const API_URL_DNS_DETAILS = 'api/service/[service_id]/dns/[zone_id]';
    const API_URL_CERTIFICATE = 'api/certificate';
    const API_URL_SERVER = 'api/server';
    const API_URL_SERVER_DETAILS = 'api/server/[id]';
    const API_URL_SERVER_AVAILABLE_OS_LIST = 'api/server/[id]/oses';
    const API_URL_SERVER_ADDITIONAL_IPS = 'api/server/[id]/ips';
    const API_URL_SERVER_USAGE_HISTORY = 'api/server/[id]/history';
    const API_URL_SCRIPTS = 'api/scripts';
    const API_URL_SCRIPT_DETAILS = 'api/scripts/[id]';
    const API_URL_VPN_SERVERS = 'api/vpn/servers';
    const API_URL_VPN_CLIENTS = 'api/vpn/clients';
    const API_URL_VPN_LOGIN_DETAILS = 'api/vpn/logindetails';
    const API_URL_VPN_USAGE_HISTORY = 'api/vpn/[id]/history';

    const SET_DETAILS_KEYS = [
        "type",
        "companyname",
        "companyregistrationnumber",
        "vateu",
        "email",
        "firstname",
        "lastname",
        "country",
        "address1",
        "city",
        "state",
        "postcode",
        "phonenumber",
        "emarketing"
    ];
}