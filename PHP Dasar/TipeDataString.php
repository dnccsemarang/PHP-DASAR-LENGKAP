<?php
// <!-- single quote -->
echo 'Name :' ;
echo 'Rizki Darmawan';
echo "\n";
// <!-- DOUBLE quote -->
/*
boleh menggunakan escape character seperti
\n untuk new line
\t untuk tab
\r untuk carriage return
\f untuk form feed
\b untuk backspace
\0 untuk null
\e untuk escape
\$ untuk dollar
\_ untuk underscore
\v untuk vertical tab
\a untuk alert
\l untuk lowercase
\u untuk uppercase
\Q untuk quote
\E untuk end quote
\c untuk control character
dll

*/

echo "Name :" ;
echo "Rizki\t Darmawan\t S.Kom \n";

// multiline string 
/** 
 * Heredoc adalah syntax yang digunakan untuk membuat string yang panjang
 * Howdoc adalah syntax yang digunakan untuk membuat string yang panjang namun tidak memiliki kemampuan parsing di heredoc atau double quoted string
*/

echo <<<RIZKI
Selamat belajar php
sekarang belajar tipe data string
ini cara ke-3 dengan heredoc \n
RIZKI;

// howdoc
echo <<<'RIZKI'
Belajar nowdoc
ini cara ke-4 dengan nowdoc
RIZKI;