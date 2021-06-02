$(document).ready(function(){
  $('.comment-form').submit(proccessComment);
})

function proccessComment(e){
  e.preventDefault();
  $form = $(this);
  $action = $form.attr("action");
  $formData = $form.serializeArray();

  $formData.push({name:"add_comment",value:true});
  console.log($formData,$action);
  $.ajax({
     method:'POST',
     url:$action,
     data:$formData,
     success:function($res){
       $res = JSON.parse($res);
       if($res.status == "success"){
         alert($res.message);
         $form.trigger('reset');
         setTimeout(() => {
          location.reload();
         }, 2000);


       }else if($res.status == "error"){
        alert($res.message)
       }
     }
  })
 
}