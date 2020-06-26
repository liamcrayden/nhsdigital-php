<?php

require_once('../../vendor/autoload.php');

use liamcrayden\NHSDigital\NHSCommentsAPI;
use liamcrayden\NHSDigital\Exceptions\InvalidSubscriptionKeyException;
use liamcrayden\NHSDigital\Exceptions\ConnectionFailureException;
use liamcrayden\NHSDigital\Exceptions\AccessDeniedException;

try {

    $nhs = new NHSCommentsAPI();
    $nhs->setSubscriptionKey('PUT-YOUR-SUBSCRIPTION-KEY-HERE');
    $publishers = $nhs->getPublishers();
    print_r( $publishers );

} catch (InvalidSubscriptionKeyException $e) {

    die( 'Could not set subscription key: ' . $e->getMessage() . PHP_EOL );

} catch (AccessDeniedException $e) {

    die( 'Authentication Failure: ' . $e->getMessage() . PHP_EOL );

} catch (ConnectionFailureException $e) {

    die( 'Connection Failure: ' . $e->getMessage() . PHP_EOL );

} catch ( \Exception $e ) {

    die( 'Exception: ' . $e->getMessage() . PHP_EOL );

}
