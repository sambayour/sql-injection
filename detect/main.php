<?php

    /**
     * mysql> create database naiveBayes;
     * mysql> use naiveBayes;
     * mysql> create table trainingSet (S_NO integer primary key auto_increment, document text, category varchar(255));
     * mysql> create table wordFrequency (S_NO integer primary key auto_increment, word varchar(255), count integer, category varchar(255));
     */

    require_once('NaiveBayesClassifier.php');

    $classifier = new NaiveBayesClassifier();
    $spam = Category::$SPAM;
    $ham = Category::$HAM;

    $classifier -> train('“name’); DELETE FROM items; SELECT * FROM items WHERE ‘a’=’a”' . '1=1', $ham);

    $classifier -> train('there are so many ways to try this out, dont let it look complicated to you', $spam);


    $category = $classifier -> classify('UPDATE trainingset SET category = mailicious WHERE trainingset`.`S_NO` = 9;
');
    echo $category. ' sorted <br>';
    
    $category = $classifier -> classify('SELECT * FROM items');
    echo $category . ' also sorted.. check db storage';

?>