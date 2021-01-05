<?php
namespace Module\Filter;

/**
 * Remove ETX Characters.
 * @return void
 * @internal
 */
function remove_etx($html) {
	$html = preg_replace('/\x03/', '', $html);
    return $html;
}

\Sleepy\Hook::applyFilter('sleepy_render',  '\Module\Filter\remove_etx');
