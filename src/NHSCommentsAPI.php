<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

NHS Comments API
Allows you to get comments, responses and ratings for organisations, along with
information about comment publishers.

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

use liamcrayden\NHSDigital\Models\Publisher;
use liamcrayden\NHSDigital\Models\Comment;
use liamcrayden\NHSDigital\Models\CommentVisit;
use liamcrayden\NHSDigital\Models\CommentResponse;

class NHSCommentsAPI extends NHSDigital
{

    /**
     * Gets a list of publishers, along with their IDs, logo URLs and website address.
     *
     * @return array An array of Publisher objects
     * @throws AccessDeniedException If the API request fails due to subscription key credentials
     * @throws ConnectionFailureException If the API request fails due to connectivity problems
     */
    public function getPublishers()
    {
        try {

            $response = $this->client->request(
                'GET',
                '/comments/publishers',
                [ 'headers'  => [ 'subscription-key' => $this->subscriptionKey ] ]
            )->getBody();
            $response = json_decode( $response, TRUE );

            $publishers = [];
            foreach( $response as $publisher )
            {
                $pub = new Publisher;
                $pub->fromStringArray($publisher);
                $publishers[] = $pub;
                unset($pub);
            }

            return $publishers;

        } catch (ClientException $e) {

            if ( $e->getCode() === 401 || $e->getCode() === 403)
                throw new AccessDeniedException( $e->getCode() );

            throw new ConnectionFailureException( $e->getMessage() );

        } catch (TransferException $e) {

            throw new ConnectionFailureException( $e->getMessage() );

        }

    }

    /**
     * Gets a comment by it's ID
     *
     * @return Comment A Comment object comprising of all the comments' properties
     * @throws AccessDeniedException If the API request fails due to subscription key credentials
     * @throws ConnectionFailureException If the API request fails due to connectivity problems
     * @throws InvalidCommentIDException If the comment ID supplied is not in the expected format
     * @throws ResourceNotFoundException If the comment ID does not exist
     */
    public function getCommentByID( $commentID )
    {

        if ( strlen( $commentID ) <> 36 )
            throw new InvalidCommentIDException( $commentID );

        try {

            $response = $this->client->request(
                'GET',
                '/comments/CommentById?CommentID=' . urlencode( $commentID ),
                [ 'headers'  => [ 'subscription-key' => $this->subscriptionKey ] ]
            )->getBody();
            $response = json_decode( $response, TRUE );
            return $this->populateComment( $response['comments'][0] );

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
     * Gets aggregated ratings for an Organisation identified by its ODS Code.
     *
     * @return array An array of rating objects containing question ID, average score, total score and total number of ratings
     * @throws AccessDeniedException If the API request fails due to subscription key credentials
     * @throws ConnectionFailureException If the API request fails due to connectivity problems
     * @throws InvalidOrganisationException If the ODS Code supplied is not in the expected format
     */
    public function getRatingsForOrganisation( $odsCode )
    {
        if ( strlen( $odsCode ) < 3 )
            throw new InvalidOrganisationException( $odsCode );

        try {

            $response = $this->client->request(
                'GET',
                '/comments/Ratings?ODSCode=' . urlencode( $odsCode ),
                [ 'headers'  => [ 'subscription-key' => $this->subscriptionKey ] ]
            )->getBody();
            $response = json_decode( $response );

            if ( is_object( $response ) && isset( $response->aggregatedRatings ) )
            {
                return $response->aggregatedRatings;
            } else {
                return array();
            }

            $publishers = [];
            foreach( $response as $publisher )
            {
                $pub = new Publisher;
                $pub->fromStringArray($publisher);
                $publishers[] = $pub;
                unset($pub);
            }

            return $publishers;

        } catch (ClientException $e) {

            if ( $e->getCode() === 401 || $e->getCode() === 403)
                throw new AccessDeniedException( $e->getCode() );

            throw new ConnectionFailureException( $e->getMessage() );

        } catch (TransferException $e) {

            throw new ConnectionFailureException( $e->getMessage() );

        }

    }

    /**
     * Gets published comments for an Organisation identified by its ODS Code.
     *
     * @return array An array of rating objects containing question ID, average score, total score and total number of ratings
     * @throws AccessDeniedException If the API request fails due to subscription key credentials
     * @throws ConnectionFailureException If the API request fails due to connectivity problems
     * @throws InvalidOrganisationException If the ODS Code supplied is not in the expected format
     */
    public function getCommentsForOrganisation( $odsCode )
    {
        if ( strlen( $odsCode ) < 3 )
            throw new InvalidOrganisationException( $odsCode );

        try {

            $response = $this->client->request(
                'GET',
                '/comments/Comments?ODSCode=' . urlencode( $odsCode ),
                [ 'headers'  => [ 'subscription-key' => $this->subscriptionKey ] ]
            )->getBody();
            $response = json_decode( $response, TRUE );

            $comments = [];
            foreach( $response['comments'] as $comment )
            {
                $comments[] = $this->populateComment($comment);
            }

            return $comments;

        } catch (ClientException $e) {

            if ( $e->getCode() === 401 || $e->getCode() === 403)
                throw new AccessDeniedException( $e->getCode() );

            throw new ConnectionFailureException( $e->getMessage() );

        } catch (TransferException $e) {

            throw new ConnectionFailureException( $e->getMessage() );

        }

    }

    /**
     * Gets published comments for an Organisation identified by its ODS Code.
     *
     * @return array An array of rating objects containing question ID, average score, total score and total number of ratings
     * @throws AccessDeniedException If the API request fails due to subscription key credentials
     * @throws ConnectionFailureException If the API request fails due to connectivity problems
     */
    public function getCommentsByOrgType( $orgType, $page = 1 )
    {

        try {

            $response = $this->client->request(
                'GET',
                '/comments/Comments?Page=' . $page . '&OrgType=' . urlencode( $orgType ),
                [ 'headers'  => [ 'subscription-key' => $this->subscriptionKey ] ]
            )->getBody();
            $response = json_decode( $response, TRUE );

            $comments = [];
            foreach( $response['comments'] as $comment )
            {
                $com = new Comment;
                $com->fromStringArray($comment['comment']);
                $comments[] = $com;
                unset($com);
            }

            return $comments;

        } catch (ClientException $e) {

            if ( $e->getCode() === 401 || $e->getCode() === 403)
                throw new AccessDeniedException( $e->getCode() );

            throw new ConnectionFailureException( $e->getMessage() );

        } catch (TransferException $e) {

            throw new ConnectionFailureException( $e->getMessage() );

        }

    }

    /**
     * Shorthand method of populating a Comment object with its associated CommentVisit and
     * CommentResponse objects.
     *
     * @return Comment A Comment object comprising of all the comments' properties
     */
    private function populateComment( $response )
    {
        $comment = new Comment;
        $comment->fromStringArray($response['comment']);

        $visit = new CommentVisit;
        $visit->fromStringArray($response['comment']['visit']);
        $comment->visit = $visit;
        unset($visit);

        if ( isset($response['response']) && !is_null($response['response']) )
        {
            $reply = new CommentResponse;
            $reply->fromStringArray($response['response']);
            $comment->response = $reply;
            unset($reply);
        }

        return $comment;
    }

}
