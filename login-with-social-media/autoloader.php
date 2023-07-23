<?php
/**
 * Autoloader for this App.
 */
function autoloader($className): void {
  $filePath = __DIR__ .'/'. $className . '.php';
  if (file_exists($filePath)) {
    include_once $filePath;
  }
}
