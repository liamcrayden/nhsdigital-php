<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

Comment Model

*/

namespace liamcrayden\NHSDigital\Models;

use liamcrayden\NHSDigital\Exceptions\NotImplementedException;

class Comment extends Model
{
    /**
     * The ID of the publisher
     *
     * @property string commentId
     */

    /**
     * The reference associated with this comment
     *
     * @property string commentRef
     */

    /**
     * The ID of a published response for this comment, if one exists
     *
     * @property string responseID
     */

    /**
     * The ODS code of the Organisation that this comment belongs to
     *
     * @property string odsCode
     */

    /**
     * The absolute URL where the original publishers comment can be found
     *
     * @property string commentOriginalURL
     */

    /**
     * The title of the comment
     *
     * @property string title
     */

    /**
     * The actual text that comprises the comment
     *
     * @property string commentText
     */

    /**
     * A timestamp representing when this comment was submitted by the publisher
     *
     * @property \DateTimeInterface dateSubmitted
     */

    /**
     * A timestamp representing when this comment was last updated
     *
     * @property \DateTimeInterface lastUpdated
     */

    /**
     * The sentiment score
     *
     * @property float sentimentScore
     */

    /**
     * The department that this comment relates to. Appears to be redundant.
     *
     * @property string department
     */

    /**
     * The ID of the publisher who submitted this comment
     *
     * @property string publisherID
     */

    /**
     * The reference or identifier that the publisher gave this comment
     *
     * @property string publishersCommentRef
     */

    /**
     * The name of the author who wrote this comment as it should be displayed on-screen
     *
     * @property string screenName
     */

    /**
     * The current status of this comment
     *
     * @property string status
     */

    /**
     * Determines whether or not the 'Report this comment' link should be removed from this comment
     *
     * @property bool removeReportLink
     */

    /**
     * An array of ratings, each comprising of a question ID and rating value
     *
     * @property array ratings
     */

    /**
     * A object comprising two properties - month and year - representing the month and year of the visit this comment relates to
     *
     * @property CommentVisit visit
     */

