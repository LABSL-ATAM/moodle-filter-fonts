<?php 
/***********************************************************************
Filtro para sacar información irrelevante en el copy/paste de los profes.
/***********************************************************************/
class filter_fontfamily extends moodle_text_filter {
    public function filter($text, array $options = array()) {
/*        // Filtrar comienzo code y fin code.
        $delim_inicio = "<!-- code start -->"; 
        $delim_fin = "<!-- code -->"; 

        //armar los regexes ahora, asi no se enquilomba despues.
        $rgx_inicio = '/' . $delim_inicio . '/i';
        $rgx_fin = '/' . $delim_fin . '/i';

        // Aca va el texto final.
        $resultado_texto = "";

        // A Filtrar mi amorrr... crrin, crrin... 
        if (preg_match($rgx_inicio,$text)){
            $partes_del_texto = explode("$delim_inicio",$text);
            foreach ($partes_del_texto as $parte_xxx){
                if (preg_match($rgx_fin,$parte_xxx)){
                    // Filtrar las partes impares que tienen texto normal.
                    $partes_del_subTexto = explode($delim_fin,$parte_xxx);
                    $index = 0;
                    foreach ($partes_del_subTexto as $subparte_xxx){
                        if ($index % 2 == 1){
                            $subparte_xxx = filter_fontfamily_reemplazar($subparte_xxx);
                        }
                        $resultado_texto .= $subparte_xxx;
                        $index++;
                    }
                } else {
                    $parte_xxx = filter_fontfamily_reemplazar($parte_xxx);
                    $resultado_texto .= $parte_xxx;
                }
            }
            $text = $resultado_texto;
        } else {
            $text = filter_fontfamily_reemplazar($text);
        }
        */
        $text = filter_fontfamily_reemplazar($text);
        return $text;
    }
}
/***********************************************************************/
function filter_fontfamily_reemplazar($texto_todo){
    $texto_todo = preg_replace("/font-family:[^;]+;/i","",$texto_todo);
    $texto_todo = preg_replace("/color:[^;]+;/i","",$texto_todo);
    return $texto_todo;
}
/***********************************************************************/
?>
