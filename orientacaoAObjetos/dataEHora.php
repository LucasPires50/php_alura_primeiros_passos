<?php 

$timezone = new DateTimeZone('America/Sao_Paulo');
$timeAgora = new DateTime('now', $timezone);

// para exibir a data atual no formato brasileiro
$hoje = date('d/m/Y');// Y -> ano com 4 digitos
echo $hoje . PHP_EOL;

$hoje2 = date('d/m/y');// y -> ano com 2 digitos
echo $hoje2 . PHP_EOL;

// para egar o horário atual, além da data
$agora1 = date('d/m/Y H:i');
echo $agora1 . PHP_EOL;

$agora2 = new DateTime(); // Pega o momento atual
echo $agora2->format('d/m/Y H:i') . PHP_EOL;  // Exibe no formato desejado

$agora = new DateTime('now');
$ontem = new DateTime('yesterday');
$dia15 = new DateTime('2019-03-15');

// Se já tivermos uma string em outro formato, e quisermos criar um objeto do tipo DateTime, podemos utilizar o método createFromFormat, da seguinte forma:
$formato = 'd/m/Y';
$stringDataDia15 = '15/03/2019';
$dia15 = DateTime::createFromFormat($formato, $stringDataDia15);

// A interface DateTimeInterface expõe um método chamado diff, que recebe um outro objeto deste mesmo tipo como parâmetro, ou seja, podemos chamar a partir de nosso objeto de datas, o método diff passando uma outra data como parâmetro. Vamos ver como ficaria isso:
$entrada = new DateTime('09:00');
$saida = new DateTime('18:00');
$intervalo = $saida->diff($entrada);
print_r($intervalo);

// lista de fusos horários suportados pelo DateTimeZone com o método DateTimeZone::listIdentifiers():
print_r(DateTimeZone::listIdentifiers());

// A classe DateTimeImmutable! Ela pode ser utilizada da mesma forma que a classe DateTime, mas as operações que ela expõe retornam uma nova data, e não alteram a original. Pareceu confuso? Vamos ver na prática essa diferença e de quebra aprender a realizar mais operações com as datas:
$umDia = new DateInterval('P1D'); // Intervalo de 1 dia
// Com DateTime:
$hoje = new DateTime();
echo $hoje->format('d/m') . PHP_EOL;; // Saída 20/03
$hoje->add($umDia); // Altera o valor de $hoje
echo $hoje->format('d/m') . PHP_EOL;; // Saída 21/03

// Com DateTimeImmutable
$hoje = new DateTimeImmutable();
echo $hoje->format('d/m') . PHP_EOL; // Saída 20/03
$amanha = $hoje->add($umDia); // Não altera o valor de $hoje
echo $hoje->format('d/m') . PHP_EOL; // Saída 20/03
echo $amanha->format('d/m') . PHP_EOL; // Saída 21/03

?>