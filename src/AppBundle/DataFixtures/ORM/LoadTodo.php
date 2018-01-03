<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Todo;

class LoadTodo extends Fixture
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $ages = array(
      'un mois',
      'deux jours',
      'quatre jours',
      'trois heures',
      'un jour',
      'quatre ans'
    );
   
   

    foreach ($ages as $age) {
      // On crée la catégorie
      $todo = new Todo();
      $todo->setAge($age);
      $todo->setNourriture('Omnivore');
      $todo->setRace('Race');
      $todo->setFamille('Famille');
      $todo->setEmail($age."@gmail.com");
      // On la persiste
      $manager->persist($todo);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}