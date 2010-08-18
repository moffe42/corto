<?php

/**
 * Array with servers hosted by Cortis, each server has the URL it is hosted on as array key.
 * example:
 * $hostedEntities = array('hosted'=> array('http://localhost/cortis.php/main'=>...));
 *
 * Note that the servername (or entitycode for hosted entity) MUST NOT contain an _ as this is used
 * to specify pre-selecting an IdP like so:
 * http://localhost/cortis.php/main_abc123/SingleSignOnService
 * (don't show a discovery/Where Are You From screen,
 *  but just use the remote http://localhost/cortis.php/myidp/SingleSignOnService)
 *
 * As value it can have an array with one or more of the following configuration options:
 *
 * - infilter
 * Valid PHP callback to use for filtering incoming SAML2 Assertion attributes (IdP -> Corto)
 *
 * - outfilter
 * Valid PHP callback to use for filtering outgoing SAML2 Assertion attributes (Corto -> SP)
 *
 * - keepsession
 * Cache the assertion in the session, so every new request to the same IdP for that session will simply reuse the old
 * assertion.
 *
 * - IDPList
 *
 * - idp
 * Use only this IdP
 *
 * NOTE: When Corto is using the hosted server, it will add the following properties:
 *
 * - AuthnRequestsSigned
 * Require all Authentication Requests to be signed
 *
 * - certificates
 *   - public
 *   - private
 *
 * * EntityId
 * The full URL of the entity (http://localhost/corto.php)
 *
 * * EntityCode
 * The key for the entity (example: 'main')
 */

$hostedEntities = array(
    
);