<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Sistema de Funções PHP</title>

<style>

body{
    font-family: Arial;
    background:#f4f6f9;
    margin:0;
    padding:20px;
}

.container{
    width:900px;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h1{
    text-align:center;
    color:#333;
}

h2{
    background:#2c3e50;
    color:white;
    padding:10px;
    border-radius:5px;
}

.linha{
    color:#aaa;
    margin:10px 0;
}

ul{
    background:#f9f9f9;
    padding:15px;
    border-radius:5px;
}

li{
    margin:5px 0;
}

.resultado{
    padding:8px;
    background:#ecf0f1;
    margin:5px 0;
    border-radius:4px;
}

.rodape{
    text-align:center;
    margin-top:20px;
    color:#777;
}

</style>
</head>

<body>

<div class="container">

<?php

echo "<h2>NÍVEL 1 - Sem Retorno e Sem Parâmetro</h2>";

function exibirCabecalho(){
    echo "<h1>Sistema de Gestão Escolar</h1>";
}
exibirCabecalho();


function logSistema(){
    echo "<div class='resultado'>Log: O sistema iniciou com sucesso em: " . date('d/m/Y') . "</div>";
}
logSistema();


function gerarLinha(){
    echo "<div class='linha'>" . str_repeat("-",50) . "</div>";
}
gerarLinha();


function exibirCopyright(){
    echo "<div class='rodape'>© 2024 - Desenvolvido por Pedro</div>";
}
exibirCopyright();



echo "<h2>NÍVEL 2 - Sem Retorno e Com Parâmetros</h2>";

function saudacao($nome){
    echo "<div class='resultado'>Olá, $nome, seja bem-vindo ao painel!</div>";
}
saudacao("Pedro");


function areaTriangulo($base,$altura){
    $area = ($base * $altura) / 2;
    echo "<div class='resultado'>A área do triângulo é: $area</div>";
}
areaTriangulo(10,5);


function formatarMoeda($valor){
    echo "<div class='resultado'>Valor: R$ " . number_format($valor,2,",",".") . "</div>";
}
formatarMoeda(1500);


function listaCompras($itens){
    echo "<ul>";
    foreach($itens as $item){
        echo "<li>$item</li>";
    }
    echo "</ul>";
}

$lista = ["Arroz","Feijão","Leite","Café"];
listaCompras($lista);



echo "<h2>NÍVEL 3 - Com Retorno e Sem Parâmetro</h2>";

function versaoSistema(){
    return "v1.0.2";
}

$versao = versaoSistema();
echo "<div class='resultado'>Versão do sistema: $versao</div>";


function gerarCupom(){
    return rand(1000,9999);
}

$cupom = gerarCupom();
echo "<div class='resultado'>Cupom gerado: $cupom</div>";


function statusBanco(){
    $conexao = true;
    return $conexao;
}

if(statusBanco()){
    echo "<div class='resultado'>Conectado</div>";
}else{
    echo "<div class='resultado'>Erro</div>";
}


function fusoHorario(){
    return date_default_timezone_get();
}

echo "<div class='resultado'>Fuso horário do servidor: " . fusoHorario() . "</div>";



echo "<h2>NÍVEL 4 - Com Retorno e Com Parâmetros</h2>";

function calcularIdade($ano){
    $anoAtual = date("Y");
    return $anoAtual - $ano;
}

$idade = calcularIdade(2005);
echo "<div class='resultado'>Você tem $idade anos</div>";


function calcularDesconto($preco,$porcentagem){
    $desconto = $preco * ($porcentagem/100);
    return $preco - $desconto;
}

$valorFinal = calcularDesconto(200,15);
echo "<div class='resultado'>Valor com desconto: R$ " . number_format($valorFinal,2,",",".") . "</div>";


function validarEmail($email){
    return str_contains($email,"@");
}

if(validarEmail("teste@email.com")){
    echo "<div class='resultado'>Email válido</div>";
}else{
    echo "<div class='resultado'>Email inválido</div>";
}


function converterTemperatura($celsius){
    return ($celsius * 9/5) + 32;
}

$temp = converterTemperatura(30);
echo "<div class='resultado'>Temperatura em Fahrenheit: $temp °F</div>";

?>

</div>

</body>
</html>