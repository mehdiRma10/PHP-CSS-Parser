<?php

namespace Mehdirma10\CSS\Value;

use Mehdirma10\CSS\Renderable;

abstract class Value implements Renderable {
    protected $iLineNo;

    public function __construct($iLineNo = 0) {
        $this->iLineNo = $iLineNo;
    }
    
    /**
     * @return int
     */
    public function getLineNo() {
        return $this->iLineNo;
    }

    //Methods are commented out because re-declaring them here is a fatal error in PHP < 5.3.9
	//public abstract function __toString();
	//public abstract function render(\Mehdirma10\CSS\OutputFormat $oOutputFormat);
}
