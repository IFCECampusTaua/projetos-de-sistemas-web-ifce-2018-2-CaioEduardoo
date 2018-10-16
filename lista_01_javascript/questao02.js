function gerar_numero(){
min=0;
max=50;	
return Math.floor(Math.random()*( max - min + 1)) + min;
}