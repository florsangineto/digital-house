<?php
class Actor
{
  private $id;
  private $first_name;
  private $last_name;
  private $rating;
  private $favorite_movie_id;

  public function __construct($first_name, $last_name, $rating, $favorite_movie_id)
{
  $this->first_name = $first_name;
  $this->last_name = $last_name;
  $this->rating= $rating;
  $this->favorite_movie_id;
}

public function setId($id)
{
  $this->id= $id;
}
public function getId()
{
  return $this->id;
}
public function setFist_Name($first_name)
{
  $this->first_name=$first_name;
}
public function getFirst_Name()
{
  return $this->first_name;
}
public function setLast_Name($last_name)
{
  $this->last_name=$last_name;
}
public function getLast_Name()
{
  return $this->last_name;
}
public function setRating($rating)
{
  $this->rating=$rating;
}
public function getRating()
{
  return $this->rating;
}
public function set($favorite_movie_id)
{
  $this->favorite_movie_id=$favorite_movie_id;
}
public function getfavorite_movie_id()
{
  return $this->favorite_movie_id;
}
}
 ?>
