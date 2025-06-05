<br><br>
<!-- </div>
</div> -->
<!-- Footer Start -->
<!-- <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">

    </div>
</div> -->
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid  text-body copyright py-4"style="background-color: #563103; padding: 10px 0;">

    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" >
                <div class="text-light">
                  &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>,
                  All Right Reserved.
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="text-light">
                Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                      href="https://themewagon.com">ThemeWagon</a>
              </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/publica/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/publica/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/publica/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/publica/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/publica/lib/parallax/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/publica/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url(); ?>/assets/publica/js/main.js"></script>

<!-- cdns -->
<?php if ($this->session->flashdata("confirmacion")): ?>
<script type="text/javascript">
  iziToast.success({
       title: 'CONFIRMACIÓN',
       message: '<?php echo $this->session->flashdata("confirmacion"); ?>',
       position: 'topRight',
     });
</script>
<?php endif; ?>

<?php if ($this->session->flashdata("error")): ?>
<script type="text/javascript">
  iziToast.danger({
       title: 'ADVERTENCIA',
       message: '<?php echo $this->session->flashdata("error"); ?>',
       position: 'topRight',
     });
</script>
<?php endif; ?>


<?php if ($this->session->flashdata("bienvenida")): ?>
<script type="text/javascript">
  iziToast.info({
       title: 'CONFIRMACIÓN',
       message: '<?php echo $this->session->flashdata("bienvenida"); ?>',
       position: 'topRight',
     });
</script>
<?php endif; ?>


<style media="screen">
  .error{
    color:red;
    font-size: 16px;
  }
  input.error, select.error{
    border: 2px solid red;
  }
  
</style>

</body>

          
</html>
