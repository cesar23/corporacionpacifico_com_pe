
#…or create a new repository on the command line
fuente mejor:
https://git-scm.com/book/es/v1/Empezando-Configurando-Git-por-primera-vez
#----------------------------configurando para este proyecto
# $ git config --global user.name "John Doe"
# $ git config --global user.email johndoe@example.com
git config  user.name "Cesar Auris"
git config  user.email solito_203@hotmail.com
#---------------------------------------------------------

echo "# corporacionpacifico_com_pe" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin git@github.com:cesar23/corporacionpacifico_com_pe.git
git push -u origin master

#…or push an existing repository from the command line

git remote add origin git@github.com:cesar23/corporacionpacifico_com_pe.git
git push -u origin master


#---------- para cuando ya estea  todo bajado solo se remite a comitear loas cambios
git pull
git add .
git commit -m "first commit2"
git push origin master
#---comandos git para  la  actualizacion
# git config --global user.name "cesar auris"
# git config --global user.email solito_203@hotmail.com
git pull origin master && git commit -am "2017-01-16" && git push origin master
--
#PARA  COMPRIMIR
zip -r demo.zip config css js Librerias css template-01 modelo *.php

#----log de apache
tail -f /var/log/apache2/error.log