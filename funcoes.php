<?php
function info($contasCorrentes, $conta)
{
    $titular = $contasCorrentes[$conta]["titular"];
    $dependentes = $contasCorrentes[$conta]["dependentes"];
    exibeMensagem("$titular, dono da conta $conta, seu saldo é de R$" . $contasCorrentes[$conta]["saldo"] . " reais.");
    if (count($dependentes) != 0) {
        foreach ($dependentes as $nome) {
            exibeMensagem("Tem como dependente $nome.");
        };
    } else {
        exibeMensagem("Sua conta não tem dependentes.");
    }
}
function sacar($contasCorrentes, $conta, $valor)
{
    $titular = $contasCorrentes[$conta]["titular"];
    if ($valor == 0) {
        exibeMensagem("$titular insira um valor para prosseguir");
    } else if ($contasCorrentes[$conta]["saldo"] < $valor) {
        exibeMensagem("Saldo insuficiente, revise o valor a ser sacado.");
        exibeMensagem("$titular seu saldo atual é de R$" . $contasCorrentes[$conta]["saldo"] . "  reais.");
    } else {
        $contasCorrentes[$conta]["saldo"] -= $valor;
        exibeMensagem("Saque realizado com sucesso.");
        exibeMensagem("$titular seu saldo atual é de R$" . $contasCorrentes[$conta]["saldo"] . " reais.");
    };

    return $contasCorrentes;
};
function depositar($contasCorrentes, $conta, $valor)
{
    $titular = $contasCorrentes[$conta]["titular"];
    if ($valor == 0) {
        exibeMensagem("$titular insira um valor para prosseguir");
    } else {
        $contasCorrentes[$conta]["saldo"] += $valor;
        exibeMensagem("Deposito realizado com sucesso.");
        exibeMensagem("$titular seu saldo atual é de R$" . $contasCorrentes[$conta]["saldo"] . " reais.");
    };

    return $contasCorrentes;
};
function transferir($contasCorrentes, $pagante, $recebente, $valor)
{
    if (isset($contasCorrentes[$recebente])) {
        $titularPagante = $contasCorrentes[$pagante]["titular"];
        $saldoPagante = $contasCorrentes[$pagante]["saldo"];
        $titularRecebente = $contasCorrentes[$recebente]["titular"];
        $saldoRecebente = $contasCorrentes[$recebente]["saldo"];
        if (!$contasCorrentes[$recebente] || $contasCorrentes[$pagante] == $contasCorrentes[$recebente]) {
            exibeMensagem("$titularPagante, conta não encontrada, por gentileza verifique a conta recebente.");
        } else if ($valor == 0) {
            exibeMensagem("$titularPagante insira um valor para prosseguir");
        } else if ($contasCorrentes[$pagante]["saldo"] < $valor) {
            exibeMensagem("Saldo insuficiente, revise o valor a ser sacado.");
            exibeMensagem("$titularPagante seu saldo atual é de R$" . $contasCorrentes[$pagante]["saldo"] . " reais.");
        } else {
            $contasCorrentes[$pagante]["saldo"] -= $valor;
            $contasCorrentes[$recebente]["saldo"] += $valor;
            exibeMensagem("Transferência realizada com sucesso.");
            exibeMensagem("$titularPagante seu saldo atual é de R$" . $contasCorrentes[$pagante]["saldo"] . "reais.");
        };
    } else {
        exibeMensagem("Conta recebente não existente, por gentileza verifique os dados informados.");
    };

    return $contasCorrentes;
};
function pagarBoleto($contasCorrentes, $conta, $boleto, $valor)
{
    $boleto = [
        "instituicao" => "Picpay",
        "valor" => $valor,
    ];
    if (isset($boleto)) {
        $titular = $contasCorrentes[$conta]["titular"];
        $instituicaoBoleto = $boleto["instituicao"];
        $valorBoleto = $boleto["valor"];
        if ($valor == 0) {
            exibeMensagem("$titular insira um valor para prosseguir");
        } else if ($valor != $valorBoleto) {
            exibeMensagem("Valor não corresponde ao valor necessário para pagamento ou é superior, revise os dados do boleto");
        } else if ($valor > $contasCorrentes[$conta]["saldo"]) {
            exibeMensagem("Saldo insuficiente.");
            exibeMensagem("$titular seu saldo atual é de R$" . $contasCorrentes[$conta]["saldo"] . " reais.");
        } else {
            $contasCorrentes[$conta]["saldo"] -= $valor;
            exibeMensagem("Boleto da instituição $instituicaoBoleto pago com sucesso.");
            exibeMensagem("$titular seu saldo atual é de R$" . $contasCorrentes[$conta]["saldo"] . " reais.");
        };
    } else {
        exibeMensagem("Boleto não existente");
    };

    return $contasCorrentes;
};
