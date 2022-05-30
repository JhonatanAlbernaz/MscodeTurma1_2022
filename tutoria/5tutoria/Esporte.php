<?php

abstract class Esporte
{
	protected string $nome;
	
	protected int $numeroCompetidores;
	
	public function nome(): string
	{
		return $this->nome;
	}
	
	public function numeroCompetidores(): int
	{
		return $this->numeroCompetidores;
	}
}


abstract class EsportesComQuadra extends Esporte
{
	protected string $tipoQuadra;
	
	public function tipoQuadra(): string
	{
		return $this->tipoQuadra;
	}
}

class Futebol extends EsportesComQuadra
{
	public function __construct(int $numeroCompetidores = 23)
	{
		$this->nome = 'Futebol';
		$this->tipoQuadra = 'Grama';

		$this->numeroCompetidores = $numeroCompetidores;
	}
}

class Basquete extends EsportesComQuadra
{
	public function __construct(int $numeroCompetidores = 20)
	{
		$this->nome = 'Basquete';
		$this->tipoQuadra = 'Madeira';

		$this->numeroCompetidores = $numeroCompetidores;
	}
}

$futebol = new Futebol(11);

echo '<br>Nome do esporte: ' . $futebol->nome();
echo '<br>Tipo de quadra: ' . $futebol->tipoQuadra();
echo '<br>Numero de competidores: ' . $futebol->numeroCompetidores();


$basquete = new Basquete(5);
echo '<hr>';

echo '<br>Nome do esporte: ' . $basquete->nome();
echo '<br>Tipo de quadra: ' . $basquete->tipoQuadra();
echo '<br>Numero de competidores: ' . $basquete->numeroCompetidores();