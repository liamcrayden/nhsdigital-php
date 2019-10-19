<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

CommentResponse Model

*/

namespace liamcrayden\NHSDigital\Models;

class CommentResponse extends Model
{
    /**
     * The response ID (mysteriously named commentID by NHS Digital)
     *
     * @property string commentID
     */

    /**
     * The response reference (mysteriously named commentRef by NHS Digital)
     *
     * @property string commentRef
     */

    /**
     * The absolute URL where the original publishers response can be found
     *
     * @property string commentOriginalURL
     */

    /**
     * The actual text that comprises the response
     *
     * @property string commentText
     */

    /**
     * A timestamp representing when this response was submitted by the publisher
     *
     * @property \DateTimeInterface dateSubmitted
     */

    /**
     * A timestamp representing when this response was last updated
     *
     * @property \DateTimeInterface lastUpdated
     */

    /**
     * The sentiment score
     *
     * @property float sentimentScore
     */

    /**
     * The ODS code of the Organisation that this response belongs to
     *
     * @property string odsCode
     */

    /**
     * The ID of the publisher who submitted this response
     *
     * @property string publisherID
     */

    /**
     * The reference or identifier that the publisher gave this response
     *
     * @property string publishersCommentRef
     */

    /**
     * The current status of this response
     *
     * @property string status
     */

    /**
     * Determines whether or not the 'Report this comment' link should be removed from this response
     *
     * @property bool removeReportLink
     */

    /**
     * An object containing properties relating to the comment that this response belongs to
     *
     * @property object respondingTo
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
            'commentOriginalURL' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'commentText' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'dateSubmitted' => [true, self::PROPERTY_TYPE_TIMESTAMP, '\\DateTimeInterface', false, false],
            'lastUpdated' => [true, self::PROPERTY_TYPE_TIMESTAMP, '\\DateTimeInterface', false, false],
            'sentimentScore' => [true, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'odsCode' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'publisherID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'publishersCommentRef' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'status' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'removeReportLink' => [true, self::PROPERTY_TYPE_BOOLEAN, null, false, false],
            'respondingTo' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
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
     * @return object
     */
    public function getRespondingTo()
    {
        return $this->_data['respondingTo'];
    }

    /**
     * @param string $value
     *
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
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
     * @return CommentResponse
     */
    public function setRemoveReportLink(bool $value)
    {
        $this->propertyUpdated('removeReportLink', $value);
        $this->_data['removeReportLink'] = $value;
        return $this;
    }

    /**
     * @param object $value
     *
     * @return CommentResponse
     */
    public function setRespondingTo($value)
    {
        $this->propertyUpdated('respondingTo', $value);
        $this->_data['respondingTo'] = $value;
        return $this;
    }

    /**
     * @return bool Whether or not the save operation was successful
     */
    public function save()
    {
        return true;
    }


}
