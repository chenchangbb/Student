<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author 54384
 */
class Student {
function __construct() {
$this->surname = '';
$this->first_name = '';
$this->emails = array();
$this->grades = array();
}

function add_email($which,$address) {
$this->emails[$which] = $address;
}
function add_grade($grade) {
$this->grades[] = $grade;
}

function average() {
$total = 0;
foreach ($this->grades as $value)
$total += $value;
return $total / count($this->grades);
}

function toString() {
$result = $this->first_name . ' ' . $this->surname;
$result .= ' ('.$this->average().")\n";
foreach($this->emails as $which=>$what)
$result .= $which . ': '. $what. "\n";
$result .= "\n";
return '<pre>'.$result.'</pre>';
}



}

$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);

$students['j123'] = $first;
$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

ksort($students); // one of the many sort functions