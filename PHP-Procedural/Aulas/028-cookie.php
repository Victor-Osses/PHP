<?php
/*Um cookie é um arquivo de texto criado pelo servidor que armazena 
algumas informações localmente no computador do usuário.

Um cookie persiste mesmo após o navegador ser fechado.
Obs: Não utilizar cookies para armazenar informações sensíveis
*/

//setcookie('name', 'content', duration in seconds);
setcookie('user', 'Victor Osses', time()+3600);
setcookie('email', 'victor@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tênis adidas', time()+3600);

//Para alterar o valor de um cookie, basta reescreve-lo:
setcookie('ultima_pesquisa', 'mochila radical', time()+3600);

//Para excluir um cookie: negative o time
setcookie('email', 'victor@gmail.com', time()-3600);

echo "<pre>"; echo var_dump($_COOKIE); echo "<pre>"; 

echo $_COOKIE['ultima_pesquisa'];

