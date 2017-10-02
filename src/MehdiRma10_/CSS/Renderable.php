<?php

namespace MehdiRma10\CSS;

interface Renderable {
	public function __toString();
	public function render(\MehdiRma10\CSS\OutputFormat $oOutputFormat);
	public function getLineNo();
}