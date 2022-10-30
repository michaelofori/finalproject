function onAddCat(){
    event.preventDefault();
    cat_name= document.getElementById("cat_name").value;
    

    dataString = 'cat_name='+ cat_name ;
    $.ajax({
        type:"POST",
        url:"../actions/add_cat_proc.php",
        data: dataString,
        cache:false,
        success:function(result){
            alert(result);
            if(result == "success"){
                // window.location= "../media.php";
            }
        }
    })
}

function addProduct(){
    
    event.preventDefault();
    p_name = document.getElementById('name').value;
    p_desc = document.getElementById("description").value;
    p_price= document.getElementById("price").value;
    p_image= document.getElementById("image");
    p_cat= document.getElementById("cat").value;
    var image= p_image.files[0];
    var image_name= image.name;
    console.log(image);
    var formData = new FormData();
    formData.append("p_image", image);
    formData.append("p_name", p_name);
    formData.append("p_price", p_price);
    formData.append("p_desc", p_desc);
    formData.append("p_cat", p_cat);
    
	
   
    
          
     console.log("bag");
    $.ajax({
    type:"POST",
    url:"../actions/add_prod_proc.php",
    data: formData,
    enctype: 'multipart/form-data',
    processData:false,
    contentType:false,
    cache:false,
    success:function(result){
        alert(result);
        console.log(result);
        if(result == "success"){
           //Alert in bootstrap
        }
    }
});
}

function updateProduct(){
    event.preventDefault();
   
    p_name = document.getElementById('name').value;
    p_desc = document.getElementById("description").value;
    p_price= document.getElementById("price").value;
    p_cat= document.getElementById("cat").value;
    p_id= document.getElementById("p_id").value;
    console.log(p_desc);
  
    var formData = new FormData();
   
    formData.append("p_name", p_name);
    formData.append("p_price", p_price);
    formData.append("p_desc", p_desc);
    formData.append("p_cat", p_cat);
    formData.append("p_id",p_id);

    $.ajax({
    type:"POST",
    url:"../actions/update_proc.php",
    data: formData,
    enctype: 'multipart/form-data',
    processData:false,
    contentType:false,
    cache:false,
    success:function(result){
        alert(result);
        console.log(result);
        if(result == "success"){
           //Alert in bootstrap
        }
    }
});

}

function deleteProduct(id){
    event.preventDefault();
    alert("delete");

  
    console.log(id);
    var formData = new FormData();
   
    formData.append("p_id", id);

    $.ajax({
        type:"POST",
        url:"../actions/delete_prod_proc.php",
        data: formData,
        enctype: 'multipart/form-data',
        processData:false,
        contentType:false,
        cache:false,
        success:function(result){
            alert(result);
            console.log(result);
            if(result == "success"){
               
            }
        }
    });


}