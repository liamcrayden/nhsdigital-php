<?php

require_once('../../vendor/autoload.php');

use liamcrayden\NHSDigital\NHSModerationAPI;
use liamcrayden\NHSDigital\Exceptions\InvalidSubscriptionKeyException;
use liamcrayden\NHSDigital\Exceptions\ConnectionFailureException;
use liamcrayden\NHSDigital\Exceptions\AccessDeniedException;
use liamcrayden\NHSDigital\Exceptions\ResourceNotFoundException;

try {

    $nhs = new NHSModerationAPI();
    $nhs->setSubscriptionKey('905559fdc26748d0afc8c3a1880ef525');
    $commentStatus = $nhs->getCommentStatus('6a1ac562-5fd6-e911-a812-000d3a7ed518');
    echo $commentStatus;

} catch (InvalidSubscriptionKeyException $e) {

    die( 'Could not set subscription key: ' . $e->getMessage() . PHP_EOL );

} catch (AccessDeniedException $e) {

    die( 'Authentication Failure: ' . $e->getMessage() . PHP_EOL );

} catch (ConnectionFailureException $e) {

    die( 'Connection Failure: ' . $e->getMessage() . PHP_EOL );

} catch (ResourceNotFoundException $e) {

    die( 'Comment not found: ' . $e->getMessage() . PHP_EOL );

}
