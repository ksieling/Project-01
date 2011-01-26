<?php
/**
 * @author Kevin Sieling
 * @category ANM293 - Advanced PHP
 * Project 01
 * Gitting to know Git
 * MAKE MY OWN COMMENTS FOLLOWING DOC BLOCK STANDARDS
 */
ob_start();
/**
 * Start out buffering
 */
echo "My First Project with Output Buffering";
/**
 * Simple echo statement
 */
$v = ob_get_contents();
/**
 * sets a variable to v of the output buffer contents
 */
ob_end_clean();

echo $v;