    /**
     * A CommentResponse object representing a published response to this comment, or NULL if no response exists
     *
     * @property CommentResponse|null response
     */


    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'commentId' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'commentRef' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'responseID' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'odsCode' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'commentOriginalURL' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'title' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'commentText' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'dateSubmitted' => [true, self::PROPERTY_TYPE_TIMESTAMP, '\\DateTimeInterface', false, false],
            'lastUpdated' => [true, self::PROPERTY_TYPE_TIMESTAMP, '\\DateTimeInterface', false, false],
            'sentimentScore' => [true, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'department' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'publisherID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'publishersCommentRef' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'screenName' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'status' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'removeReportLink' => [true, self::PROPERTY_TYPE_BOOLEAN, null, false, false],
            'ratings' => [true, self::PROPERTY_TYPE_STRING, null, true, false],
            'visit' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'response' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    /**
     * @return string
     */
    public function getCommentID()
    {
        return $this->_data['commentId'];
    }

    /**
     * @return string
     */
    public function getCommentRef()
    {
        return $this->_data['commentRef'];
    }

    /**
     * @return string
     */
    public function getResponseID()
    {
        return $this->_data['responseID'];
    }

    /**
     * @return string
     */
    public function getODSCode()
    {
        return $this->_data['odsCode'];
    }

    /**
     * @return string
     */
    public function getCommentOriginalURL()
    {
        return $this->_data['commentOriginalURL'];
    }

    /**
     * @return string
     */
    public function getCommentText()
    {
        return $this->_data['commentText'];
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_data['title'];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateSubmitted()
    {
        return $this->_data['dateSubmitted'];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastUpdated()
    {
        return $this->_data['lastUpdated'];
    }

    /**
     * @return float
     */
    public function getSentimentScore()
    {
        return $this->_data['sentimentScore'];
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->_data['department'];
    }

    /**
     * @return string
     */
    public function getPublisherID()
    {
        return $this->_data['publisherID'];
    }

    /**
     * @return string
     */
    public function getPublishersCommentRef()
    {
        return $this->_data['publishersCommentRef'];
    }

    /**
     * @return string
     */
    public function getScreenName()
    {
        return $this->_data['screenName'];
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_data['status'];
    }

    /**
     * @return bool
     */
    public function getRemoveReportLink()
    {
        return $this->_data['removeReportLink'];
    }

    /**
     * @return string
     */
    public function getRatings()
    {
        return $this->_data['commentId'];
    }

    /**
     * @return CommentVisit
     */
    public function getVisit()
    {
        return $this->_data['visit'];
    }

    /**
     * @return CommentResponse
     */
    public function getResponse()
    {
        return $this->_data['response'];
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setCommentID(string $value)
    {
        $this->propertyUpdated('commentId', $value);
        $this->_data['commentId'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setCommentRef(string $value)
    {
        $this->propertyUpdated('commentRef', $value);
        $this->_data['commentRef'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setResponseID(string $value)
    {
        $this->propertyUpdated('responseID', $value);
        $this->_data['responseID'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setODSCode(string $value)
    {
        $this->propertyUpdated('odsCode', $value);
        $this->_data['odsCode'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setCommentOriginalURL(string $value)
    {
        $this->propertyUpdated('commentOriginalURL', $value);
        $this->_data['commentOriginalURL'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setTitle(string $value)
    {
        $this->propertyUpdated('title', $value);
        $this->_data['title'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setCommentText(string $value)
    {
        $this->propertyUpdated('commentText', $value);
        $this->_data['commentText'] = $value;
        return $this;
    }

    /**
     * @param DateTimeInterface $value
     *
     * @return Comment
     */
    public function setDateSubmitted(DateTimeInterface $value)
    {
        $this->propertyUpdated('dateSubmitted', $value);
        $this->_data['dateSubmitted'] = $value;
        return $this;
    }

    /**
     * @param DateTimeInterface $value
     *
     * @return Comment
     */
    public function setLastUpdated(DateTimeInterface $value)
    {
        $this->propertyUpdated('lastUpdated', $value);
        $this->_data['lastUpdated'] = $value;
        return $this;
    }

    /**
     * @param float $value
     *
     * @return Comment
     */
    public function setSentimentScore(float $value)
    {
        $this->propertyUpdated('sentimentScore', $value);
        $this->_data['sentimentScore'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setDepartment(string $value)
    {
        $this->propertyUpdated('department', $value);
        $this->_data['department'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setPublisherID(string $value)
    {
        $this->propertyUpdated('publisherID', $value);
        $this->_data['publisherID'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setPublishersCommentRef(string $value)
    {
        $this->propertyUpdated('publishersCommentRef', $value);
        $this->_data['publishersCommentRef'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setScreenName(string $value)
    {
        $this->propertyUpdated('screenName', $value);
        $this->_data['screenName'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return Comment
     */
    public function setStatus(string $value)
    {
        $this->propertyUpdated('status', $value);
        $this->_data['status'] = $value;
        return $this;
    }

    /**
     * @param bool $value
     *
     * @return Comment
     */
    public function setRemoveReportLink(bool $value)
    {
        $this->propertyUpdated('removeReportLink', $value);
        $this->_data['removeReportLink'] = $value;
        return $this;
    }

    /**
     * @param array $value
     *
     * @return Comment
     */
    public function setRatings(array $value)
    {
        $this->propertyUpdated('ratings', $value);
        $this->_data['ratings'] = $value;
        return $this;
    }

    /**
     * @param CommentVisit $value
     *
     * @return Comment
     */
    public function setVisit(CommentVisit $value)
    {
        $this->propertyUpdated('visit', $value);
        $this->_data['visit'] = $value;
        return $this;
    }

    /**
     * @param CommentResponse $value
     *
     * @return Comment
     */
    public function setResponse(CommentResponse $value)
    {
        $this->propertyUpdated('response', $value);
        $this->_data['response'] = $value;
        return $this;
    }

    /**
     * @return bool Whether or not the save operation was successful
     */
    public function save()
    {
        throw new NotImplementedException();
        return false;
    }


}
