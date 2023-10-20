<?php
/**
 * Summary of Category
 */
class Category {

  /**
   * Summary of database
   * @var 
   */
  private $database;

  /**
   * Summary of __construct
   * @param Database $database
   */
  public function __construct(Database $database)
  {
    $this->database = $database->dbconnection();
  }

  /**
   * Summary of getAllCategories
   * @return void
   */
  public function getAllCategories(): array
  {
    $stmt = $this->database->prepare("SELECT * FROM categories");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
   * Summary of deleteCategory
   * @param mixed $category_id
   * @return void
   */
  public function deleteCategory($category_id)
  {
    $stmt = $this->database->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->execute([$category_id]);
  }

  /**
   * Summary of addCategory
   * @param mixed $category_name
   * @return void
   */
  public function addCategory($category_name)
  {
    $stmt = $this->database->prepare("INSERT INTO categories (category_name) VALUES (?)");
    $stmt->execute([$category_name]);
  }

  /**
   * Summary of isCategoryPresent
   * @param mixed $category_name
   * @return bool
   */
  public function isCategoryPresent($category_name)
  {
    $stmt = $this->database->prepare("SELECT category_name FROM categories WHERE category_name = ?");
    $stmt->execute([$category_name]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result != false;
  }
}