@echo off
echo Estamos descargando

FOR /L %%x in ( 1,1,15 ) Do ( 
wget  http://corporacionpacifico.com.pe/bundles/grupoares/images/partners/p_%%x.jpg
)
pause
