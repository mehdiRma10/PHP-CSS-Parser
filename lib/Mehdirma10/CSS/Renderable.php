<?php

namespace Mehdirma10\CSS;

interface Renderable {
	public function __toString();
	public function render(\Mehdirma10\CSS\OutputFormat $oOutputFormat);
	public function getLineNo();
}