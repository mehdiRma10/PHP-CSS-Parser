<?php

namespace CssEditor\CSS;

interface Renderable {
	public function __toString();
	public function render(\CssEditor\CSS\OutputFormat $oOutputFormat);
	public function getLineNo();
}