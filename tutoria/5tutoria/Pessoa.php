<?php

abstract class Pessoa
{
	protected string $email;
	
	public function __construct(string $email)
	{
		$this->email = $email;
	}
	
	public function email(): string
	{
		return $this->email;
	}
}


class PessoaFisica extends Pessoa
{
	protected string $cpf;
	protected string $nome;
			
	public function __construct(string $cpf, string $nome, string $email)
	{
		$this->cpf = $cpf;
		$this->nome = $nome;
		
		parent::__construct($email);
	}
	
	public function nome(): string
	{
		return $this->nome;
	}
	
	public function cpf(): string
	{
		return $this->cpf;
	}
}

class PessoaJuridica extends Pessoa
{
	protected string $cnpj;
	protected string $razaoSocial;
	
	public function __construct(string $cnpj, string $razaoSocial, string $email)
	{
		$this->cnpj = $cnpj;
		$this->razaoSocial = $razaoSocial;

		parent::__construct($email);
	}
	
	public function cnpj(): string
	{
		return $this->cnpj;
	}
}


$pessoaF = new PessoaFisica('111.222.33.355', 'Frank', 'e-mail@teste.com');
$pessoaJ = new PessoaJuridica('02.668.736/0001-68', 'Frank Soluções LTDA', 'contato@franksolucoes.com');


echo '<br>nome: '. $pessoaF->nome();
echo '<br>email: ' . $pessoaF->email();

echo '<br>cnpj: ' . $pessoaJ->cnpj();