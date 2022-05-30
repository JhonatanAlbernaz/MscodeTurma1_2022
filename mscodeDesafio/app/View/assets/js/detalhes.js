$('.btn-detalhes').on('click', function (){
  let inscrito = $(this).data('inscrito');
  let admin = $(this).data('admin')
  let endereco = $(this).data('endereco');
  $('#detalhes_title').text(inscrito.nome);
  $('#detalhes_nome').text(inscrito.nome);
  $('#detalhes_cpf').text(inscrito.cpf);
  $('#detalhes_email').text(inscrito.email);
  $('#detalhes_data_nascimento').text(inscrito.data_nascimento);
  $("#detalhes_foto").attr('src','../../Storage/perfil/'+inscrito.foto );

  admin ?  $('#detalhes_cadastrado_por').text(admin.nome) : $('#detalhes_cadastrado_por').text('onepage');

  $('#detalhes_cep').text(endereco.cep);
  $('#detalhes_rua').text(endereco.rua);
  $('#detalhes_numero').text(endereco.numero);
  $('#detalhes_bairro').text(endereco.bairro);
  $('#detalhes_cidade').text(endereco.cidade);
  $('#detalhes_complemento').text(endereco.complemento);
  $('#detalhes_estado').text(endereco.estado);

  $('#modal_detalhes').modal('show');
})