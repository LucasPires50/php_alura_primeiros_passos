
<?php 
// Está função está fazendo o require de todos os arquivos necessário na ordem correta
spl_autoload_register(function (string $nomeCompletaDaClasse){
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletaDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

   if(file_exists($caminhoArquivo)){
       require_once $caminhoArquivo;
   }
});

?>