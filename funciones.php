<?php
include_once 'vendor/dBug/dBug.php';

#--Funciones principales de Smarty---#

function ver2($matriz) {
  $estilo='style="font-size:8pt;font-family:arial;"';
  $salida='<table border="1" cellspacing="3" cellpadding="3"  '
    .$estilo
    .' rules="cols">';
  if (!is_array($matriz)){
    var_dump($matriz);
    return $matriz;
  }
  foreach($matriz as $key=>$value) {
    if(count($value)>0){
    if(is_array($value)||is_object($value)) {
        $salida.="<tr><td valign='top'>$key</td><td>";
        $salida.=ver2($value);
        $salida.="</td></tr>";
      }else{
        $salida.="<tr><td valign='top'>$key</td><td>$value</td></tr>";
      }
    }
  }
  $salida.='</table>';
  return $salida;
}

function ver($ss){
/*   if(!(is_array($ss)||is_object($ss))){
      echo $ss;
   }else{
      echo ver2($ss);
   }
   */
   new dBug($ss);
}


function vq($a){
   new dBug($a);
   die('LRDTAB.');
}

function v(){
    new dBug(['SESSION'=>$_SESSION,'REQUEST'=>$_REQUEST]);
 }

 function ir($direccion)
 {
	header("Location: $direccion");
	exit();
}

#--Funciones del Sistema---#

function privilegios(){
    $actual=$_SESSION['actual'];
    $n=count($_SESSION[$actual]);

for ($i=0; $i <$n ; $i++) { 
    #Buscar privilegios 
    $a[$i]=$_SESSION[$actual][$i]['codigo'];
}
return $a;
}

function verificar()
{	if (!isset($_SESSION['u'])) {
	ir('index.php');
}

}

function frm_modal_editor($t){
  $salida = '<form 
      action="proc_modal_editor.php" 
      enctype="multipart/form-data"
      method="POST" 
      class="w-100" 
      id="editor"
      name="editor">
      <div class="form-group">';
  switch ($t[0]) {
    case 'N1':
    case 'N2':
    case 'N3':
    case 'N4':
    case 'N5':
      $salida .= "
      <input type=\"hidden\" name=\"tipo\" value=\"{$t[0]}\">
      <input type=\"hidden\" name=\"campo\" value=\"{$t[1]}\">
        <div class=\"form-group\">
          <label for=\"texto\">{$t[2]}</label>
          <small class=\"form-text text-muted text-muted-label\">{$t[3]}</small>
            <textarea  rows=\"16\" class=\"w-100\" name=\"texto\" id=\"texto\">{$t['texto']}</textarea>
        </div>    
        
      <div class=\"form-group\">
      <input 
        class=\"btn-enviar boton\" 
        type=\"submit\" 
        name=\"enviar\" 
        value=\"Guardar\">
      </div>
      ";
      break;
    case 'I2':
      $salida .="
      <input type=\"hidden\" name=\"tipo\" value=\"{$t[0]}\">
          <input type=\"hidden\" name=\"campo\" value=\"{$t[1]}\">
          <div class=\"form-group\">
          <label  for=\"texto\">{$t[2]}</label>
          <small class=\"form-text text-muted text-muted-label\">{$t[3]}</small>
          <input class=\"form-control\" type=\"text\" 
      placeholder=\"Palabras Clave\" name=\"texto\" id=\"texto\" 
      value=\"{$t['texto']}\">
      </div>

      <div class=\"form-group\">

      <input 
        class=\"btn-enviar boton\" 
        type=\"submit\" 
        name=\"enviar\" 
        value=\"Guardar\">
        </div>
      ";
      break;
    case 'A2':
      $salida .="
      <input type=\"hidden\" name=\"tipo\" value=\"{$t[0]}\">
        <input type=\"hidden\" name=\"campo\" value=\"{$t[1]}\">
        <input type=\"hidden\" name=\"texto\" value=\"\">
      <div class=\"form-group\">    
        <label for=\"{$t[1]}\">
            {$t[2]}
        </label>
        <input type=\"hidden\" name=\"variable\" value=\"{$t[1]}\" />
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1000000000\" />
        <input 
            type=\"file\" 
            class=\"form-control\" 
            name=\"{$t[1]}\"
            id=\"{$t[1]}\"
            accept=\"{$t[4]}\">
       </div>

       <div class=\"form-group\">
      <input 
        class=\"btn-enviar boton\" 
        type=\"submit\" 
        name=\"enviar\" 
        value=\"Guardar\">
        </div>
      ";



      break;
    
    default:
      # code...
      break;
  }

  $salida .= '</div>
    </form>';
    return $salida;

}