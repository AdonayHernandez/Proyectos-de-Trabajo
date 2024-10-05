<?php
class Movie {
    private $id;
    private $title;
    private $description;
    private $image_url;

    // Constructor
    public function __construct($id, $title, $description, $image_url) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image_url = $image_url;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImageUrl() {
        return $this->image_url;
    }
}
?>
