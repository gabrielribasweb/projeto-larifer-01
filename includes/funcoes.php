<?php
function tratar_letras($info)
{
  $info = ereg_replace("[ÁÀÂÃ]", "A", $info);
  $info = ereg_replace("[áàâãª]", "a", $info);
  $info = ereg_replace("[ÉÈÊË]", "E", $info);
  $info = ereg_replace("[éèêë]", "e", $info);
  $info = ereg_replace("[ÍÌÎÏ]", "I", $info);
  $info = ereg_replace("[íìîï]", "i", $info);
  $info = ereg_replace("[ÓÒÔÕ]", "O", $info);
  $info = ereg_replace("[óòôõº]", "o", $info);
  $info = ereg_replace("[ÚÙÛ]", "U", $info);
  $info = ereg_replace("[úùû]", "u", $info);
  $info = ereg_replace("ýÿ", "y", $info);
  $info = str_replace("Ý", "Y", $info);
  $info = str_replace("Ç", "C", $info);
  $info = str_replace("ç", "c", $info);
  $info = str_replace("Ñ", "N", $info);
  $info = str_replace("ñ", "n", $info);

  $info = strtr($info, "ÀÁÂÃÄÅÃáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ", "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn");
  return $info;

  /*Montar KEY WORD*/
  function montarKey($pchave, $adicionarNoFinalDasKeysH1, $removeemKeys, $geralKeys)
  {
    global $separarSegmentos;
    global $seguementoMenu;
    global $nomePagina;
    $segmentoChave = "";
    $separadorKey = ", ";
    $keyString = "";
    $geralKeysString = "";
    $removerPreposicoes = array('/', '!', ' a ', ' e ', ' i ', ' o ', ' de ', ' da ', ' do ', ' em ', ' para ', ' com ');
    $removeemKeys = array_merge($removeemKeys, $removerPreposicoes);
    $pchave2 = $pchave;
    #remove das palavras chaves os parametros passados para remover
    foreach ($removeemKeys as $removeemKey) {
      $pchave2 = str_ireplace($removeemKey, " ", $pchave2);
    }
    #remove das palavras chaves os parametros passados para efetuar prepend (Evitar repetição)
    foreach ($adicionarNoFinalDasKeysH1 as $removeemKey) {
      //echo $removeemKey;
      $pchave2 = str_ireplace($removeemKey, " ", $pchave2);
    }
    #cria um array- e adiciona   a palavra chave com as remoções
    $pchaveArr = explode(" ", $pchave2);
    #adiciona a array a palavra chave original
    array_push($pchaveArr, $pchave);
    #percorre a array com as palavras chaves adicionando a virgula antes da palavra chave e adicionando u a palavra chave todos os prepends
    foreach ($pchaveArr as $pchaveArrItemGeral) {
      if (trim($pchaveArrItemGeral) != "") {
        $keyString .= $separadorKey . $pchaveArrItemGeral;
        foreach ($adicionarNoFinalDasKeysH1 as $prependKey) {
          if (!stristr($pchaveArrItemGeral, $prependKey)) {
            $keyString .= $separadorKey . $pchaveArrItemGeral . " " . $prependKey;
          }
        }
      }
    }
    #remove espaços desnecessários
    $keyString = str_replace("     ", " ", $keyString);
    $keyString = str_replace("    ", " ", $keyString);
    $keyString = str_replace("   ", " ", $keyString);
    $keyString = str_replace("  ", " ", $keyString);

    #Adiciona as Keys Gerais
    #se foe um array entra aqui
    if (is_array($geralKeys)) {
      if ($separarSegmentos === true) {

        #separador de segmento selecionado
        #percorre todo o array segmentoMenu procurando a página atual para verificar a qual segmento ela pertence.
        foreach ($seguementoMenu as $chaveSegmentos => $segmentos) {
          echo "y";
          $nomePagina = trim(str_replace(".php", "", $nomePagina));
          if (in_array($nomePagina, $segmentos)) {
            $segmentoChave = $chaveSegmentos;
            break;
          }
        }
        #verifica se tem uma array com keys gerais para para o segmento desta página e adciona a string de KeyGerais
        if (isset($segmentoChave) && isset($geralKeys[$segmentoChave])) {
          $geralKeysString = $geralKeys[$segmentoChave];
        }
      } else {
        #separador de segmento não selecionado
        foreach ($geralKeys as $chaveSegmentoKey => $valorSegmentoKey) {
          #percorre todo o arrays de Keys gerais acrescentando a string de keys gerais
          $geralKeysString .= $valorSegmentoKey . ", ";
        }
      }
    } else if (is_string($geralKeys)) {
      #se for uma string - inclui a mesma a uma string de keyGerais
      $geralKeysString = $geralKeys;
    }
    $keyString .= $keyString != "" ? ", " . $geralKeysString : $geralKeysString;
    #remove virgula no inicio da string de palavras chave
    if (substr($keyString, 0, strlen($separadorKey)) == $separadorKey) {
      $keyString = substr($keyString, strlen($separadorKey));
    }
    #remove virgula no fim da string de palavras chave
    if (substr($keyString, -2) == $separadorKey) {
      $keyString = substr($keyString, 0, -2);
    }
    return $keyString;
  }
}


