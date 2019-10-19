<?php

require_once('../../vendor/autoload.php');

use liamcrayden\NHSDigital\NHSDigital;
use liamcrayden\NHSDigital\NHSCommentsAPI;
use liamcrayden\NHSDigital\Exceptions\InvalidSubscriptionKeyException;
use liamcrayden\NHSDigital\Exceptions\ConnectionFailureException;
use liamcrayden\NHSDigital\Exceptions\AccessDeniedException;
use liamcrayden\NHSDigital\Exceptions\ResourceNotFoundException;

try {

    $nhs = new NHSCommentsAPI();
    $nhs->setSubscriptionKey('PUT-YOUR-SUBSCRIPTION-KEY-HERE');
    $comments = $nhs->getCommentsByOrgType( NHSDigital::ORG_TYPE_OPTICIAN, 1);
    print_r( $comments );

} catch (InvalidSubscriptionKeyException $e) {

    die( 'Could not set subscription key: ' . $e->getMessage() . PHP_EOL );

} catch (AccessDeniedException $e) {

    die( 'Authentication Failure: ' . $e->getMessage() . PHP_EOL );

} catch (ConnectionFailureException $e) {

    die( 'Connection Failure: ' . $e->getMessage() . PHP_EOL );

} catch (ResourceNotFoundException $e) {

    die( 'Comment not found: ' . $e->getMessage() . PHP_EOL );

}
