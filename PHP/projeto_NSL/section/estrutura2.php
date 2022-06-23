<section class="container-fluid p-pagina-imagem-principal">
 <div class="container padding-top-165px">
  <div class="row">
   <div class="col-lg-6">
    <div class="col-6-div-box-shadow">
     <h1> Aniversariantes </h1>
     <h2> DO DIA </h2>
     <p> DIGA-NOS AS SEGUINTES INFORMAÇÕES: </p>
     <form class="class-form" action="novaPessoa.php" method="POST">
      <input type="text" name="nome" id="nome" placeholder="Nome"/>
      <input type="text" name="dataNasc" id="dataNasc" placeholder="Data de Nascimento"/>
      <select name="funcao" id="funcao">
       <option name="Diretor"> Diretor </option>
       <option name="Professor"> Professor(a) </option>
       <option name="Coordenador pedagógico"> Coordenador pedagógico </option>
       <option name="Pedagogo"> Pedagogo </option>
       <option name="CASF"> CASF </option>
       <option name="Secretario"> Secretario </option>
       <option name="Auxiliar de secretaria"> Auxiliar de secretaria </option>
       <option name="Coordenador escola"> Coordenador escola </option>
       <option name="PCA"> PCA </option>
       <option name="Coordenador de curso técnico"> Coordenador de curso técnico </option>
       <option name="Auxiliar de serviço gerais"> Auxiliar de serviço gerais </option>
       <option name="Cozinheira"> Cozinheira </option>
       <option name="Cuidador"> Cuidador </option>
       <option name="Professor de AEE"> Professor de AEE </option>

       <!--turmas da manhã-->

       <option name="1i01INF"> 1i01INF </option>
       <option name="1i01ADM"> 1i01ADM </option>
       <option name="1i02ADM"> 1i02ADM </option>
       <option name="1i01HUM"> 1i01HUM </option>
       <option name="2i01"> 2i01 </option>
       <option name="2i02"> 2i02 </option>
       <option name="2i03"> 2i03 </option>
       <option name="2i04"> 2i04 </option>
       <option name="3i01"> 3i01 </option>
       <option name="3i02"> 3i02 </option>
       <option name="3i03"> 3i03 </option>
       <option name="3i04"> 3i04 </option>
       <option name="3M01INF"> 3M01INF </option>

       <!--Turmas da tarde-->               

       <option name="1v01"> 1v01 </option>
       <option name="1v02"> 1v02 </option>
       <option name="2v01"> 2v01 </option>
       <option name="2v02"> 2EMI </option>
       <option name="3v01"> 3v01 </option>
       <option name="3v02"> 3v02 </option>

       <!--turmas da noite-->

       <option name="1EJA1"> 1EJA1 </option>
       <option name="2EJA1"> 2EJA1 </option>
       <option name="3EJA1"> 3EJA1 </option>
       <option name="3EJA2"> 3EJA2 </option>
       <option name="TEC. Comércio"> TEC. Comércio </option>
      </select>
      <button type="submit" class="btn botao-enviar"> Enviar </button>
     </form>
     <a class="tag-a-forms" href="app.php"> Lista </a>
    </div>   
   </div> 
   <div class="col-lg-6"> </div>  
  </div>   
 </div>   
</section>