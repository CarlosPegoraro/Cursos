<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(null, 'Carlos Eduardo', new \DateTimeImmutable('2006-01-14'));

$name = $student->name();

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindParam(':name', $name);
$statement->bindValue(':birth_date', $student->birthDate()->format(format:'Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluído";
}
