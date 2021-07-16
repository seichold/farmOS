<?php

namespace Drupal\farm_quick\Traits;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\log\Entity\Log;

/**
 * Provides methods for working with logs.
 */
trait QuickLogTrait {

  use StringTranslationTrait;

  /**
   * Create a log.
   *
   * @param array $values
   *   An array of values to initialize the log with.
   *
   * @return \Drupal\log\Entity\LogInterface
   *   The log entity that was created.
   */
  public function createLog(array $values = []) {

    // Start a new log entity with the provided values.
    /** @var \Drupal\log\Entity\LogInterface $log */
    $log = Log::create($values);

    // Save the log.
    $log->save();

    // Return the log entity.
    return $log;
  }

}
