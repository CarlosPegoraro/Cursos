<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query(statement: 'SELECT * FROM students;');
$studentDataList = $statement->fetchAll(fetch_style: PDO::FETCH_ASSOC);
$studentList = [];
 
foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);
