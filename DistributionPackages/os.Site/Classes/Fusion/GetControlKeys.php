<?php

namespace Vendor\Site\Fusion;

use Neos\Fusion\FusionObjects\AbstractFusionObject;

class GetControlKeys extends AbstractFusionObject {

    public function __construct(Runtime $runtime, $path, $fusionObjectName) {
        parent::__construct($runtime, $path, $fusionObjectName);
    }

    public function evaluate() {
        $class = 'fms\DataSource\\' . $this->fusionValue('identifier');
        $source = new $class;

        return $source->getData();
    }
}
