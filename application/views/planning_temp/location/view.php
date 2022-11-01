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
                    <li class="breadcrumb-item"><a href="#">Location</a>
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
        <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#exampleModalScrollable">
    Tambah Card
    </button>

<section id="content-types">
  <div class="row match-height">
<?php  foreach ($card as $key => $k) { ?>
    <div class="col-xl-4 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <h4 class="card-title"><b><?php echo $k->nama_lokasi ?></b>
            <button type="button" style=" background-color: transparent;
                                          background-repeat: no-repeat;
                                          border: none;
                                          cursor: pointer;
                                          overflow: hidden;
                                          outline: none;"  
            data-toggle="modal" data-target="#editcard<?php echo $k->id ?>">
            <i class="feather icon-edit"></i>
            </button>
            </h4>
            <p class="card-text"><?php echo ""; ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <!-- <span class="badge badge-pill bg-primary float-right">4</span> -->
              Price : <?php echo "Rp " . number_format( $k->harga,2,',','.') ?>
            </li>
          </ul>
          <div class="card-body">
          <!-- <a href="whatsapp://send?abid=phonenumber&text=Hello%2C%20World!">Send Message</a> -->
            <a href="https://api.whatsapp.com/send?phone=15551234567" class="card-link">Contact Person</a>
            <a href="https://<?php echo $k->link; ?>" target="_blank" class="card-link">link website</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade text-left" id="editcard<?php echo $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit Card  (<?php echo $k->nama_lokasi ?>) </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url()."location/editCard" ?>" method="POST">
                    <div class="modal-body">
                      <input type="hidden" placeholder="List" name="id" value="<?php echo $k->id ?>" class="form-control">
                      <label>Nama Lokasi: </label>
                      <div class="form-group">
                          <input type="text" placeholder="nama lokasi" name="nama_lokasi" value="<?php echo $k->nama_lokasi ?>" class="form-control">
                      </div>
                      <label>Latitude: </label>
                      <div class="form-group">
                          <input type="text" placeholder="latitude" name="latitude" value = "<?php echo $k->latitude ?>" class="form-control">
                      </div>
                      <label>Longitude: </label>
                      <div class="form-group">
                          <input type="text" placeholder="longitude" name="longitude" value = "<?php echo $k->longitude ?>" class="form-control">
                      </div>
                      <label>Price: </label>
                      <div class="form-group">
                          <input type="text" placeholder="price" name="price" value = "<?php echo  number_format( $k->harga,0,'','.') ?>" class="form-control">
                      </div>
                      <label>Contact: </label>
                      <div class="form-group">
                          <input type="text" placeholder="contact" name="contact" value = "<?php echo $k->contact ?>" class="form-control">
                      </div>
                      <label>Link: </label>
                      <div class="form-group">
                          <input type="text" placeholder="link" name="link" value = "<?php echo $k->link ?>" class="form-control">
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
  <!-- </div> -->

</section>



</div>
      </div>
    </div>

    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add Card Lokasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form id="form" name="form" method="POST">
                      <div class="modal-body">
                        <label>Nama Lokasi/Gedung: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Nama Lokasi/Gedung" id="nama_lokasi" class="form-control">
                        </div>
                        <label>Harga (Rp): </label>
                        <div class="form-group">
                            <input type="text" placeholder="Rp. 000.000" id="tanpa-rupiah" class="form-control">
                        </div>
                        <label>Latitude: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Latitude" id="latitude" class="form-control">
                        </div>
                        <label>Longitude: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Longitude" id="longitude" class="form-control">
                        </div>
                        <label>Contact Person: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Catatan" id="contact" class="form-control">
                        </div>
                        <label>Link: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Link" id="link" class="form-control">
                        </div>
                      </div>
                        <!-- <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Buat Card</button>
                        </div> -->
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="submit" class="btn btn-primary">Buat Card</button> -->
                    <input id="submit" onclick="AddCard()" class="btn btn-primary" type="button" value="Submit" data-dismiss="modal">
                  </div>
                  </form>
                </div>
              </div>
            </div>
<!-- end modals tambahList -->

<!-- Content types section start -->


<script>
  function AddCard(){
      var lokasi = document.getElementById("nama_lokasi").value;
      var harga = document.getElementById("tanpa-rupiah").value;
      var latitude = document.getElementById("latitude").value;
      var longitude = document.getElementById("longitude").value;
      var contact = document.getElementById("contact").value;
      var link = document.getElementById("link").value;
      var dataAdd = "nama_lokasi="+lokasi+"&harga="+harga+"&latitude="+latitude+"&longitude="+longitude  
      +"&contact="+contact+"&link="+link;
      console.log(dataAdd);
      $.ajax({
          type: "POST",
          url: "<?php echo base_url()."location/addCard" ?>",
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

    /* Tanpa Rupiah */
    var tanpa_rupiah = document.getElementById('tanpa-rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>