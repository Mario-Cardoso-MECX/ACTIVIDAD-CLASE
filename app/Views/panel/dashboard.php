<?=$this->extend("plantillas/panel_base");?>

<?=$this->Section("Contenido");?>
Hola
<?=$this->endSection();?>

<?= $this->section('css_especificos') ?>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('recursos_panel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('recursos_panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('recursos_panel/plugins/jqvmap/jqvmap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('recursos_panel/plugins/daterangepicker/daterangepicker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('recursos_panel/plugins/summernote/summernote-bs4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('recursos_panel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
<?= $this->endSection() ?>


<?= $this->section('js_especificos') ?>
  <script src="<?= base_url('recursos_panel/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/sparklines/sparkline.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/moment/moment.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/daterangepicker/daterangepicker.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/summernote/summernote-bs4.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
  <script src="<?= base_url('recursos_panel/js/pages/dashboard.js') ?>"></script>
<?= $this->endSection() ?>