#########################################################################################################################
######	breadcrumb
##########################################################################################################################
function breadcrumb()
{
  global $exibirBreadcrumb;
  global $h1;
  global $menu;
  global $urlPagina;
  global $urlGaleria;
  global $dominio;
  global $urlAtividadesEmpresa;
  global $AtividadesEmpresa;
  global $separarSegmentos;
  global $seguementoMenu;
  $breadcrumb = '';
  if ($exibirBreadcrumb == true) {
    $tituloPaginaAtual = isset($h1) ? $h1 : '';

    $breadcrumb .= '<div class="breadcrumb">';
    $breadcrumb .= 'Você esta aqui: ';
    $breadcrumb .= '<a rel="nofollow" href="' . $dominio . '" title="Voltar a página inicial">Home</a> ';
    if (isset($menu) && (array_key_exists($nomePagina, $menu) || array_key_exists($urlGaleria, $menu))) {
      if ($separarSegmentos == true) {
        foreach ($seguementoMenu as $segmento => $subMenu) {
          if (in_array($nomePagina, $subMenu) || in_array($urlGaleria, $subMenu)) {
            $segmentoExibir = $segmento;
            break;
          }
        }
        $breadcrumb .= '» <a href="' . $dominio . $urlAtividadesEmpresa . '?segmento=' . urlencode($segmentoExibir) . '" title="' . $segmentoExibir . '">' . $segmentoExibir . '</a> ';
      } else {
        $breadcrumb .= '» <a href="' . $dominio . $urlAtividadesEmpresa . '" title="' . $AtividadesEmpresa . '">' . $AtividadesEmpresa . '</a> ';
      }
    }
    $breadcrumb .= '» <strong>' . $h1 . '</strong>';
    $breadcrumb .= '</div>';
  }
  return $breadcrumb;
}


/*----------------------------------------
-- verificação de existencia das paginas -
----------------------------------------*/
function keysExist()
{
  global $dominio;
  global $menu;
  $i       = 0;
  $qtdMenu = count($menu);

  foreach ($menu as $key => $value) {
    if (!file_exists($key . '.php') && !file_exists($key)) {
      $i++;
    }
  }
  if ($i == $qtdMenu) {
    return false;
  } else {
    return true;
  }
}

##########################################################################################################################
##########################################################################################################################
#####|	                                        montar tags                                                     	|#####
##########################################################################################################################
##########################################################################################################################

function montarTags($key)
{
  if (isset($key) && !empty($key) && is_string($key)) {
    $tagArr = explode(',', $key);
    $tagArr = array_slice($tagArr, 0, 5);
    $tags = implode(', ', $tagArr);
    return $tags;
  }
  return '';
}

##########################################################################################################################
##########################################################################################################################
#####|	"INICIO"-->Retorna Itens Relacionados ao Menu 																|#####
#####|	(MenuPrincipal,MenuLateral, MaisVisitados, Linkagem Interna, Produtos Relacionados, Informações, SiteMapa)	|#####
##########################################################################################################################
##########################################################################################################################

