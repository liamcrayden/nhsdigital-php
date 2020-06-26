<?php

require_once('../../vendor/autoload.php');

use liamcrayden\NHSDigital\NHSModerationAPI;
use liamcrayden\NHSDigital\Models\DraftResponse as Response;
use liamcrayden\NHSDigital\Models\CommentVisit;
use liamcrayden\NHSDigital\Exceptions\InvalidSubscriptionKeyException;
use liamcrayden\NHSDigital\Exceptions\ConnectionFailureException;
use liamcrayden\NHSDigital\Exceptions\AccessDeniedException;
use liamcrayden\NHSDigital\Exceptions\ResourceNotFoundException;

try {

    $nhs = new NHSModerationAPI();
    $nhs->setSubscriptionKey('PUT-YOUR-SUBSCRIPTION-KEY-HERE');

    $response = new Response;
    $response->setAuthor('test@example.com');
    $response->setScreenName('Mr. Test');
    $response->setTitle('Test Comment');
    $response->setCommentText('This is just a test, please ignore.');
    $response->setPublishersCommentRef('123456');
    $response->setPublisherID('PUT-YOUR-PUBLISHER-ID-HERE');
    $response->setCommentOriginalURL('https://example.com/my/comment/123456');
    $response->setIPAddress('1.2.3.4');
    $response->setODSCode('V12345');
    $response->setRespondingToPublisherID('ORIGINAL-PUBLISHER-ID-HERE');
    $response->setRespondingToPublishersCommentRef('654321');
    print_r ( $nhs->submitResponse($response) );

} catch (InvalidSubscriptionKeyException $e) {

    die( 'Could not set subscription key: ' . $e->getMessage() . PHP_EOL );

} catch (AccessDeniedException $e) {

    die( 'Authentication Failure: ' . $e->getMessage() . PHP_EOL );

} catch (ConnectionFailureException $e) {

    die( 'Connection Failure: ' . $e->getMessage() . PHP_EOL );

} catch (\Exception $e) {

    die( 'Exception: ' . $e->getMessage() . PHP_EOL );

}
