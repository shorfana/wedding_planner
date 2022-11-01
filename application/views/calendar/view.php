<div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Wedding Planner</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Planning Calendar</a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
            </div>
          </div>
        </div>
        

<!-- form modals --> 
<section id="form-and-scrolling-components">
  <div class="row match-height">
    <div class="col-md-4 col-sm-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#inlineForm">
    Tambah Card
    </button>

<!-- start modals add judul -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel33">Add Card Calendar </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="form" name="form" method="POST">
            <div class="modal-body">
            <label>Judul: </label>
            <div class="form-group">
                <input type="text"  id="judul"  placeholder="title" class="form-control">
            </div>
            <label>Deskripsi: </label>
            <div class="form-group">
                <input type="text" id="deskripsi" placeholder="deskripsi" class="form-control">
            </div>
            <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Buat Card</button> -->
            <!-- <input id="submit" onclick="AddCard()" value="Buat Card" class="btn btn-primary" type="button" class="btn btn-primary" data-dismiss="modal"> -->
            <input id="submit" onclick="AddCard()" class="btn btn-primary" type="button" value="Submit" data-dismiss="modal">
            </div>
        </form>
        </div>
    </div>
</div>
</section>       
<!-- end modals tambahList -->



<!-- Content types section start -->
<section id="content-types">
  <div class="row match-height">
    <?php foreach ($card as $key) { ?>
    <div class="col-xl-4 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <h4 class="card-title"><?php echo $key->title ?> 
            <button type="button" style=" background-color: transparent;
                                          background-repeat: no-repeat;
                                          border: none;
                                          cursor: pointer;
                                          overflow: hidden;
                                          outline: none;"  
            data-toggle="modal" data-target="#editcard<?php echo $key->id ?>">
            <i class="feather icon-edit"></i>
            </button>
           </h4> 
            <p class="card-text"><?php echo $key->deskripsi ?></p>
          </div>

          <?php foreach ($list as $l) { ?>

          <?php if ($l->id_kalendar2 == $key->id) { ?>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <!-- <span class="badge badge-pill bg-primary float-right">cek</span> -->
                  <label class="float-right">
                  
                    <?php if ($l->status == null) { ?>
                    <input type="checkbox" value="" name="checked" disabled>
                    <?php } else { ?>
                    <input type="checkbox" value="" name="null" checked disabled>
                    <?php } ?>
                  
                      
                  </label>
                  <button type="button" style=" background-color: transparent;
                                          background-repeat: no-repeat;
                                          border: none;
                                          cursor: pointer;
                                          overflow: hidden;
                                          outline: none;"  
                                          data-toggle="modal" data-target="#editlist<?php echo $l->id ?>">
                  <i class="fa fa-pencil-square-o"></i></button>&nbsp;<?php echo $l->list?>
                </li>
              </ul>
              <?php } ?>
        <div class="modal fade text-left" id="editlist<?php echo $l->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Edit List  </h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="<?php echo base_url()."calendar/editList" ?>" method="POST">
                      <div class="modal-body">
                        <label>List: </label>
                        
                        <input type="hidden" placeholder="List" name="id" value="<?php echo $l->id ?>" class="form-control">
                        <div class="form-group">
                            <input type="text" placeholder="List" name="list" value="<?php echo $l->list ?>" class="form-control">
                        </div>
                        <label>Status: </label>
                        <div class="form-group">
                        <fieldset class="form-group">
                            <select class="form-control" name="status">
                                <option value="<?php echo $l->status ?>" selected>
                                <?php if ($l->status == 'active') {
                                  echo 'Sudah Selesai';
                                }else{
                                  echo 'Belum Selesai';
                                } ?>
                                </option>
                                <option value="active">Sudah Selesai</option>
                                <option value="">Belum Selesai</option>
                            </select>
                        </fieldset>
                        </div>
                        <div class="modal-footer">
                          <!-- <input id="submit" onclick="AddList()" class="btn btn-primary" type="button" value="Submit" data-dismiss="modal"> -->
                          <button type="submit" class="btn btn-primary" >
                          Edit List
                          </button>
                        </div>
                      </div>  
                  </form>
                </div>
            </div>
        </div>
        <?php } ?>
          <!-- <div class="card-body"> -->
            <center>
          <button type="button" class="btn btn-flat-light mr-1 mb-1" data-toggle="modal" data-target="#tambahList<?php echo $key->monthh ?>">
          Tambah List
          </button></center>
          <!-- </div> -->
        </div>
      </div>
    </div>
    
        <div class="modal fade text-left" id="tambahList<?php echo $key->monthh ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33"><?php echo $key->title ?> </h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="<?php echo base_url()."calendar/addList" ?>" method="POST">
                      <div class="modal-body">
                        <label>List: </label>
                        
                        <input type="hidden" placeholder="List" name="idkalender" value="<?php echo $key->id ?>" class="form-control">
                        <div class="form-group">
                            <input type="text" placeholder="List" name="listkalender" class="form-control">
                        </div>
                        <div class="modal-footer">
                          <!-- <input id="submit" onclick="AddList()" class="btn btn-primary" type="button" value="Submit" data-dismiss="modal"> -->
                          <button type="submit" class="btn btn-primary" >
                          Tambah List
                          </button>
                        </div>
                      </div>  
                  </form>
                </div>
            </div>
        </div>

        <div class="modal fade text-left" id="editcard<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Edit Card  (<?php echo $key->title ?>) </h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="<?php echo base_url()."calendar/editCard" ?>" method="POST">
                      <div class="modal-body">
                        <label>List: </label>
                        
                        <input type="hidden" placeholder="List" name="id" value="<?php echo $key->id ?>" class="form-control">
                        <div class="form-group">
                            <input type="text" placeholder="Judul" name="judul" value="<?php echo $key->title ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Deskripsi" name="deskripsi" value = "<?php echo $key->deskripsi ?>" class="form-control">
                        </div>
                        <div class="modal-footer">
                          <!-- <input id="submit" onclick="AddList()" class="btn btn-primary" type="button" value="Submit" data-dismiss="modal"> -->
                          <button type="submit" class="btn btn-primary" >
                          Edit List
                          </button>
                        </div>
                      </div>  
                  </form>
                </div>
            </div>
        </div>

        


        

    <?php } ?>
    
    
  </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->

<!-- start modals add judul -->

<!-- </section>        -->
<!-- end modals -->

<script>
  function AddCard(){
      var judul = document.getElementById("judul").value;
      var deskripsi = document.getElementById("deskripsi").value;
      var dataAdd = "judul="+judul+"&deskripsi="+deskripsi;
      // console.log(dataAdd);
      $.ajax({
          type: "POST",
          url: "<?php echo base_url()."calendar/addCard" ?>",
          data: dataAdd,
          cache: false,
          success: function(result) {
              // console.log(result);
              var response =  JSON.parse(result);
              if(response.success == true){
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: response.msg,
                      showConfirmButton: false,
                      timer: 1000
                  })
                  location.reload();
              }else{
                  Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: response.msg,
                      showConfirmButton: false,
                      timer: 1000
                  })
                  location.reload();
              }
          },
          error: function(error){
              console.log("error: " + error);
          }
          // window.location.href = 'http://www.google.com';
      });
  }

</script>