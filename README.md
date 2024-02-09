Olá, esse é um test para sql injection, utilizando php e o banco de dados mariadb.
É um script sem proteção, normalmente, os sites usam ferramentas para se protegerem de ataques sql injection; 
entretanto, muitos sites ainda estão desatualizados, infelizmente.

Nesse sentido, para quem está estudando vulnerabilidade, aqui está um pequeno código para integarir com um bando de dados
e praticar o sql injection nele de forma eficiente, obtendo resultados expressivos.

O teste exige um pouco de conhecimento em sql.

Para quem tiver pouco conhecimento ou se perdeu no meio do caminho:
1. crie um db, ex:
CREATE DATABASE db_injection;

2. crie uma tabela:
CREATE TABLE sql_injection(
id int not null primary key auto_increment,
nome varchar(50) not null,
senha varchar(20) not null
);

3. coloque valores na tebela:
INSERT INTO sql_injection(nome, senha) values('alice', 123), ('bianca', 456), ('carla', 789);

*** Pronto, agora vamos a prática! ***

inicie o serviço apache2 e mariadb;
 - sudo service apache2 start
 - sudo service mariadb start

abra o arquivo no localhost

No campo usuário: adicione o que quiser ou deixe em branco;
No campo senha: pode adicionar o que quiser ou deixar em branco, exemplo:

senha: asdfçlkj' or '1' = '1
senha: ' or '1' = '1

Esse campo vai continuar a execução do sql, via php,
esse código irá retornar todos os usuários cadastrados e senhas,
ou seja, quanto mais dados, mais resultados!

Esse foi um pequeno exemplo de iniciante - como eu, rs - para testar, na prática, um sql injection.
