<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Project.php';
require_once __DIR__ . '/../models/Pattern.php';

class PatternRepository extends Repository
{

    public function getPattern(int $id): ?Pattern
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pattern WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $pattern = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($pattern == false) {
            return null;
        }

        return new Pattern(
            $pattern['title'],
            $pattern['description'],
            $pattern['image'],
            $pattern['type'],
            $pattern['pattern_file'],
            $pattern['category'],
            $pattern['id']
        );
    }

    public function addPattern(Project $project): void
    {
    
        $stmt = $this->database->connect()->prepare('
            INSERT INTO pattern (title, description, image, type, patternFile, category, id)
            VALUES (?, ?, ?, ?, ?, ? , ?)
        ');

        session_start();
        $userId = $_SESSION['user_id'];

        $stmt->execute([
            $pattern->getTitle(),
            $pattern->getDescription(),
            $pattern->getImage(),
            $pattern->getType(),
            $pattern->getPatternFile(),
            $pattern->getCategory(),
            $userId
        ]);
    }

    public function getPatterns(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pattern;
        ');
        $stmt->execute();
        $patterns = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($patterns as $pattern) {
            $result[] = new Pattern(
                $pattern['title'],
                $pattern['description'],
                $pattern['image'],
                $pattern['type'],
                $pattern['pattern_file'],
                $pattern['category'],
                $pattern['id']
            );
        }

        return $result;
    }

    public function getPatternByTitle(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pattern WHERE LOWER(title) LIKE :search OR LOWER(description) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function like(int $id) {
        $stmt = $this->database->connect()->prepare('
            UPDATE pattern SET "like" = "like" + 1 WHERE id = :id
         ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}