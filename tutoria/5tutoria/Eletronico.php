<?php

	abstract class Eletronico
	{
		protected string $marca;
		protected int $voltagem;
		
		public function marca(): string
		{
			return $this->marca;
		}
		
		public function voltagem(): int
		{
			return $this->voltagem;
		}
	}

	abstract class DispositivoMovel extends Eletronico
	{
		protected string $sistemaOperacional;
		protected int $tamanhoTela;
		
		public function sistemaOperacional(): string
		{
			return $this->sistemaOperacional;
		}
		
		public function tamanhoTela(): int
		{
			return $this->tamanhoTela;
		}
	}

	abstract class CameraDigital extends Eletronico
	{
		protected int $megaPixel;
		
		public function megaPixel(): int
		{
			return $this->megaPixel;
		}
	}


	class Celular extends DispositivoMovel
	{
		protected bool $tecnologia4G;
		protected bool $dualChip;
		
		public function __construct(
			string $marca,
			int $voltagem,
			string $sistemaOperacional, 
			int $tamanhoTela, 
			bool $tecnologia4G = true,
			bool $dualChip = false
		) {
			$this->marca = $marca;
			$this->voltagem = $voltagem;
			
			$this->sistemaOperacional = $sistemaOperacional;
			$this->tamanhoTela = $tamanhoTela;
						
			$this->tecnologia4G = $tecnologia4G;
			$this->dualChip = $dualChip;
		}
		
		public function possuiTenologia4G(): bool
		{
			return $this->tecnologia4G;
		}
		
		public function possuiDualChip(): bool
		{
			return $this->dualChip;
		}
	}


	class CameraFotografica extends CameraDigital
	{
		protected string $tipoCarregamento;
		protected bool $lenteRemovivel;
			
		public function __construct(
			string $marca,
			int $voltagem,
			int $megaPixel, 
			string $tipoCarregamento = 'Pilha', 
			bool $lenteRemovivel = true
		) {
			
			$this->marca = $marca;
			$this->voltagem = $voltagem;
			
			$this->megaPixel = $megaPixel;
			
			$this->tipoCarregamento = $tipoCarregamento;
			$this->lenteRemovivel = $lenteRemovivel;
		}
		
		public function tipoCarregamento(): string
		{
			return $this->tipoCarregamento;
		}
		
		public function possuiLenteRemovivel(): bool
		{
			return $this->lenteRemovivel;
		}
	}


	$celular = new Celular('Samsung', 110, 'Android', 8, false, true);
	echo '<br>
		O celular de marca ' . $celular->marca() 
		. ' possui o sistema operacional ' . $celular->sistemaOperacional() 
		. ' com o tamanho de tela de ' . $celular->tamanhoTela()
		. ' com voltagem ' . $celular->voltagem();

	if ($celular->possuiTenologia4G()) {
		echo '<br>O celular possui tecnologia 4G';
	}

	if ($celular->possuiDualChip()) {
		echo '<br>O celular possui tecnologia DualChip';
	}

	echo '<hr>';

	$cameraFotografica = new CameraFotografica('Canon', 110, 48, 'Bateria');

	echo '<br>
		A camera fotografica de marca ' . $cameraFotografica->marca() 
		. ' possui megapixel de ' . $cameraFotografica->megaPixel() 
		. ' com o tipo de carregamento ' . $cameraFotografica->tipoCarregamento()
		. ' com voltagem ' . $cameraFotografica->voltagem();



	echo '<hr>';

	$cameraFotografica = new CameraFotografica('HP', 220, 100, 'Pilha');

	echo '<br>
		A camera fotografica de marca ' . $cameraFotografica->marca() 
		. ' possui megapixel de ' . $cameraFotografica->megaPixel() 
		. ' com o tipo de carregamento ' . $cameraFotografica->tipoCarregamento()
		. ' com voltagem ' . $cameraFotografica->voltagem();