#LINKAGEM INTERNA
function exibirLinkagemInterna($listaLinks, $totalExibir = 5)
{
  global $fraseLinkagemInterna;
  $linkagemInterna = array();
  $pageAtual = explode("/", $_SERVER['PHP_SELF']);
  $pageAtual = end($pageAtual);
  $pageAtualSemExtencao = str_replace(".php", "", $pageAtual);
  $totalExibir = $totalExibir + 1;
  $nomeSegmentoExibir = "";
  $mensagemLinksInternos = "";
  $URL = "";
  $linkagemInterna = $listaLinks;
  if (isset($linkagemInterna) && count($linkagemInterna) > 1) {
    $plural = count($linkagemInterna) > 2 ? "s" : "";
    $mensagemLinksInternos = "<div class=\"linkagem-interna\"><p>";
    $mensagemLinksInternos .= "<span>" . $fraseLinkagemInterna . "</span>";
    $cont = 0;
    $contador = 0;
    foreach ($linkagemInterna as $key1 => $valor1) {
      $cont++;
      if (($key1 == $pageAtual || $key1 == $pageAtualSemExtencao) || ($contador > 0 && $contador <= $totalExibir)) {
        $contador += 1;
        if ($contador > 1) {
          $virgulaLinkExterno = $contador > 2 ? "," : "";
          $valor1 = mb_strtolower($valor1, 'UTF-8');
          $mensagemLinksInternos .= "{$virgulaLinkExterno} <a href='{$URL}{$key1}' title='{$valor1}'>{$valor1}</a>";
          if ($contador >= $totalExibir || count($linkagemInterna) == $cont) {
            break;
          }
        }
      }
    }
    if (($contador >= 1 && $contador < $totalExibir)) {
      foreach ($linkagemInterna as $key2 => $valor2) {
        if (($key2 != $pageAtual || $key1 == $pageAtualSemExtencao) && ($contador >= 1 && $contador < $totalExibir)) {
          $contador += 1;
          if ($contador > 1) {
            $virgulaLinkExterno = $contador > 2 ? "," : "";
            $valor2 = mb_strtolower($valor2, 'UTF-8');
            $mensagemLinksInternos .= "{$virgulaLinkExterno} <a href='{$URL}{$key2}' title='{$valor2}'>{$valor2}</a>";
            if ($contador >= $totalExibir) {
              break;
            }
          }
        } else {
          break;
        }
      }
    }
    if ($contador == 0) {
      foreach ($linkagemInterna as $key1 => $valor1) {
        $cont++;
        $contador += 1;
        if ($contador > 0) {
          $virgulaLinkExterno = $contador > 2 ? "," : "";
          $valor1 = mb_strtolower($valor1, 'UTF-8');
          $mensagemLinksInternos .= "{$virgulaLinkExterno} <a href='{$URL}{$key1}' title='{$valor1}'>{$valor1}</a>";
          if ($contador >= $totalExibir || count($linkagemInterna) == $cont) {
            break;
          }
        }
      }
    }
    $mensagemLinksInternos .= ".";
    $mensagemLinksInternos .= "</p></div>";
    if ($contador > 0) {
      return $mensagemLinksInternos;
    }
  }
}
#Ordenar Array (Sem Levar em Consideração Maiusculos e minusculos)
function acasesort($array, $array2 = array("vazia"))
{
  foreach ($array as $itemKey => $itemValue) {
    $itemValue = tratar_letras($itemValue);
    $arrayLower[$itemKey] = mb_strtolower($itemValue, 'UTF-8');
  }
  asort($arrayLower);
  if (isset($array2[0]) && $array2[0] == "vazia") {
    foreach ($arrayLower as $arrayLowerItemKey => $arrayLowerItemValue) {
      $arrayLower[$arrayLowerItemKey] = $array[$arrayLowerItemKey];
    }
    return $arrayLower;
  } else if (isset($array2) && count($array2) > 0) {
    $arrayNova = array();
    foreach ($arrayLower as $arrayLowerItemKey => $arrayLowerItemValue) {
      if (in_array($arrayLowerItemKey, $array2)) {
        array_push($arrayNova, $arrayLowerItemKey);
      }
    }
    if (isset($arrayNova) && count($arrayNova) > 0) {
      return $arrayNova;
    } else {
      return asort($array2);
    }
  }
}

/*Chamadas arquivos JS e CSS externos*/

function arquivos_inline($arquivo)
{
  global $urlGaleria;

  if (file_exists($arquivo)) {

    $extensaoArquivo = explode('.', $arquivo);
    $extensaoArquivo = end($extensaoArquivo);
    $extensaoArquivo = strtolower($extensaoArquivo);

    if ($extensaoArquivo == "css") {
      $retornaCodigo = file_get_contents($arquivo);
      $retornaCodigo = str_replace(array("\n", "\r", "\t", "\n\t"), "", $retornaCodigo);
      $retornaCodigo = str_replace(": ", ":", $retornaCodigo);
      $retornaCodigo = str_replace(", ", ",", $retornaCodigo);
      $retornaCodigo = str_replace("; ", ";", $retornaCodigo);
      $retornaCodigo = str_replace(";   ", ";", $retornaCodigo);
      $retornaCodigo = str_replace("{ ", "{", $retornaCodigo);
      $retornaCodigo = str_replace(" {", "{", $retornaCodigo);
      $retornaCodigo = str_replace(" { ", "{", $retornaCodigo);
      $retornaCodigo = str_replace("   {", "{", $retornaCodigo);
      $retornaCodigo = str_replace("} ", "}", $retornaCodigo);
      $retornaCodigo = str_replace(" }", "}", $retornaCodigo);
      $retornaCodigo = str_replace(" } ", "}", $retornaCodigo);
      $expressaoCSS = '!/\*[^*]*\*+([^/][^*]*\*+)*/!';
      $retornaCodigo = preg_replace($expressaoCSS, '', $retornaCodigo);
      return $retornaCodigo;
    } elseif ($extensaoArquivo == "js") {
      $retornaCodigo = '';
      if ($arquivo == 'js/script.js') {
        $retornaCodigo = file_get_contents($arquivo);
        $expressaoJS = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\')\/\/.*))/';
        $retornaCodigo = preg_replace($expressaoJS, '', $retornaCodigo);
        $retornaCodigo = str_replace(array("\n", "\t", "\r", "\n\t"), '', $retornaCodigo);
      } else {
        $retornaCodigo = file_get_contents($arquivo);
      }

      return $retornaCodigo;
    }
  }
}
?>