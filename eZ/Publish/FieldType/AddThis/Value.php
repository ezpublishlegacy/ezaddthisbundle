<?php

namespace MakingWaves\eZAddThisBundle\eZ\Publish\FieldType\AddThis;

use eZ\Publish\Core\FieldType\Value as BaseValue;

class Value extends BaseValue
{
    public $media_tag_string;
    public $media_tags;

    public function __construct( array $values = array() )
    {
        parent::__construct( $values );
        $this->media_tags = explode( ',', $this->media_tag_string );
    }

    public function __toString()
    {
        return $this->media_tag_string;
    }

    public function toHash()
    {
        return array(
            'media_tag_string' => $this->media_tag_string
        );
    }
}
