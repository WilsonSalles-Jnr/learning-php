<?php


$nome = "Wilson Salles Junior";

function somar($x, $y) {
  return $x + $y."<br>";
}

function subtrair($x, $y) {
  return $x - $y."<br>";
}

function dividir($x, $y) {
  return $x / $y."<br>";
}

function multiplicar($x, $y) {
  return $x * $y."<br>";
}

class Meuperfil {
  public $name;
  public $age;
  public $city;
  public $learning;
  public function __construct($name, $age, $city, $learning){
    $this->name = $name;
    $this->age = $age;
    $this->city = $city;
    $this->learning = $learning;
  }
}

class MeuContato {
  protected $celular;
  protected $github;
  protected $linkedin;

  public function setCelular($celular) {
    $this->celular = $celular;
  }
  public function getCelular() {
    return $this->celular;
  }

  public function setGithub($githubLink, $name) {
    $this->github = "<a href='$githubLink' target='_blank'>$name</a>";
  }
  public function getGithub() {
    return "$this->github";
  }

  public function setLinkedin($linkedinLink, $name) {
    $this->linkedin = "<a href='$linkedinLink' target='_blank'>$name</a>";
  }
  public function getLinkedin() {
    return $this->linkedin;
  }
}

echo "<h1>Este é meu primeiro arquivo php.</h1> <hr>";
echo "<h2>Testes com variáveis:</h2>";
echo "<p>Oi, meu nome é <strong>".$nome."</strong>, meu nome está sendo declarado em uma váriavel</p><hr>";
echo "<h2>Função e soma</h2>";
echo "<h3>Esta função receberá 2 parâmetos, $"."x = 9 e $"."y = 3:</h3>";
echo "somar(9,3): ".somar(9,3);
echo "subtrair(9,3): ".subtrair(9,3);
echo "dividir(9,3): ".dividir(9,3);
echo "multiplicar(9,3): ".multiplicar(9,3);
echo "<hr>";
echo "<h2>Criando classe</h2>";
echo "<h3>Aqui, irei criar uma classe que contenha as variaveis com meu nome, quantos anos eu tenho, onde eu moro e o que estou estudando.</h3>";
$meuPerfil = new Meuperfil('Wilson Salles Junior', 25, "Bauru", "PHP");
echo "Oi, meu nome é $meuPerfil->name eu tenho $meuPerfil->age anos, moro em $meuPerfil->city e estou aprendendo $meuPerfil->learning. <hr>";
echo "<h2>Criando classe com variáveis protegidas</h2>";
$meuContato = new MeuContato();
$meuContato->setCelular("(14) 99722-3323");
$meuContato->setGithub("https://github.com/WilsonSalles-Jnr","Github");
$meuContato->setLinkedin("https://www.linkedin.com/in/wilson-salles-junior/", "Linkedin");
echo "Para mostrar a manipulação das variáveis protected, criei uma classe chamada MeuContato, que tem 3 variáveis, a protected celular, protected github e a protected linkedin, na protected celular tem meu celular ".$meuContato->getCelular()." já na protected github e linkedin, ao definir eles, eles recebem 2 parâmetros, o link e o nome do usuário, então ficou da seguinte forma:<br> Github: ".$meuContato->getGithub()."<br> linkedin: ".$meuContato->getLinkedin()."<hr>";