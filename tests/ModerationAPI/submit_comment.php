<?php

require_once('../../vendor/autoload.php');

use liamcrayden\NHSDigital\NHSModerationAPI;
use liamcrayden\NHSDigital\Models\DraftComment as Comment;
use liamcrayden\NHSDigital\Models\CommentVisit;
use liamcrayden\NHSDigital\Exceptions\InvalidSubscriptionKeyException;
use liamcrayden\NHSDigital\Exceptions\ConnectionFailureException;
use liamcrayden\NHSDigital\Exceptions\AccessDeniedException;
use liamcrayden\NHSDigital\Exceptions\ResourceNotFoundException;

try {

    $nhs = new NHSModerationAPI();
    $nhs->setSubscriptionKey('PUT-YOUR-SUBSCRIPTION-KEY-HERE');

    $comment = new Comment;
    $comment->setAuthor('test@example.com');
    $comment->setScreenName('Mr. Test');
    $comment->setTitle('Test Comment');
    $comment->setCommentText('This is just a test, please ignore.')
    $comment->setPublishersCommentRef('123456');
    $comment->setPublisherID('PUT-YOUR-PUBLISHER-ID-HERE');
    $comment->setCommentOriginalURL('https://example.com/my/comment/123456');
    $comment->setIPAddress('1.2.3.4');
    $comment->setODSCode('V12345');
    $comment->addRating( ['Question' => '10004', 'Rating' => 5] );

    $visit = new CommentVisit;
    $visit->setMonth('2');
    $visit->setYear('2019');

    $comment->setVisit($visit);
    print_r ( $nhs->submitComment($comment) );

} catch (InvalidSubscriptionKeyException $e) {

    die( 'Could not set subscription key: ' . $e->getMessage() . PHP_EOL );

} catch (AccessDeniedException $e) {

    die( 'Authentication Failure: ' . $e->getMessage() . PHP_EOL );

} catch (ConnectionFailureException $e) {

    die( 'Connection Failure: ' . $e->getMessage() . PHP_EOL );

} catch (\Exception $e) {

    die( $e->getMessage() . PHP_EOL );

}
