<?php


// Função para tratar o nome, deixar a primeira letra do nome maiscula ex: Ulisses
function trataNome($nome):string{
    ucfirst($nome);
    return $nome;
}


// Função para tratar o email, deixar todos minusculos. ex : ulissesmelo@gmail.com
function trataEmail($email):string{
    ucwords($email);
    return $email;
}

