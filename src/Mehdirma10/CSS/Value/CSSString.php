<?php

namespace MehdiRma10\CSS\Value;

class CSSString extends PrimitiveValue {

	private $sString;

	public function __construct($sString, $iLineNo = 0) {
		$this->sString = $sString;
		parent::__construct($iLineNo);
	}

	public function setString($sString) {
		$this->sString = $sString;
	}

	public function getString() {
		return $this->sString;
	}

	public function __toString() {
		return $this->render(new \MehdiRma10\CSS\OutputFormat());
	}

	public function render(\MehdiRma10\CSS\OutputFormat $oOutputFormat) {
		$sString = addslashes($this->sString);
		$sString = str_replace("\n", '\A', $sString);
		return $oOutputFormat->getStringQuotingType() . $sString . $oOutputFormat->getStringQuotingType();
	}

}