<?php

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @category  PayIntelligent
 * @package   PayIntelligent_RatePAY
 * @copyright (C) 2011 PayIntelligent GmbH  <http://www.payintelligent.de/>
 * @license	http://www.gnu.org/licenses/  GNU General Public License 3
 */
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                  => 'UTF-8',
    'SHOP_MODULE_GROUP_PI_RATEPAY_GENERAL'     => 'Allgemein',
    'SHOP_MODULE_GROUP_PI_RATEPAY_GERMANY'     => 'Deutschland',
    'SHOP_MODULE_GROUP_PI_RATEPAY_AUSTRIA'     => 'Österreich',
    'SHOP_MODULE_GROUP_PI_RATEPAY_SWITZERLAND' => 'Schweiz',
    'SHOP_MODULE_GROUP_PI_RATEPAY_NETHERLAND'  => 'Niederlande',
    'SHOP_MODULE_blRPLogging'                   => 'Vorgänge protokollieren',
    'SHOP_MODULE_blRPAutoPaymentConfirm'        => 'Auto Payment Confirm',
    'SHOP_MODULE_sRPDeviceFingerprintSnippetId' => 'Device Fingerprint Snippet-Id',
    'SHOP_MODULE_blRPInvoiceActive'             => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPInvoiceSandbox'            => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPInvoiceProfileId'           => 'Profil ID',
    'SHOP_MODULE_sRPInvoiceSecret'              => 'Security Code',
    'SHOP_MODULE_blRPInstallmentActive'         => 'Ratepay Ratenzahlung aktiv',
    'SHOP_MODULE_blRPInstallmentSandbox'        => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPInstallmentProfileId'       => 'Profil ID',
    'SHOP_MODULE_sRPInstallmentSecret'          => 'Security Code',
    'SHOP_MODULE_sRPInstallmentSettlement'              => 'Settlement methods',
    'SHOP_MODULE_sRPInstallmentSettlement_debit'        => 'Only debit',
    'SHOP_MODULE_sRPInstallmentSettlement_banktransfer' => 'Only bank transfer',
    'SHOP_MODULE_sRPInstallmentSettlement_both'         => 'Both',
    'SHOP_MODULE_blRPInstallment0Active'         => 'Ratepay 0% Financing aktiv',
    'SHOP_MODULE_blRPInstallment0Sandbox'        => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPInstallment0ProfileId'       => 'Profil ID',
    'SHOP_MODULE_sRPInstallment0Secret'          => 'Security Code',
    'SHOP_MODULE_sRPInstallment0Settlement'              => 'Settlement methods',
    'SHOP_MODULE_sRPInstallment0Settlement_debit'        => 'Only debit',
    'SHOP_MODULE_sRPInstallment0Settlement_banktransfer' => 'Only bank transfer',
    'SHOP_MODULE_sRPInstallment0Settlement_both'         => 'Both',
    'SHOP_MODULE_blRPElvActive'                 => 'Ratepay SEPA-Lastschrift aktiv',
    'SHOP_MODULE_blRPElvSandbox'                => 'Sandbox (Testmodus)',
    'SHOP_MODULE_blRPElvIbanOnly'               => 'Only allow IBAN',
    'SHOP_MODULE_sRPElvProfileId'               => 'Profil ID',
    'SHOP_MODULE_sRPElvSecret'                  => 'Security Code',
    'SHOP_MODULE_blRPAustriaInvoice'            => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPAustriaInvoiceSandbox'     => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaInvoiceProfileId'    => 'Profil ID',
    'SHOP_MODULE_sRPAustriaInvoiceSecret'       => 'Security Code',
    'SHOP_MODULE_blRPAustriaInstallment'        => 'Ratepay Ratenzahlung aktiv',
    'SHOP_MODULE_blRPAustriaInstallmentSandbox' => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaInstallmentProfileId'=> 'Profil ID',
    'SHOP_MODULE_sRPAustriaInstallmentSecret'   => 'Security Code',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement'              => 'Settlement methods',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement_debit'        => 'Only debit',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement_banktransfer' => 'Only bank transfer',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement_both'         => 'Both',
    'SHOP_MODULE_blRPAustriaInstallment0'        => 'Ratepay 0% Financing aktiv',
    'SHOP_MODULE_blRPAustriaInstallment0Sandbox' => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaInstallment0ProfileId'=> 'Profil ID',
    'SHOP_MODULE_sRPAustriaInstallment0Secret'   => 'Security Code',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement'              => 'Settlement methods',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement_debit'        => 'Only debit',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement_banktransfer' => 'Only bank transfer',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement_both'         => 'Both',
    'SHOP_MODULE_blRPAustriaElv'                => 'Ratepay SEPA-Lastschrift aktiv',
    'SHOP_MODULE_blRPAustriaElvSandbox'         => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaElvProfileId'        => 'Profil ID',
    'SHOP_MODULE_sRPAustriaElvSecret'           => 'Security Code',
    'SHOP_MODULE_blRPSwitzerlandInvoice'        => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPSwitzerlandInvoiceSandbox' => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPSwitzerlandInvoiceProfileId'=> 'Profil ID',
    'SHOP_MODULE_sRPSwitzerlandInvoiceSecret'   => 'Security Code',
    'SHOP_MODULE_blRPNetherlandInvoice'         => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPNetherlandInvoiceSandbox'  => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPNetherlandInvoiceProfileId' => 'Profil ID',
    'SHOP_MODULE_sRPNetherlandInvoiceSecret'    => 'Security Code',
    'SHOP_MODULE_blRPNetherlandElv'             => 'Ratepay SEPA-Lastschrift aktiv',
    'SHOP_MODULE_blRPNetherlandElvSandbox'      => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPNetherlandElvProfileId'     => 'Profil ID',
    'SHOP_MODULE_sRPNetherlandElvSecret'        => 'Security Code',
    'PI_RATEPAY_CONFIGTEST_INVOICE'             => 'Verbindungstest für Ratepay Rechnung',
    'PI_RATEPAY_CONFIGTEST_INSTALLMENT'         => 'Verbindungstest für Ratepay Ratenzahlung',
    'PI_RATEPAY_CONFIGTEST_INSTALLMENT0'         => 'Verbindungstest für Ratepay 0% Financing',
    'PI_RATEPAY_CONFIGTEST_ELV'                 => 'Verbindungstest für Ratepay SEPA-Lastschrift',
    'PI_RATEPAY_RATEPAY'                       => 'Ratepay',
    'PI_RATEPAY_RECHNUNG'                      => 'Ratepay Rechnung',
    'PI_RATEPAY_ELV'                           => 'Ratepay SEPA-Lastschrift',
    'PI_RATEPAY_RATE'                          => 'Ratepay Rate',
    'PI_RATEPAY_DETAILS'                       => 'Details',
    'PI_RATEPAY_WHITELABEL'                    => "Whitelabel",
    'PI_RATEPAY_LOGGING'                       => "Logging",
    'PI_RATEPAY_LOGGING_ENTRY'                 => "Logentry",
    'PI_RATEPAY_LOGGING_ID'                    => "ID",
    'PI_RATEPAY_LOGGING_ORDERNUMBER'           => "Ordernumber",
    'PI_RATEPAY_LOGGING_TRANSACTIONID'         => "Transactionnumber",
    'PI_RATEPAY_LOGGING_PAYMENTMETHOD'         => "Paymentmethod",
    'PI_RATEPAY_LOGGING_PAYMENTTYPE'           => "Operation type",
    'PI_RATEPAY_LOGGING_PAYMENTSUBTYPE'        => "Operation subtype",
    'PI_RATEPAY_LOGGING_RESULT_CODE'           => "Result-Code",
    'PI_RATEPAY_LOGGING_REFERENCE'             => "Reference",
    'PI_RATEPAY_LOGGING_FIRST_NAME'            => "Name",
    'PI_RATEPAY_LOGGING_LAST_NAME'             => "Surname",
    'PI_RATEPAY_LOGGING_RESULT'                => "Result",
    'PI_RATEPAY_LOGGING_REQUEST'               => "Request",
    'PI_RATEPAY_LOGGING_RESPONSE'              => "Response",
    'PI_RATEPAY_LOGGING_DATE'                  => "Date",
    'PI_RATEPAY_LOGGING_DAYS'                  => "Days",
    'PI_RATEPAY_LOGGING_DELETE'                => "Delete",
    'PI_RATEPAY_LOGGING_DELETE_CONFIRM'        => "Are you sure that you want to delete all logentries older than ",
    'PI_RATEPAY_LOGGING_DELETE_CONFIRM2'       => " days?",
    'PI_RATEPAY_LOGGING_TEXTDAYS'              => "Delete all entries whichare older than ",
    'PI_RATEPAY_LOGGING_SUCCESS'               => "Deleting was successfull.",
    'PI_RATEPAY_LOGGING_REASON'                => "Reason",
    'PI_RATEPAY_LOGGING_REASON_CODE'           => "Reason-Code",
    'PI_RATEPAY_LOGGING_STATUS'                => "Status",
    'PI_RATEPAY_LOGGING_STATUS_CODE'           => "Status-Code",
    'PI_RATEPAY_NODETAILS'                     => 'No Ratepay Payment.',
    'PI_RATEPAY_CONNECTED'                     => 'Connected',
    'PI_RATEPAY_DISCONNECTED'                  => 'Not connected',
    'PI_RATEPAY_UNAVAILABLE'                   => 'Not available',
    'PI_RATEPAY_ARTICLENR'                     => "Art.-No.",
    'PI_RATEPAY_ARTICLENAME'                   => "Description",
    'PI_RATEPAY_UNITPRICE'                     => "Unitprice (Netto)",
    'PI_RATEPAY_TOTALPRICE'                    => "Totalprice (Brutto)",
    'PI_RATEPAY_ORDERED'                       => "Ordered",
    'PI_RATEPAY_SHIPPED'                       => "Delivered",
    'PI_RATEPAY_CANCELLED'                     => "Cancelled",
    'PI_RATEPAY_RETURNED'                      => "Returned",
    'PI_RATEPAY_TAX'                           => "Tax",
    'PI_RATEPAY_QUANTITY'                      => "Quantity",
    'PI_RATEPAY_SHIPPING'                      => "ship",
    'PI_RATEPAY_CANCELLING'                    => "cancel",
    'PI_RATEPAY_KOMMA'                         => ",",
    'PI_RATEPAY_RETURNING'                     => "return",
    'PI_RATEPAY_RETURNING_TABLE_HEAD'          => "Retoure",
    'PI_RATEPAY_VOUCHER'                       => "create credit",
    'PI_RATEPAY_VALUE'                         => "Value",
    'PI_RATEPAY_HISTORY'                       => "History",
    'PI_RATEPAY_CONFIRMDELIVER'                => "Delivery",
    'PI_RATEPAY_SHIPPING_TABLE_HEAD'           => "Delivery/Cancellation",
    'PI_RATEPAY_GOODWILL'                      => "Credit Memo",
    'PI_RATEPAY_RETURN'                        => "Return",
    'PI_RATEPAY_CANCELLATION'                  => "Cancellation",
    'PI_RATEPAY_PARTIALRETURN'                 => "Partial return",
    'PI_RATEPAY_FULLRETURN'                    => "Full return",
    'PI_RATEPAY_PARTIALCANCELLATION'           => "Partial cancellation",
    'PI_RATEPAY_FULLCANCELLATION'              => "Full cancellation",
    'PI_RATEPAY_ACTION'                        => "Action",
    'PI_RATEPAY_DATE'                          => "Date",
    'PI_RATEPAY_SUCCESSPARTIALCANCELLATION'    => "Partial cancellation was successfull.",
    'PI_RATEPAY_SUCCESSFULLCANCELLATION'       => "Full cancellation was successfull.",
    'PI_RATEPAY_SUCCESSPARTIALRETURN'          => "Partial return was successfull.",
    'PI_RATEPAY_SUCCESSFULLRETURN'             => "Full return was successfull.",
    'PI_RATEPAY_SUCCESSDELIVERY'               => "Delivery was successfull.",
    'PI_RATEPAY_SUCCESSVOUCHER'                => "Voucher was successfull.",
    'PI_RATEPAY_ERRORPARTIALCANCELLATION'      => "Partial cancellation was not successfull.",
    'PI_RATEPAY_ERRORFULLCANCELLATION'         => "Full cancellation was not successfull.",
    'PI_RATEPAY_ERRORPARTIALRETURN'            => "Partial return was not successfull.",
    'PI_RATEPAY_ERRORFULLRETURN'               => "Full return was not successfull.",
    'PI_RATEPAY_ERRORDELIVERY'                 => "Delivery was not successfull.",
    'PI_RATEPAY_ERRORVOUCHER'                  => "Voucher was not successfull.",
    'PI_RATEPAY_ERRORTYPING'                   => "Wrong input. Input was reseted. Please provide only numbers, which are not exceeding the prefilled value.",
    'PI_RATEPAY_ADMIN_MENU_CONFIGURATION'      => "Installment Configuration",
    'PI_RATEPAY_ADMIN_MENU_PROFILES'           => "Profiles",
    'PI_RATEPAY_PROFILE_DETAILS'               => "Profile details",
    'PI_RATEPAY_RECHNUNG_SETTINGS_DUEDATE'     => "Due in",
    'PI_RATEPAY_RECHNUNG_SETTINGS_DUEDATE_DAY' => "Days",
    'PI_RATEPAY_RATE_PAYMENTFIRSTDAY'          => "Activate payment due date for customer",
    'PI_RATEPAY_ELV_SETTINGS'                  => "Lastschrift Einstellungen",
    'PI_RATEPAY_ELV_SETTINGS_TITLE'            => "Ratepay SEPA-Lastschrift Einstellungen",
    'PI_RATEPAY_SAVEBANKDATA'                  => "Save bank data (encrypted)",
    'PI_RATEPAY_ACTIVATE_ELV'                  => "Lastschrift für Rate aktivieren",
    'PI_RATEPAY_CONFIGSAVESUCCESS'             => "The configuration has been updated successfully.",
);