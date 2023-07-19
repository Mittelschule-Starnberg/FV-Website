<?php

namespace Vendor\Site\Fusion;

use Neos\Fusion\FusionObjects\AbstractFusionObject;

class LinkWrapper extends AbstractFusionObject {

    public function evaluate() {
        $element = $this->fusionValue( 'element' );
        $url     = $this->fusionValue( 'linkUrl' );

        if ( strlen( $url ) == 0 ) {
            return  $element;
        }

        return '<a href="' . $url . '">' . $element . '</a>';
    }
}
