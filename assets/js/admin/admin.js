$(document).ready(function(){

  // listener for any delete request
  $(".delete_data").click(processDeleteRequest);

})


/**
 * This function handles delete data
 */
function processDeleteRequest(event){
  event.preventDefault();
  $target = $(this);
  $data_id = $target.data("id");
  $data_role=$target.data("role");
  $name = $target.data("name");
  $action = $target.attr("href");
  $dataObj = {id:$data_id,[`delete${$name}`]:true,role:$data_role};
  console.log($dataObj)

  if(confirm(`Do you want to delete this ${$name}`)){
    // $.post( "test.php", { name: "John", time: "2pm" } );
      $.ajax({
        method:"POST",
        url:$action,
        data:$dataObj,
        success:function($res){
            $res =   JSON.parse($res);
            if($res.status == "success"){
              alert($res.message);
              $(`#row${$data_id}`).remove();
            }else{
              alert($res.message);
            }

        }
      })
  }

}