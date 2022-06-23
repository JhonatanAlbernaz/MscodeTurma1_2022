$('.btn-editar').on('click', function (){
  let inscrito = $(this).data('inscrito');
  let endereco = $(this).data('endereco');
  $('#editar_title').text(inscrito.nome);
  $('#editar_id').val(inscrito.id);
  $('#editar_nome').val(inscrito.nome);
  $('#editar_cpf').val(inscrito.cpf);
  $('#editar_email').val(inscrito.email);
  $('#editar_data_nascimento').val(inscrito.data_nascimento);
  $("#editar_foto_view").attr('src','../../Storage/perfil/'+inscrito.foto );
  $('#editar_cep').val(endereco.cep);
  $('#editar_rua').val(endereco.rua);
  $('#editar_numero').val(endereco.numero);
  $('#editar_bairro').val(endereco.bairro);
  $('#editar_cidade').val(endereco.cidade);
  $('#editar_complemento').val(endereco.complemento);
  $('#editar_estado').val(endereco.estado);
  $('#modal_editar').modal('show');
})

$(function (){
  $('#editar_foto').change(function () {
    const file = $(this)[0].files[0]
    const fileReader = new FileReader()
    if(file){

      fileReader.onloadend = function () {
        $('#editar_foto_view').attr('src', fileReader.result)
      }
      fileReader.readAsDataURL(file)
    }else{
      $('#editar_foto_view').attr('src', 'https://i1.wp.com/www.hotbook.com.br/wp-content/uploads/2019/09/plural-de-perfil.png?resize=150%2C147&ssl=1')
    }
  })
})