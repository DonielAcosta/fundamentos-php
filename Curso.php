<?php
/**
 * Clase Curso
 * Representa un curso con toda su información
 */
class Curso {
    protected    $title;
    protected $subtitle;
    protected $description;
    protected $author;
    protected $date;
    protected $tags;

    public function __construct($title, $subtitle, $description, $author, $date, $tags) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->author = $author;
        $this->date = $date;
        $this->tags = $tags;
        // Ordenar tags alfabéticamente al crear el curso
        $this->sortTags();
    }
    // public function getTitle() {
    //     return $this->title;
    // }
    // public function getSubtitle() {
    //     return $this->subtitle;
    // }
    // public function getDescription() {
    //     return $this->description;
    // }
    // public function getAuthor() {
    //     return $this->author;
    // }
    // public function getDate() {
    //     return $this->date;
    // }
    public function getTags() {
        return $this->tags;
    }
    public function __get($property) {  
        if(property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
    public function __toString() {
        $html = "<h1>{$this->title}</h1>";
        $html .= "<p>{$this->description}</p>";
        $html .= "<p>{$this->author}</p>";
        $html .= "<p>{$this->date}</p>";
        $html .= "<ul>";
        foreach($this->tags as $tag) {
            $html .= "<li>{$tag}</li>";
        }
        $html .= "</ul>";
        return $html;
    }
    public function addTag($tag): void {
        // Validar que el tag no esté vacío
        if(empty($tag)) {
            return;
        }
        // Validar que el tag no esté duplicado
        if(in_array($tag, $this->tags)) {
            return;
        }
        // Agregar el tag si pasa las validaciones
        $this->tags[] = $tag;
        // Ordenar alfabéticamente después de agregar
        $this->sortTags();
    }

    /**
     * Ordena los tags alfabéticamente
     */
    public function sortTags(): void {
        sort($this->tags);
    }

    /**
     * Obtiene los tags ordenados alfabéticamente
     */
    public function getTagsSorted(): array {
        $sortedTags = $this->tags;
        sort($sortedTags);
        return $sortedTags;
    }
}

