$(function (){
  $('#inscrever_foto').change(function () {
      const file = $(this)[0].files[0]
      const fileReader = new FileReader()
      if(file){

          fileReader.onloadend = function () {
              $('#inscrever_foto_view').attr('src', fileReader.result)
          }
          fileReader.readAsDataURL(file)
      }else{
          $('#inscrever_foto_view').attr('src', 'https://i1.wp.com/www.hotbook.com.br/wp-content/uploads/2019/09/plural-de-perfil.png?resize=150%2C147&ssl=1')
      }
  })
})