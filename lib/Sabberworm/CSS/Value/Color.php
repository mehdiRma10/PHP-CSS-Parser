<?php

namespace Sabberworm\CSS\Value;

class Color extends CSSFunction {

	public function __construct($aColor) {
		parent::__construct(implode('', array_keys($aColor)), $aColor);
	}

	public function getColor() {
		return $this->aComponents;
	}

	public function setColor($aColor) {
		$this->setName(implode('', array_keys($aColor)));
		$this->aComponents = $aColor;
	}

	public function getColorDescription() {
		return $this->getName();
	}

	public function __toString() {
		return $this->render();
	}

	public function render($oOutputFormat = null) {
		if($oOutputFormat === null) {
			$oOutputFormat = new \Sabberworm\CSS\OutputFormat();
		}
		// Shorthand RGB color values
		if($oOutputFormat->get('RGBHashNotation') && implode('', array_keys($this->aComponents)) === 'rgb') {
			$sResult = sprintf(
				'%02x%02x%02x',
				$this->aComponents['r']->getSize(),
				$this->aComponents['g']->getSize(),
				$this->aComponents['b']->getSize()
			);
			return '#'.(($sResult[0] == $sResult[1]) && ($sResult[2] == $sResult[3]) && ($sResult[4] == $sResult[5]) ? "$sResult[0]$sResult[2]$sResult[4]" : $sResult);
		}
		return parent::render($oOutputFormat);
	}
}
