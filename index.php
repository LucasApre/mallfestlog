<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<body>
<?php $page = isset($_GET['p']) ? $_GET['p'] : 'home';  ?>
<?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
<?php endif;?>
<?php 
    if(!file_exists($page.".php") && !is_dir($page)){
        include '404.html';
    }else{
      if(is_dir($page))
        include $page.'/index.php';
      else
        include $page.'.php';
    }
?>
<?php require_once('inc/footer.php') ?>

  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog   rounded-0 modal-md modal-dialog-centered" role="document">
      <div class="modal-content  rounded-0">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Salvar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog  rounded-0 modal-full-height  modal-md" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Comfirmação</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continuar </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
    </div>
  </div>

</body>
</html>