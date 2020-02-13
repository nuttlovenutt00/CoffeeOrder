  //ปุ่ม Refresh
   function refresh(){
     document.getElementById("btn-refresh").setAttribute("class", "fa fa-refresh fa-spin");
    location.reload();
   }

  //เมื่อกดปุ่มเพิ่มสินค้า
  function insertdata(){
    $('#modal-addproduct').modal('show');
    $("#textheader").html('<i class="fa fa-plus-square"></i> เพิ่มข้อมูลสินค้า');    
    $("#id_pro").val(autoid);
    $("#name_pro").val("");
    $("#p_pro").val("");
    document.getElementById("type_pro").selectedIndex="0";
    document.getElementById("unit_pro").selectedIndex="0";
    document.getElementById("status_pro").selectedIndex="0";
  }


  //เปิดหน้าต่างเพิ่มสินค้าแล้วให้ไปโฟกัสที่ textbox
  $('#modal-addproduct').on('shown.bs.modal', function () {
    $('#type_pro').trigger('focus')
  })

  //เวลาปิดหน้าต่างเพิ่มสินค้า ให้รีเฟรชหน้า
  $('#modal-addproduct').on('hidden.bs.modal', function () {
   // location.reload();
  })

  //เวลากดปุ่มเพิ่มสินค้า
  document.getElementById("insert_pro").addEventListener("click", function(){
      //ส่งค่าไปเช็คก่อนที่จะเพิ่ม
      $.ajax({
        url: baseUrl+'Product/checkinsertpro',
        type: 'POST',       
        data:$('#form_insertpro').serialize(),
        dataType:'json',
        beforeSend: function() {
          $('#form_body_insert').hide();
          $('#form_body_insert_load').show();
        },
        success: function(data) 
        { 
          if(data.status=="name_pro_no"){
            $('#form_body_insert').show();
            $('#form_body_insert_load').hide();
            $('#error_namepro_no').show();
              //แก้ไข class ของ div
              document.getElementById("name_pro").setAttribute("class", "form-control is-invalid Promptfontsize");
          }else if(data.status=="p_pro_no"){
            $('#form_body_insert').show();
            $('#form_body_insert_load').hide();
            $('#error_p_pro_no').show();
              document.getElementById("p_pro").setAttribute("class", "form-control is-invalid Promptfontsize");
          }else if(data.status=="p_pro_noname_pro"){
            $('#form_body_insert').show();
            $('#form_body_insert_load').hide();
            $('#error_namepro_no').show();
              document.getElementById("name_pro").setAttribute("class", "form-control is-invalid Promptfontsize");
            $('#error_p_pro_no').show();
             document.getElementById("p_pro").setAttribute("class", "form-control is-invalid Promptfontsize");
          }
          else if(data.status=="p_pro_nint"){
            $('#form_body_insert').show();
            $('#form_body_insert_load').hide();
            $('#error_p_pro_noint').show();
             document.getElementById("p_pro").setAttribute("class", "form-control is-invalid Promptfontsize");
          }
          else if(data.status=="p_pro_zero"){
            $('#form_body_insert').show();
            $('#form_body_insert_load').hide();
            $('#error_p_pro_zero').show();
             document.getElementById("p_pro").setAttribute("class", "form-control is-invalid Promptfontsize");
          }else if(data.status =="p_pro_nametwo"){
              $('#form_body_insert').show();
              $('#form_body_insert_load').hide();
              $('#error_p_pro_nametwo').show();
             document.getElementById("name_pro").setAttribute("class", "form-control is-invalid Promptfontsize");
          }else if(data.status =="ok"){
              consave();
          }
        
        },
        error: function() 
        { 
          //console.log("error");
        
        }
      });
  });


  //เมื่อช่องชื่อสินค้าถูกคลิกให้กลับไปเป็นปกติ
  function myFunction(x,y,z,zz) {
  $('#'+y).hide();
  $('#'+z).hide();
  $('#'+zz).hide();
   x.setAttribute("class", "form-control  Promptfontsize");
  }




    //แสดงหน้าต่าง alert ถามเมื่อกดลบ
    function SwalDelete(id,name){
    
        Swal.fire({
      title: 'ต้องการลบข้อมูล "'+ name + '" หรือไม่?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'ใช่, ต้องการลบ!',
      cancelButtonText: 'ยกเลิก'
      }).then((result) => {
      if (result.value) {
            //ถ้ากด ใช่ ให้ส่งค่าไปลบ
            $.ajax({
                url: baseUrl+'Product/delpro',
                type: 'POST',       
                data:{id:id},
                dataType:'json',
                beforeSend: function() {
                  $('#formmain').hide();
                  $('#formmainload').show();
                },
                success: function(data) 
                { 
                  $('#formmain').show();
                  $('#formmainload').hide();
                  if(data.status =="ok"){
                    
                    //เมื่อลบสำเร็จให้แสดง Alert
                    Swal.fire({
                      title: 'ลบข้อมูลสำเร็จ!',
                      text: 'ข้อมูลจะแสดงก็ต่อเมื่อรีเฟรชหน้าจอ',
                      icon: 'success',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      confirmButtonText: 'OK',
                      }).then((result) => {
                      if (result.value) {
                        $('#formmain').hide();
                        $('#formmainload').show();
                          location.reload();
                      }
                      });
                   document.getElementById("swal2-title").setAttribute("class", "swal2-title Promptfontsize2");
                   document.getElementById("swal2-content").setAttribute("class", "swal2-title Promptfontsize2");
                  }
                  
                }
              });
      }
    })
      document.getElementById("swal2-title").setAttribute("class", "swal2-title Promptfontsize2");

    
  }

  //เมื่อค่าถูกเช็คแล้ว แสดงหน้าต่างยืนยันการเพิ่มข้อมูล
  function consave(){
    
        Swal.fire({
      title: 'ต้องการบันทึกข้อมูลทั้งหมดนี้ หรือไม่?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#28a745',
      cancelButtonColor: '#d33',
      confirmButtonText: 'ใช่, ต้องบันทึก !',
      cancelButtonText: 'ยกเลิก'
      }).then((result) => {
        if (result.value) {
             $.ajax({
                url: baseUrl+'Product/saveinsertpro',
                type: 'POST',       
                data:$('#form_insertpro').serialize(),
                dataType:'json',
                beforeSend: function() {
                    $('#form_body_insert').hide();
                    $('#form_body_insert_load').show();
                },
                success: function(data) 
                { 
                  $('#form_body_insert').show();
                  $('#form_body_insert_load').hide();
                  if(data.status=="ok"){
                    $('#name_pro').val("");
                    $('#p_pro').val("");
                    document.getElementById("type_pro").selectedIndex="0";
                    document.getElementById("unit_pro").selectedIndex="0";
                    document.getElementById("status_pro").selectedIndex="0";
                    $('#id_pro').val(data.idnew);
                    $('#name_pro').trigger('focus')


                    Swal.fire({
                      title: 'บันทึกข้อมูลสำเร็จ!',
                      text: 'ข้อมูลจะแสดงก็ต่อเมื่อรีเฟรชหน้าจอ',
                      icon: 'success',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'รีเฟรชข้อมูล',
                      cancelButtonText: 'เอาไว้ก่อน'
                      }).then((result) => {
                        if (result.value) {
                          $('#modal-addproduct').modal('hide');
                          $('#formmain').hide();
                          $('#formmainload').show();
                          location.reload();
                      }
                      });
                    document.getElementById("swal2-content").setAttribute("class", "swal2-title Promptfontsize2");
                    document.getElementById("swal2-title").setAttribute("class", "swal2-title Promptfontsize2");
                  }
                   
                }
              });
           }else{
             $('#form_body_insert').show();
              $('#form_body_insert_load').hide();
           }
    });
      document.getElementById("swal2-title").setAttribute("class", "swal2-title Promptfontsize2");

    
  }

 
    //เมื่อกดปุ่ม Copy
  function copydata(type,name,price,unit,status){
    $('#modal-addproduct').modal('show');
    $("#textheader").html('<i class="fa fa-clone"></i> คัดลอกข้อมูล');
    $("#type_pro").val(type);
    $("#id_pro").val(autoid);
    $("#name_pro").val(name);
    $("#p_pro").val(price);
    $("#status_pro").val(status);
    document.getElementById("typeProduct"+type).selected = "true";
    document.getElementById("Unit"+unit).selected = "true";

  }

    //เมื่อกดปุ่ม แก้ไข
  function editdata(id,type,name,price,unit,status){
    $('#modal-addproduct').modal('show');
    $("#textheader").html('<i class="fa fa-edit"></i> แก้ไขข้อมูล');
    $("#id_pro").val(id);
    $("#type_pro").val(type);
    $("#name_pro").val(name);
    $("#p_pro").val(price);
    $("#status_pro").val(status);
    document.getElementById("typeProduct"+type).selected = "true";
    document.getElementById("Unit"+unit).selected = "true";

    document.getElementById("insert_pro").setAttribute("class", "fa fa-refresh fa-spin");


  }
