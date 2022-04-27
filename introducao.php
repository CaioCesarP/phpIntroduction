<?php
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
};
// hello world
// echo "olá mundo!";

//print
// $idade = 19;
// $nome = "Caio";
// echo $idade;
// echo $nome;

//operação
// $idade = 19;
// $idadeDaqui10Anos = $idade + 10;
// echo $idadeDaqui10Anos;

//operações
// $n1 = 1;
// $n2 = 2;
// $soma = $n1 + $n2;
// $subtracao = $n1 - $n2;
// $mutiplicacao = $n1 * $n2;
// $divisao = $n1 / $n2;
// $aoCubo = $n2 ** 3;
// $resto = $n1 % $n2;

//tipo
// $salario = 675.80;
// echo gettype($salario);

//manipular texto
// $usuario = "Caio César";
// $idade = 19;
// echo "Bem vindo guest!$usuario tem $idade anos." . PHP_EOL;

//condições
// $idade = 17;
// $pais = false;
// $sim = "Sua idade é de $idade anos, maior de idade, você pode entrar." . PHP_EOL;
// $nao = "Sua idade é de $idade anos, menor de idade, você não pode entrar." . PHP_EOL . "Adentrar apenas acompanhado de responsável ou com autorização." . PHP_EOL;
// $autorizacao = "Sua idade é de $idade anos, menor de idade, mas como tem autorização ou acompanhamento dos pais, você pode entrar." . PHP_EOL;
// if ($idade >= 18) {
//     echo $sim;
// } else if ($idade < 18 && $pais) {
//     echo $autorizacao;
// } else {
//     echo $nao;
// }

//imprimir 1-15
// for ($i = 1; $i <= 15; $i++) {
//     if ($i < 10) {
//         echo "#0$i" . PHP_EOL;
//     } else {
//         echo "#$i" . PHP_EOL;
//     }
// }

//imprimir ímpares
// echo "Números ímpares: " . PHP_EOL;
// for ($i = 0; $i <= 100; $i++) {
//     if ($i % 2 !== 0) {
//         echo $i . PHP_EOL;
//     }
// }

//tabuada
// $mutiplicador = 6;
// echo "Tabuada de $mutiplicador." . PHP_EOL;
// for ($i = 1; $i <= 10; $i++) {
//     echo "$i x $mutiplicador = " . ($mutiplicador * $i) . PHP_EOL;
// }

//IMC -> peso / altura^2
// $peso = 80;
// $altura = 1.80;
// $IMC =  $peso / ($altura ** 2);
// echo "Seu IMC é de $IMC. Vocẽ está com o IMC ";
// if ($IMC < 18.5 ) {
//     echo "abaixo ";
// } else if ($IMC < 25) {
//     echo "dentro ";
// } else {
//     echo "acima ";
// }
// echo "do recomendado." . PHP_EOL;

//array
// $notaTurma = [7.5, 8, 8, 6];
// for ($i = 0; $i < count($notaTurma); $i++) {
//     echo $notaTurma[$i] . PHP_EOL;
// }
// $alunos = ["Joao", "Maria", "Pedro", "Ana"];
// for ($i = 0; $i < count($alunos); $i++) {
//     echo $alunos[$i] . PHP_EOL;
// }

//associativos
// $contasCorrentes = [
//     0001 => [
//         "titular" => "Caio César",
//         "saldo" => 450.00,
//         "dependentes" => [
//             "dependente1" => "Clarice",
//             "dependente2" => "Angelica",
//         ],
//     ],
//     0002 => [
//         "titular" => "Wlisses",
//         "saldo" => 2359.86,
//         "dependentes" => [
//             "dependente1" => "António",
//         ],
//     ],
//     0003 => [
//         "titular" => "Rafael",
//         "saldo" => 1758.50,
//         "dependentes" => [
//         ],
//     ],
// ];
// foreach ($contasCorrentes as $id => $conta) {
//     $titular = $conta["titular"];
//     $saldo = $conta["saldo"];
//     echo "Cliente número de conta $id de nome $titular, seu saldo é de R$$saldo reais." . PHP_EOL;
// };

//associativos exercício
// $placa_do_carro = [
//     "LMS-2312" => [
//         "marca" => "VW",
//         "modelo" => "Golf",
//     ],
//     "GPQ-4805" => [
//         "marca" => "ULTRA",
//         "modelo" => "Mercedes",
//     ],
//     "CMJ-8391" => [
//         "marca" => "PREMIER",
//         "modelo" => "Tesla",
//     ],
// ];
// foreach ($placa_do_carro as $placa => $info) {
//     $marca = $info["marca"];
//     $modelo = $info["modelo"];
//     echo "Carro de placa $placa, a marca do seu carro é $marca do modelo $modelo" . PHP_EOL;
// }

//funções
// possíveis funções para testar:
// info() informações de uma determinada conta;
// sacar() sacar um determinado valor da conta;
// depositar() depositar um determinado valor na conta;
// transferir() transfere um determinado valor de uma conta para outra;
// pagarBoleto() faz o pagamento de um boleto de id imaginario e valor imaginario;
// require_once './funcoes.php';
// $contasCorrentes = [
//     0001 => [
//         "titular" => "Caio César",
//         "saldo" => 450.00,
//         "dependentes" => [
//             "dependente1" => "Clarice",
//             "dependente2" => "Angelica",
//         ],
//     ],
//     0002 => [
//         "titular" => "Wlisses",
//         "saldo" => 2359.86,
//         "dependentes" => [
//             "dependente1" => "António",
//         ],
//     ],
//     0003 => [
//         "titular" => "Rafael",
//         "saldo" => 1758.50,
//         "dependentes" => [],
//     ],
// ];
