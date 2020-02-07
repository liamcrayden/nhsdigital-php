<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

NHS Moderation API
Allows you to submit and check the status of comments and responses.

*/

namespace liamcrayden\NHSDigital;

use liamcrayden\NHSDigital\Exceptions\InvalidSubscriptionKeyException;
use liamcrayden\NHSDigital\Exceptions\AccessDeniedException;
use liamcrayden\NHSDigital\Exceptions\ConnectionFailureException;
use liamcrayden\NHSDigital\Exceptions\ResourceNotFoundException;
use liamcrayden\NHSDigital\Exceptions\NotImplementedException;

use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client;

use liamcrayden\NHSDigital\Models\CommentStatus;

class NHSModerationAPI extends NHSDigital
{

    /**
     * Gets a comment by it's ID
     *
     * @return Comment A Comment object comprising of all the comments' properties
     * @throws AccessDeniedException If the API request fails due to subscription key credentials
     * @throws ConnectionFailureException If the API request fails due to connectivity problems
     * @throws InvalidCommentIDException If the comment ID supplied is not in the expected format
     * @throws ResourceNotFoundException If the comment ID does not exist
     */
    public function getCommentStatus( $commentID )
    {

        if ( strlen( $commentID ) <> 36 )
            throw new InvalidCommentIDException( $commentID );

        try {

            $response = $this->client->request(
                'GET',
                '/moderation/comment/status?CommentID=' . urlencode( $commentID ),
                [ 'headers'  => [ 'subscription-key' => $this->subscriptionKey ] ]
            )->getBody();
            $response = json_decode( $response, TRUE );
            return $this->populateCommentStatus($response);

        } catch (ClientException $e) {

            if ( $e->getCode() === 401 || $e->getCode() === 403)
                throw new AccessDeniedException( $e->getCode() );

            if ( $e->getCode() === 404 )
                throw new ResourceNotFoundException( $e->getCode() );

            throw new ConnectionFailureException( $e->getMessage() );

        } catch (TransferException $e) {

            throw new ConnectionFailureException( $e->getMessage() );

        }

    }


    /**
     * Shorthand method of populating a CommentStatus object
     *
     * @return CommentStatus A CommentStatus object comprising of all the status properties
     */
    private function populateCommentStatus( $response )
    {
        //print_r($response); exit;
        $commentStatus = new CommentStatus;
        $commentStatus->fromStringArray($response);
        return $commentStatus;
    }

}
