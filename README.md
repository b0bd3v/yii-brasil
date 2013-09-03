yii-brasil
==========


Projeto de Desenvolvimento do portal Yii Brasil

Instalação do Ambiente de Desenvolvimento

git clone https://github.com/yiibrasil/yii-brasil.git

Criar as pastas /assets e /protected/runtime e data permissão de escrita.
chmod -R 777 assets protected/runtime

Copiar o arquivo main_develop.php e colocar o nome de main.php. Alterar dados de acesso para banco de dados local.

Criar um .htacces na base do sistema.
<IfModule mod_rewrite.c>
 RewriteEngine On
 RewriteBase /pastaDoSistema/
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteRule . /pastaDoSistema/index.php [L]
</IfModule>


###Como usar o Migratios###
Atualizar quando o banco estiver em funcionando 


Git Flow

Utilizando git flow com a configuração padrão de nomes. #robertomartins




