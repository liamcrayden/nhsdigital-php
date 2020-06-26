<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

DraftResponse Model

*/

namespace liamcrayden\NHSDigital\Models;

use liamcrayden\NHSDigital\Exceptions\NotImplementedException;

class DraftResponse extends Model
{
    /**
     * The email address of the author
     *
     * @property string Author
     */

    /**
     * The name of the author as it should appear on screen
     *
     * @property string ScreenName
     */

    /**
     * The title of the comment
     *
     * @property string Title
     */

    /**
     * The comment text
     *
     * @property string CommentText
     */

    /**
     * The ODS code of the Organisation that this comment belongs to
     *
     * @property string ODSCode
     */

    /**
     * A reference that is given to this comment by the publisher
     *
     * @property string PublishersCommentRef
     */

    /**
     * The Publisher ID used for comment attribution
     *
     * @property string PublisherID
     */

    /**
     * The full URI where the original comment can be found online
     *
     * @property string CommentOriginalURL
     */

    /**
     * Department - we have no documentation on what this field is for yet
     *
     * @property string Department
     */

    /**
     * IP Address - the IP address is dot notation
     *
     * @property string IPAddress
     */

    /**
     * Responding To Publisher ID
     *
     * @property string RespondingToPublisherID
     */

    /**
     * Responding To Publishers Comment Ref
     *
     * @property string RespondingToPublishersCommentRef
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
            'Author' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'ScreenName' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Title' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'CommentText' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'CommentOriginalURL' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'PublishersCommentRef' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'PublisherID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Department' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'IPAddress' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'ODSCode' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'RespondingToPublisherID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'RespondingToPublishersCommentRef' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->_data['Author'];
    }

    /**
     * @return string
     */
    public function getScreenName()
    {
        return $this->_data['ScreenName'];
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_data['Title'];
    }

    /**
     * @return string
     */
    public function getCommentText()
    {
        return $this->_data['CommentText'];
    }

    /**
     * @return string
     */
    public function getPublishersCommentRef()
    {
        return $this->_data['PublishersCommentRef'];
    }

    /**
     * @return string
     */
    public function getPublisherID()
    {
        return $this->_data['PublisherID'];
    }

    /**
     * @return string
     */
    public function getRespondingToPublishersCommentRef()
    {
        return $this->_data['RespondingToPublishersCommentRef'];
    }

    /**
     * @return string
     */
    public function getRespondingToPublisherID()
    {
        return $this->_data['RespondingToPublisherID'];
    }

    /**
     * @return string
     */
    public function getCommentOriginalURL()
    {
        return $this->_data['CommentOriginalURL'];
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->_data['Department'];
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->_data['IPAddress'];
    }

    /**
     * @return string
     */
    public function getODSCode()
    {
        return $this->_data['ODSCode'];
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setAuthor(string $value)
    {
        $this->propertyUpdated('Author', $value);
        $this->_data['Author'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setScreenName(string $value)
    {
        $this->propertyUpdated('ScreenName', $value);
        $this->_data['ScreenName'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setTitle(string $value)
    {
        $this->propertyUpdated('Title', $value);
        $this->_data['Title'] = $value;
        return $this;
    }


    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setCommentText(string $value)
    {
        $this->propertyUpdated('CommentText', $value);
        $this->_data['CommentText'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setPublishersCommentRef(string $value)
    {
        $this->propertyUpdated('PublishersCommentRef', $value);
        $this->_data['PublishersCommentRef'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setPublisherID(string $value)
    {
        $this->propertyUpdated('PublisherID', $value);
        $this->_data['PublisherID'] = $value;
        return $this;
    }

    /**
     * @return string
     *
     * @return DraftResponse
     */
    public function setRespondingToPublishersCommentRef(string $value)
    {
        $this->propertyUpdated('RespondingToPublishersCommentRef', $value);
        $this->_data['RespondingToPublishersCommentRef'] = $value;
        return $this;
    }

    /**
     * @return string
     *
     * @return DraftResponse
     */
    public function setRespondingToPublisherID(string $value)
    {
        $this->propertyUpdated('RespondingToPublisherID', $value);
        $this->_data['RespondingToPublisherID'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setCommentOriginalURL(string $value)
    {
        $this->propertyUpdated('CommentOriginalURL', $value);
        $this->_data['CommentOriginalURL'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setDepartment(string $value)
    {
        $this->propertyUpdated('Department', $value);
        $this->_data['Department'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setIPAddress(string $value)
    {
        $this->propertyUpdated('IPAddress', $value);
        $this->_data['IPAddress'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return DraftResponse
     */
    public function setODSCode(string $value)
    {
        $this->propertyUpdated('ODSCode', $value);
        $this->_data['ODSCode'] = $value;
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

    public function __submittable()
    {
        $submit = json_decode( json_encode( $this, JSON_NUMERIC_CHECK ), TRUE );
        if ( isset($submit['RespondingToPublisherID']) )
        {
          $submit['RespondingTo']['PublisherID'] = $submit['RespondingToPublisherID'];
          unset( $submit['RespondingToPublisherID'] );
        }
        if ( isset($submit['RespondingToPublishersCommentRef']) )
        {
          $submit['RespondingTo']['PublishersCommentRef'] = (string) $submit['RespondingToPublishersCommentRef'];
          unset( $submit['RespondingToPublishersCommentRef'] );
        }
        $submit['PublishersCommentRef'] = (string) $submit['PublishersCommentRef'];
        return json_encode( $submit );
    }


}
