<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

abstract class SystemModel extends Model {
  use SoftDeletes;

  const CREATED_AT = 'dateCreatedAt';

  const DELETED_AT = 'dateDeletedAt';

  const UPDATED_AT = 'dateUpdatedAt';

  /**
   * @var array
   */
  protected $dates = [
    'dateDeletedAt',
    'dateCreatedAt',
    'dateUpdatedAt',
  ];

  /**
   * @var string
   */
  protected $primaryKey = 'intId';

  /**
   * @return mixed
   */
  public function getDateCreatedAt() {
    return $this->dateCreatedAt;
  }

  /**
   * @return mixed
   */
  public function getDateDeletedAt() {
    return $this->dateDeletedAt;
  }

  /**
   * @return mixed
   */
  public function getDateUpdatedAt() {
    return $this->dateUpdatedAt;
  }

  /**
   * @param $dateCreatedAt
   * @return mixed
   */
  public function setDateCreatedAt($dateCreatedAt) {
    $this->dateCreatedAt = $dateCreatedAt;

    return $this;
  }

  /**
   * @param $dateDeletedAt
   * @return mixed
   */
  public function setDateDeletedAt($dateDeletedAt) {
    $this->dateDeletedAt = $dateDeletedAt;

    return $this;
  }

  /**
   * @param $dateUpdatedAt
   * @return mixed
   */
  public function setDateUpdatedAt($dateUpdatedAt) {
    $this->dateUpdatedAt = $dateUpdatedAt;

    return $this;
  }
}